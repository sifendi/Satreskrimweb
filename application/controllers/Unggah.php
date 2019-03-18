<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unggah extends AUTH_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_laporan');
    }

    //LAPORAN POLISI
    public function index() {
        $data['userdata'] = $this->userdata;
        $data['page'] = "document";
        $data['judul'] = "Data Penugasan";
        $data['deskripsi'] = "Unggah Document";
        $data['modal_unggah_document'] = show_my_modal('modals/modal_unggah_document', 'tambah-document', $data);
        $this->template->views('unggah/home', $data);
    }

    public function tampil() {
        $data['userdata'] = $this->userdata;
        $data['dataUnggah'] = $this->M_laporan->select_transaksi();
        $this->load->view('unggah/list_data', $data);
    }

////////
    public function update() {
        $no = trim($_POST['id']);
        $data['dataUnggah'] = $this->M_laporan->select_by_id_for_unggah($no);
        $data['userdata'] = $this->userdata;
        echo show_my_modal('modals/modal_unggah_document', 'update-unggah', $data);
    }

    public function prosesUpdate() {
        print_r('dipanggil');
        $this->form_validation->set_rules('nama_document', 'Nama Document', 'trim|required');
        $this->form_validation->set_rules('file_upload', 'File', 'trim|required');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');
        
        $config['upload_path'] = "./assets";
        $config['allowed_types'] = 'pdf|gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload("file_upload")) {
            print_r('masuk if');
            exit;
            $data = array('upload_data' => $this->upload->data());
            $nama_document = $this->input->post('nama_document');
            $catatan = $this->input->post('catatan');
            $id_lp = $this->input->post('id_lp');
            $id_disposisi = $this->input->post('id_disposisi');
            print_r($nama_document);
            print_r($catatan);
            print_r($id_disposisi);
            print_r($data);exit;

            $image = $data['upload_data']['file_name'];
            $result = $this->M_laporan->simpan_upload($judul, $image);
            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Unggah File Berhasil ', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Unggah File Gagal, Mohon dicek kembali ', '20px');
            }
            echo json_encode($out);
        }else{
            print_r('keluar dari if');
        }
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