<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Usuario_model');
    }

    public function listar() {
        $us['usuario'] = $this->Usuario_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaUsuario', $us);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Header');
            $this->load->view('FormUsuario');
            $this->load->view('Footer');
        } else {
            $us = array(
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'senha' => $this->input->post('senha'),
                'status' => $this->input->post('status'),
            );
            if ($this->Usuario_model->insert($us)) {
                $this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!!');
                redirect('Usuario/listar');
            } else {
                redirect('Usuario/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar!!');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('senha', 'senha', 'required');
            $this->form_validation->set_rules('status', 'status', 'required');

            if ($this->form_validation->run() === false) {
                $us['usuario'] = $this->Usuario_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormUsuario', $us);
                $this->load->view('Footer');
            } else {
                $us = array(
                    'nome' => $this->input->post('nome'),
                    'email' => $this->input->post('email'),
                    'senha' => $this->input->post('senha'),
                    'status' => $this->input->post('status'),
                );

                if ($this->Usuario_model->update($id, $us)) {
                    $this->session->set_flashdata('mensagem', 'Alteração com sucesso!!!');
                    redirect('Usuario/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Usuario/alterar/' . $id);
                }
            }
        } else {
            redirect('Usuario/listar');
        }
    }

    public
            function deletar($id) {
        if ($id > 0) {
            if ($this->Usuario_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Deletado com sucesso!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar!');
            }
        }
        redirect('Usuario/listar');
    }

}
