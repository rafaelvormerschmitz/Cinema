<?php

class Funcionario_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('tb_funcionario');
        return $query->result();
    }

    public function insert($fn = array()) {
        $this->db->insert('tb_funcionario', $fn);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_funcionario', $id);
        $query = $this->db->get('tb_funcionario');
        return $query->row(0);
    }

    public function update($id, $fn = array()) {
        if ($id > 0) {
            $this->db->where('id_funcionario', $id);
            $this->db->update('tb_funcionario', $fn);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_funcionario', $id);
            $this->db->delete('tb_funcionario');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
