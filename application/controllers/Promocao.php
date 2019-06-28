<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Promocao extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Promocao_model');
        $this->load->helper('url');
    }

    public function listar() {

        $pr['promocao'] = $this->Promocao_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaPromocao', $pr);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        if ($this->form_validation->run() === FALSE) {
            $dados['promocao'] = $this->Promocao_model->getAll();
            $this->load->view('Header');
            $this->load->view('FormPromocao', $dados);
            $this->load->view('Footer');
        } else {
            $pr = array(
                'descricao' => $this->input->post('descricao'),
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
                redirect('promocao/listar'); //se der certo manda para a lista
                exit();
            } else {
                //pega o nome do arquivo que foi enviado e adiciona no array $data para que a variavel
                $fm['imagem'] = $this->upload->data('file_name');
            }
            if ($this->Promocao_model->insert($fm)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', 'Cadastrado com sucesso');
                redirect('promocao/listar'); //se der certo manda para a lista
            } else {
                unlink('./uploads/' . $data['imagem']);
                $this->session->set_flashdata('mensagem', 'Não deu');
                redirect('promocao/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('descricao', 'descricao', 'required');

            if ($this->form_validation->run() === false) {
                $pr['promocao'] = $this->Promocao_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormPromocao', $pr);
                $this->load->view('Footer');
            } else {
                $pr = array(
                    'descricao' => $this->input->post('descricao'),
                );
                if ($this->Promocao_model->update($id, $pr)) {
                    $this->session->set_flashdata('mensagem', 'Promoção alterada com sucesso!!!');
                    redirect('promocao/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('promocao/alterar/' . $id);
                }
            }
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
                redirect('Promocao/listar'); //se der certo manda para a lista
                exit();
            } else {
                //pega o nome do arquivo que foi enviado e adiciona no array $data para que a variavel
                $fm['imagem'] = $this->upload->data('file_name');
            }
            if ($this->Promocao_model->update($id, $fm)) {
                $this->session->set_flashdata('mensagem', 'Filme alterado com sucesso!!!');
                redirect('Promocao/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                redirect('Promocao/alterar/' . $id);
            }
        } else {
            redirect('promocao/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->Promocao_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Promoção deletada com sucesso!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar a Promoção!');
            }
        }
        redirect('promocao/listar');
    }

}
