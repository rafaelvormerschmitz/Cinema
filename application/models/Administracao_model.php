<?php

class Administracao_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('administracao');
        return $query->result();
    }

    public function insert($fl = array()) {
        $this->db->insert('administracao', $fl);
        return $this->db->affected_rows();
    }

    public function getOne($fm) {
        $this->db->where('fm', $fm);
        $query = $this->db->get('administracao');
        return $query->row(0);
    }

    public function update($fl, $fm = array()) {
        if ($fl > 0) {
            $this->db->where('fl', $fl);
            $this->db->update('administracao', $fl);
            return $this->db->affected_rows();
        }
    }

    public function delete($fm) {
        if ($fm > 0) {
            $this->db->where('fm', $fm);
            $this->db->delete('administracao');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
