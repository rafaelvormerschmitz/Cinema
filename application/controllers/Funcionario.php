<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Funcionario_model');
    }

    public function listar() {
        $fn['funcionario'] = $this->Funcionario_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaFuncionario', $fn);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('tx_nome', 'tx_nome', 'required');
        $this->form_validation->set_rules('sr_salario', 'sr_salario', 'required');
        $this->form_validation->set_rules('tx_periodo', 'tx_periodo', 'required');
        $this->form_validation->set_rules('tx_horario', 'tx_horario', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Header');
            $this->load->view('FormFuncionario');
            $this->load->view('Footer');
        } else {
            $fn = array(
                'tx_nome' => $this->input->post('tx_nome'),
                'sr_salario' => $this->input->post('sr_salario'),
                'tx_periodo' => $this->input->post('tx_periodo'),
                'tx_horario' => $this->input->post('tx_horario'),
            );
            if ($this->Funcionario_model->insert($fn)) {
                $this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!!');
                redirect('Funcionario/listar');
            } else {
                redirect('Funcionario/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar!!');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('tx_nome', 'tx_nome', 'required');
            $this->form_validation->set_rules('sr_salario', 'sr_salario', 'required');
            $this->form_validation->set_rules('tx_periodo', 'tx_periodo', 'required');
            $this->form_validation->set_rules('tx_horario', 'tx_horario', 'required');

            if ($this->form_validation->run() === false) {
                $fn['funcionario'] = $this->Funcionario_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormFuncionario', $fn);
                $this->load->view('Footer');
            } else {
                $fn = array(
                    'tx_nome' => $this->input->post('tx_nome'),
                    'sr_salario' => $this->input->post('sr_salario'),
                    'tx_periodo' => $this->input->post('tx_periodo'),
                    'tx_horario' => $this->input->post('tx_horario'),
                );

                if ($this->Funcionario_model->update($id, $fn)) {
                    $this->session->set_flashdata('mensagem', 'Alteração com sucesso!!!');
                    redirect('Funcionario/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Funcionario/alterar/' . $id);
                }
            }
        } else {
            redirect('Funcionario/listar');
        }
    }

    public
            function deletar($id) {
        if ($id > 0) {
            if ($this->Funcionario_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Deletado com sucesso!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar!');
            }
        }
        redirect('Funcionario/listar');
    }

}
