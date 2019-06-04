<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administracao extends CI_Controller {

    public function index() {
        $this->load->view('Administracao_model');
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Administracao_model');
    }

    public function listar() {
        $fl['filme'] = $this->Administracao_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaAdministracao', $fl);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('tx_nome', 'tx_nome', 'required');
        $this->form_validation->set_rules('sp_sinopse', 'sp_sinopse', 'required');
        $this->form_validation->set_rules('tx_duracao', 'tx_duracao', 'required');
        $this->form_validation->set_rules('tx_companhia', 'tx_companhia', 'required');
        $this->form_validation->set_rules('tx_genero', 'tx_genero', 'required');
        $this->form_validation->set_rules('tx_status', 'tx_status', 'required');
        $this->form_validation->set_rules('tx_diretor', 'tx_diretor', 'required');
        $this->form_validation->set_rules('atores', 'atores', 'required');
        $this->form_validation->set_rules('imagem', 'imagem', 'required');

        if ($this->form_validation->run() === FALSE) {
            $dd['filme'] = $this->Administracao_model->getAll();
            $this->load->view('Header');
            $this->load->view('FormAdministracao', $dd);
            $this->load->view('Footer');
        } else {

            $fl = array(
                'tx_nome' => $this->input->post('tx_nome'),
                'sp_sinopse' => $this->input->post('sp_sinopse'),
                'tx_duracao' => $this->input->post('tx_duracao'),
                'tx_companhia' => $this->input->post('tx_companhia'),
                'tx_genero' => $this->input->post('tx_genero'),
                'tx_status' => $this->input->post('tx_status'),
                'tx_diretor' => $this->input->post('tx_diretor'),
                'tx_diretor' => $this->input->post('atores'),
                'imagem' => $this->input->post('imagem'),
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
                $fl['imagem'] = $this->upload->data('file_name');
            }

            if ($this->Administracao_model->insert($fm)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', 'Cadastrada com sucesso');
                redirect('Administracao/listar'); //se der certo manda para a lista
            } else {
                unlink('./uploads/' . $data['imagem']);
                $this->session->set_flashdata('mensagem', 'Não deu');
                redirect('Administracao/cadastrar');
            }
            if ($this->Administracao_model->insert($fm)) {
                $this->session->set_flashdata('mensagem', 'Filme cadastrado com sucesso!!');
                redirect('Administracao/listar');
            } else {
                redirect('Administracao/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar o Filme!!');
            }
        }
    }

    public function alterar($fm) {
        if ($fm > 0) {

            $this->form_validation->set_rules('tx_nome', 'tx_nome', 'required');
            $this->form_validation->set_rules('sp_sinopse', 'sp_sinopse', 'required');
            $this->form_validation->set_rules('tx_duracao', 'tx_duracao', 'required');
            $this->form_validation->set_rules('tx_companhia', 'tx_companhia', 'required');
            $this->form_validation->set_rules('tx_genero', 'tx_genero', 'required');
            $this->form_validation->set_rules('tx_status', 'tx_status', 'required');
            $this->form_validation->set_rules('tx_diretor', 'tx_diretor', 'required');
            $this->form_validation->set_rules('atores', 'atores', 'required');
            $this->form_validation->set_rules('imagem', 'imagem', 'required');

            if ($this->form_validation->run() === false) {

                $fl['administracao'] = $this->Administracao_model->getOne($fm);
                $this->load->view('Header');
                $this->load->view('FormAdministracao', $fl);
                $this->load->view('Footer');
            } else {
                $fl = array(
                    'tx_nome' => $this->input->post('tx_nome'),
                    'sp_sinopse' => $this->input->post('sp_sinopse'),
                    'tx_duracao' => $this->input->post('tx_duracao'),
                    'tx_companhia' => $this->input->post('tx_companhia'),
                    'tx_genero' => $this->input->post('tx_genero'),
                    'tx_status' => $this->input->post('tx_status'),
                    'tx_diretor' => $this->input->post('tx_diretor'),
                    'atores' => $this->input->post('atores'),
                    'imagem' => $this->input->post('imagem'),
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
                    $fl['imagem'] = $this->upload->data('file_name');
                }

                if ($this->Administracao_model->update($fm, $fl)) {
                    $this->session->set_flashdata('mensagem', 'Filme alterada com sucesso!!!');
                    redirect('Administracao/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Administracao/alterar/' . $fl);
                }
            }
        } else {
            redirect('Administracao/listar');
        }
    }

    public function deletar($fm) {
        $administracao = $this->Administracao_model->getOne($fl);
        if ($fm > 0) {
            if ($this->Administracao_model->delete($fm)) {
                $this->session->set_flashdata('mensagem', 'Filme deletada com sucesso!');
                unlink('./uploads/' . $administracao->imagem);
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar o Filme!');
            }
        }
        redirect('Administracao/listar');
    }

}
