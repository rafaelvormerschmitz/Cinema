<?php

class Administracao_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('tb_filme');
        return $query->result();
    }

    public function insert($fm = array()) {
        $this->db->insert('tb_filme', $fm);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_filme');
        return $query->row(0);
    }

    public function update($id, $fm = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('tb_filme', $fm);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('tb_filme');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
