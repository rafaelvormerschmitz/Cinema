<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresso extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Ingresso_model');
        $this->load->helper('url');
    }

    public function listar() {

        $is['ingresso'] = $this->Ingresso_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaIngresso', $is);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('tx_status', 'tx_status', 'required');
        $this->form_validation->set_rules('vl_ingresso', 'vl_ingresso', 'required');

        if ($this->form_validation->run() === FALSE) {

            $dados['ingresso'] = $this->Ingresso_model->getAll();

            $this->load->view('Header');
            $this->load->view('FormIngresso', $dados);
            $this->load->view('Footer');
        } else {

            $is = array(
                'tx_status' => $this->input->post('tx_status'),
                'vl_ingresso' => $this->input->post('vl_ingresso'),
            );
            if ($this->Ingresso_model->insert($is)) {
                $this->session->set_flashdata('mensagem', 'Ingresso cadastrado com sucesso!!');
                redirect('ingresso/listar');
            } else {
                redirect('ingresso/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar o Ingresso!!');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('tx_status', 'tx_status', 'required');
            $this->form_validation->set_rules('vl_ingresso', 'vl_ingresso', 'required');

            if ($this->form_validation->run() === false) {
                $is['ingresso'] = $this->Ingresso_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormIngresso', $is);
                $this->load->view('Footer');
            } else {
                $is = array(
                    'tx_status' => $this->input->post('tx_status'),
                    'vl_ingresso' => $this->input->post('vl_ingresso'),
                );
                if ($this->Ingresso_model->update($id, $is)) {
                    $this->session->set_flashdata('mensagem', 'Ingresso alterado com sucesso!!!');
                    redirect('ingresso/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('ingresso/alterar/' . $id);
                }
            }
        } else {
            redirect('ingresso/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->Ingresso_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Ingresso deletado com sucesso!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar o Ingresso!');
            }
        }
        redirect('ingresso/listar');
    }

}
