<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_pegawai');///////Pegawai == Anggota
        $this->load->model('M_posisi');/////Posisi == Unit
        $this->load->model('M_user');
        $this->load->model('M_laporan');
        $this->load->library('session');
    }

    public function index() {
        $data['jml_penyidik'] = $this->M_pegawai->total_rows();
        $data['jml_posisi'] = $this->M_posisi->total_rows();
        $data['jml_laporan'] = $this->M_laporan->total_rows();
        $data['userdata'] = $this->userdata;
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        
        $unit = $this->M_posisi->select_all();
        $index = 0;
        foreach ($unit as $value) {
            $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
            $pegawai_by_unit = $this->M_pegawai->select_anggota_by_posisi($value->id);
            $data_posisi[$index]['value'] = $pegawai_by_unit->jml;
            $data_posisi[$index]['color'] = $color;
            $data_posisi[$index]['highlight'] = $color;
            $data_posisi[$index]['label'] = $value->nama;
            $index++;
        }
        
        $level = $this->M_posisi->select_all();
        $index = 0;
        foreach ($level as $value) {
            $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
            $pegawai_by_level = $this->M_pegawai->select_anggota_by_unit($value->id);
            $data_kota[$index]['value'] = $pegawai_by_level->jml;
            $data_kota[$index]['color'] = $color;
            $data_kota[$index]['highlight'] = $color;
            $data_kota[$index]['label'] = $value->nama;
            $index++;
        }
        $data['data_posisi'] = json_encode($data_posisi);
        $data['data_kota'] = json_encode($data_kota);
        $data['page'] = "home";
        $data['judul'] = "Beranda";
        $data['deskripsi'] = "Dashboard";
        $this->template->views('home', $data);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */