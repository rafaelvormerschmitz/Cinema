<?php

class Promocao_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('tb_promocao');
        return $query->result();
    }

    public function insert($pr = array()) {
        $this->db->insert('tb_promocao', $pr);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_promocao', $id);
        $query = $this->db->get('tb_promocao');
        return $query->row(0);
    }

    public function update($id, $pr = array()) {
        if ($id > 0) {
            $this->db->where('id_promocao', $id);
            $this->db->update('tb_promocao', $pr);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_promocao', $id);
            $this->db->delete('tb_promocao');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
