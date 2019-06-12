<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Cliente_model');
    }

    public function listar() {
        $cl['cliente'] = $this->Cliente_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaCliente', $cl);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('sobrenome', 'sobrenome', 'required');
        $this->form_validation->set_rules('CPF', 'CPF', 'required');
        $this->form_validation->set_rules('sexo', 'sexo', 'required');
        $this->form_validation->set_rules('estado', 'estado', 'required');
        $this->form_validation->set_rules('cidade', 'cidade', 'required');
        $this->form_validation->set_rules('endereco', 'endereco', 'required');
        $this->form_validation->set_rules('telefone', 'telefone', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('nascimento', 'nascimento', 'required');

        if ($this->form_validation->run() === FALSE) {
            $cl['cliente'] = $this->Cliente_model->getAll();
            $this->load->view('Header');
            $this->load->view('FormCliente', $cl);
            $this->load->view('Footer');
        } else {
            $cl = array(
                'nome' => $this->input->post('nome'),
                'sobrenome' => $this->input->post('sobrenome'),
                'CPF' => $this->input->post('CPF'),
                'sexo' => $this->input->post('sexo'),
                'estado' => $this->input->post('estado'),
                'cidade' => $this->input->post('cidade'),
                'endereco' => $this->input->post('endereco'),
                'telefone' => $this->input->post('telefone'),
                'email' => $this->input->post('email'),
                'nascimento' => $this->input->post('nascimento'),
            );
            if ($this->Cliente_model->insert($cl)) {
                $this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!!');
                redirect('Cliente/listar');
            } else {
                redirect('Cliente/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar!!');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('sobrenome', 'sobrenome', 'required');
            $this->form_validation->set_rules('CPF', 'CPF', 'required');
            $this->form_validation->set_rules('sexo', 'sexo', 'required');
            $this->form_validation->set_rules('estado', 'estado', 'required');
            $this->form_validation->set_rules('cidade', 'cidade', 'required');
            $this->form_validation->set_rules('endereco', 'endereco', 'required');
            $this->form_validation->set_rules('telefone', 'telefone', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('nascimento', 'nascimento', 'required');

            if ($this->form_validation->run() === false) {
                $cl['cliente'] = $this->Cliente_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormCliente', $cl);
                $this->load->view('Footer');
            } else {
                $cl = array(
                    'nome' => $this->input->post('nome'),
                    'sobrenome' => $this->input->post('sobrenome'),
                    'CPF' => $this->input->post('CPF'),
                    'sexo' => $this->input->post('sexo'),
                    'estado' => $this->input->post('estado'),
                    'cidade' => $this->input->post('cidade'),
                    'endereco' => $this->input->post('endereco'),
                    'telefone' => $this->input->post('telefone'),
                    'email' => $this->input->post('email'),
                    'nascimento' => $this->input->post('nascimento'),
                );

                if ($this->Cliente_model->update($id, $cl)) {
                    $this->session->set_flashdata('mensagem', 'Alteração com sucesso!!!');
                    redirect('Cliente/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Cliente/alterar/' . $id);
                }
            }
        } else {
            redirect('Cliente/listar');
        }
    }

    public
            function deletar($id) {
        if ($id > 0) {
            if ($this->Cliente_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Deletado com sucesso!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar!');
            }
        }
        redirect('Cliente/listar');
    }

}
