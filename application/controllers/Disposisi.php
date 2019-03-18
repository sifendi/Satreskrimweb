<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Disposisi extends AUTH_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_laporan');
        $this->load->model('M_pegawai');
    }

    //DISPOSISI
    public function index() {
        $data['userdata'] = $this->userdata;
        $data['dataDisposisi'] = $this->M_laporan->select_all();
//        print_r($data['dataDisposisi']);exit;
        $data['page'] = "disposisi";
        $data['judul'] = "Data Laporan Polisi";
        $data['deskripsi'] = "Manage Penugasan";
        $this->template->views('disposisi/home', $data);
    }

    public function tampil() {
        $data['userdata'] = $this->userdata;
        $data['dataDisposisi'] = $this->M_laporan->select_all_for_disposisi();
        $this->load->view('disposisi/list_data', $data);
    }

    public function update() {
        $no = trim($_POST['id']);
        $data['dataLaporan'] = $this->M_laporan->select_by_id($no);
        $data['dataPegawai'] = $this->M_pegawai->select_all_pegawai_id();       
        
        $data['userdata'] = $this->userdata;
        echo show_my_modal('modals/modal_update_disposisi', 'update-disposisi', $data);
    }

    public function prosesUpdate() {
        $this->form_validation->set_rules('atensi', 'Atensi', 'trim|required');
        $this->form_validation->set_rules('lidik', 'Lidik', 'trim|required');
        $this->form_validation->set_rules('gelarkan', 'Gelarkan', 'trim|required');
        $this->form_validation->set_rules('tingkatkan', 'Tingkatkan Sidik', 'trim|required');
        $this->form_validation->set_rules('kirim', 'Kirim SP2HP', 'trim|required');
        $this->form_validation->set_rules('lanjut', 'Tindak Lanjut', 'trim|required');
        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_laporan->update_transaksi($data);
            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Penugasan Berhasil ', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Penugasan Gagal, Mohon dicek kembali ', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        echo json_encode($out);
    }

    public function detail() {
        $no = trim($_POST['id']);
        $data['dataLaporan'] = $this->M_laporan->select_by_id($no);
        $data['userdata'] = $this->userdata;
        echo show_my_modal('modals/modal_detail_laporan', 'detail-laporan', $data);
    }


}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */