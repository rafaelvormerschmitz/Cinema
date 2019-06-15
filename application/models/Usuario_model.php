<?php

class Usuario_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('tb_usuario');
        return $query->result();
    }

    public function insert($us = array()) {
        $this->db->insert('tb_usuario', $us);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_usuario', $id);
        $query = $this->db->get('tb_usuario');
        return $query->row(0);
    }

    public function update($id, $us = array()) {
        if ($id > 0) {
            $this->db->where('id_usuario', $id);
            $this->db->update('tb_usuario', $us);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_usuario', $id);
            $this->db->delete('tb_usuario');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
