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
        $this->form_validation->set_rules('endereco', 'endereco', 'required');
        $this->form_validation->set_rules('estado', 'estado', 'required');
        $this->form_validation->set_rules('cidade', 'cidade', 'required');
        $this->form_validation->set_rules('cep', 'cep', 'required');
        $this->form_validation->set_rules('telefone', 'telefone', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('nascimento', 'nascimento', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Header');
            $this->load->view('FormCliente');
            $this->load->view('Footer');
        } else {

            $cl = array(
                'nome' => $this->input->post('nome'),
                'sobrenome' => $this->input->post('sobrenome'),
                'CPF' => $this->input->post('CPF'),
                'endereco' => $this->input->post('endereco'),
                'estado' => $this->input->post('estado'),
                'cidade' => $this->input->post('cidade'),
                'cep' => $this->input->post('cep'),
                'telefone' => $this->input->post('telefone'),
                'email' => $this->input->post('email'),
                'nascimento' => $this->input->post('nascimento'),
            );
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('tx_nome', 'tx_nome', 'required');
            $this->form_validation->set_rules('sp_sinopse', 'sp_sinopse', 'required');
            $this->form_validation->set_rules('tx_duracao', 'tx_duracao', 'required');
            $this->form_validation->set_rules('tx_companhia', 'tx_companhia', 'required');
            $this->form_validation->set_rules('tx_genero', 'tx_genero', 'required');
            $this->form_validation->set_rules('tx_status', 'tx_status', 'required');
            $this->form_validation->set_rules('tx_diretor', 'tx_diretor', 'required');
            $this->form_validation->set_rules('atores', 'atores', 'required');
            $this->form_validation->set_rules('imagem', 'imagem', 'required');
            $this->form_validation->set_rules('classificacao', 'clasificacao', 'required');

            if ($this->form_validation->run() === false) {

                $fm['administracao'] = $this->Administracao_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormAdministracao', $fm);
                $this->load->view('Footer');
            } else {
                $fm = array(
                    'tx_nome' => $this->input->post('tx_nome'),
                    'sp_sinopse' => $this->input->post('sp_sinopse'),
                    'tx_duracao' => $this->input->post('tx_duracao'),
                    'tx_companhia' => $this->input->post('tx_companhia'),
                    'tx_genero' => $this->input->post('tx_genero'),
                    'tx_status' => $this->input->post('tx_status'),
                    'tx_diretor' => $this->input->post('tx_diretor'),
                    'atores' => $this->input->post('atores'),
                    'imagem' => $this->input->post('imagem'),
                    'imagem' => $this->input->post('classificacao'),
                );

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_whidth'] = 1024;
                $config['max_height'] = 768;
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('imagem')) {
                    $error = $this->upload->display_errors();
//cria uma sessão com o error e redireciona
                    $this->session->set_flashdata('mensagem', $error);
                    redirect('Administracao/listar'); //se der certo manda para a lista
                    exit();
                } else {
//pega o nome do arquivo que foi enviado e adiciona no array $data para que a variavel
                    $fm['imagem'] = $this->upload->data('file_name');
                }

                if ($this->Administracao_model->update($id, $fm)) {
                    $this->session->set_flashdata('mensagem', 'Filme alterado com sucesso!!!');
                    redirect('Administracao/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Administracao/alterar/' . $id);
                }
            }
        } else {
            redirect('Administracao/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->Administracao_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Filme deletado com sucesso!');
                unlink('./uploads/' . $administracao->imagem);
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar o Filme!');
            }
        }
        redirect('Administracao/listar');
    }

}
