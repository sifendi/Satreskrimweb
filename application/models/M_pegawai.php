<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

    public function select_all_pegawai() {
        $sql = "SELECT * FROM m_anggota";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function select_all_pegawai_id() {
        $sql = "SELECT no, nama FROM m_anggota where sebagai = 1";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function select_all() {
        $sql = " SELECT * from m_anggota where delete_is = 0";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function select_by_id($id) {
        $sql = "SELECT * from m_anggota where no = '{$id}'";
        $data = $this->db->query($sql);
        return $data->row();
    }
    public function update($data) {
        $sql = "UPDATE m_anggota SET nama='" . $data['nama'] . "', number_handphone='" . $data['number_handphone'] . "',  sebagai='" . $data['sebagai'] . "', 
            unit=" . $data['unit'] . " WHERE no='" . $data['no'] . "'";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function delete($id) {
//        $sql = "DELETE FROM m_anggota WHERE no='" . $id . "'";
        $sql = "UPDATE m_anggota SET delete_is =1 where no='" . $id . "'";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function insert($data) {
//        $id = md5(DATE('ymdhms') . rand());
        $sql = "INSERT INTO m_anggota VALUES('','" . $data['nama'] . "','" . $data['number_handphone'] . "','',0," . $data['unit'] . "," . $data['sebagai'] . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

//////////////===================================================//////////////////
//////////////===================================================//////////////////
//////////////===============Dashboard Grafik=======================//////////////////
//////////////===================================================//////////////////
//////////////===================================================//////////////////     
    public function select_anggota_by_posisi($id) {
        $sql = "SELECT COUNT(*) AS jml FROM m_anggota WHERE sebagai = {$id}";
        $data = $this->db->query($sql);
        return $data->row();
    }

    public function select_anggota_by_unit($id) {
        $sql = "SELECT COUNT(*) AS jml FROM m_anggota WHERE unit = {$id}";
        $data = $this->db->query($sql);
        return $data->row();
    }

    public function insert_batch($data) {
        $this->db->insert_batch('m_anggota', $data);
        return $this->db->affected_rows();
    }

    public function check_nama($nama) {
        $this->db->where('nama', $nama);
        $data = $this->db->get('m_anggota');
        return $data->num_rows();
    }

    // count value on graphic in dahsboard
    public function total_rows() {
        $this->db->where('delete_is', 0);
        $data = $this->db->get('m_anggota');
        return $data->num_rows();
    }

}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */