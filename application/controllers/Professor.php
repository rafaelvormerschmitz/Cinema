<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

    public function index() {
        $this->load->view('Professor_model');
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Professor_model');
    }

    public function listar() {
        $fl['filme'] = $this->Professor_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaProfessor', $fl);
        $this->load->view('Footer');
    }

}
