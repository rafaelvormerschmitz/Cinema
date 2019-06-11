<?php

class Ingresso_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('tb_ingresso');
        return $query->result();
    }

    public function insert($is = array()) {
        $this->db->insert('tb_ingresso', $is);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_ingresso', $id);
        $query = $this->db->get('tb_ingresso');
        return $query->row(0);
    }

    public function update($id, $is = array()) {
        if ($id > 0) {
            $this->db->where('id_ingresso', $id);
            $this->db->update('tb_ingresso', $is);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_ingresso', $id);
            $this->db->delete('tb_ingresso');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
