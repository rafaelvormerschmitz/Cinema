<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index() {
        $this->load->view('Login');
    }

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Usuario_model');
    }

    public function login() {
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Login');
        } else {
            $this->load->model('Usuario_model');
            $usuario = $this->Usuario_model->getUsuario(
                    $this->input->post('email'), $this->input->post('senha')
            );
            if ($usuario) {
                $data = array(
                    'idUsuario' => $usuario->id,
                    'email' => $usuario->email,
                    'logado' => true
                );
                $this->session->set_userdata($data);
                redirect($this->config->base_url());
            } else {
                $this->session->set_flashdata('mensagem', 'Usuário e Senha Incorreto!');
                redirect($this->config->base_url() . 'Usuario/login');
            }
        }
    }

    public function cadastrar() {

        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|is_unique[tb_usuario.email]');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Cadastrar');
        } else {
            $cd = array(
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'senha' => $this->input->post('senha'),
            );
            if ($this->Usuario_model->insert($cd)) {
                $this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!!');
                redirect('Usuario/login');
            } else {
                redirect('Usuario/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar!!');
            }
        }
    }

    public function sair() {
        $this->session->sess_destroy();
        redirect($this->config->base_url());
    }

}
