<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function select_all() {
        $this->db->select('*');
        $this->db->from('admin');
        $data = $this->db->get();
        return $data->result();
    }

    public function select_by_id($id) {
        $sql = "SELECT * FROM admin WHERE id = '{$id}'";
        $data = $this->db->query($sql);

        return $data->row();
    }

    public function insert($data) {
        $password = md5('sp2hp');
        $sql = "INSERT admin VALUES('','" . $data['username'] . "','$password','" . $data['nama'] . "','','','" . $data['id_level'] . "')";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }


    
    
//    public function insert_batch($data) {
//        $this->db->insert_batch('tb_user', $data);
//        return $this->db->affected_rows();
//    }

    public function update($data) {
        $sql = "UPDATE admin SET nama='" . $data['nama'] . "',username='" . $data['username'] . "',id_level='" . $data['id_level'] . "' WHERE id='" . $data['id'] . "'";
//        print_r($sql);exit;
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

//    public function delete($id) {
//        $sql = "DELETE FROM kota WHERE id='" . $id . "'";
//        $this->db->query($sql);
//
//        return $this->db->affected_rows();
//    }

//    public function check_nama($nama) {
//        $this->db->where('nama', $nama);
//        $data = $this->db->get('tb_user');
//
//        return $data->num_rows();
//    }

//    public function total_rows() {
//        $data = $this->db->get('tb_user');
//        return $data->num_rows();
//    }

}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */