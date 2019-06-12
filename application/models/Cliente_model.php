<?php

class Cliente_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('tb_cliente');
        return $query->result();
    }

    public function insert($cn = array()) {
        $this->db->insert('tb_cliente', $cn);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_cliente', $id);
        $query = $this->db->get('tb_cliente');
        return $query->row(0);
    }

    public function update($id, $cn = array()) {
        if ($id > 0) {
            $this->db->where('id_cliente', $id);
            $this->db->update('tb_cliente', $cn);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_cliente', $id);
            $this->db->delete('tb_cliente');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
