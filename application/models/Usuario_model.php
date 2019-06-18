<?php

class Usuario_model extends CI_Model {

    public function getUsuario($email, $senha) {
        $this->db->where('email', $email);
        $this->db->where('senha', sha1(
                        $senha . 'rafaelSENAC'));

        $query = $this->db->get('tb_usuario');
        return $query->row(0);
    }

    public function verificaLogin() {
        $logado = $this->session->userdata('logado');
        $idUsuario = $this->session->userdata('idUsuario');
        if ((!isset($logado)) || ($logado != TRUE) || ($idUsuario <= 0)) {
            redirect($this->config->base_url() . 'Usuario/login');
        }
    }

    public function insert($cd = array()) {
        $cd['senha'] = sha1($cd['senha'] . 'rafaelSENAC');
        $this->db->insert('tb_usuario', $cd);
        return $this->db->affected_rows();
    }

}
