<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penyidik extends AUTH_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_pegawai');
        $this->load->model('M_posisi');
        $this->load->model('M_user');
    }

    public function index() {
        $data['userdata'] = $this->userdata;
        $data['dataPegawai'] = $this->M_pegawai->select_all();
        $data['dataPosisi'] = $this->M_posisi->select_all();
        $data['page'] = "penyidik";
        $data['judul'] = "Data Penyidik";
        $data['deskripsi'] = "Manage Data Penyidik";
        // print_r($data);exit;
        $data['modal_tambah_penyidik'] = show_my_modal('modals/modal_tambah_penyidik', 'tambah-penyidik', $data);
        $this->template->views('pegawai/home', $data);
    }

    public function tampil() {
        $data['userdata'] = $this->userdata;
        $data['dataPegawai'] = $this->M_pegawai->select_all();
        $this->load->view('pegawai/list_data', $data);
    }

    public function prosesTambah() {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
//        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('unit', 'Posisi', 'trim|required');
        $this->form_validation->set_rules('number_handphone', 'Number Handphone', 'trim|required');
        $this->form_validation->set_rules('sebagai', 'Hak Akses', 'trim|required');
        $data = $this->input->post();
//        print_r($data);exit;
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_pegawai->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Pegawai Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Pegawai Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function update() {
        $no = trim($_POST['id']);
        $data['dataPegawai'] = $this->M_pegawai->select_by_id($no);
        $data['dataPosisi'] = $this->M_posisi->select_all();
        $data['userdata'] = $this->userdata;
        echo show_my_modal('modals/modal_update_pegawai', 'update-pegawai', $data);
    }

    public function prosesUpdate() {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('number_handphone', 'Nomor Handphone', 'trim|required');
        $this->form_validation->set_rules('unit', 'Unit', 'trim|required');
        $this->form_validation->set_rules('sebagai', 'Hak Akses', 'trim|required');
        $data = $this->input->post();
//         print_r($data);exit;
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_pegawai->update($data);
            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Penyidik Berhasil diupdate', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Penyidik Gagal diupdate', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        echo json_encode($out);
    }

    public function delete() {
        $no = $_POST['id'];
        $result = $this->M_pegawai->delete($no);
        if ($result > 0) {
            echo show_succ_msg('Data Penyidik Berhasil dihapus', '20px');
        } else {
            echo show_err_msg('Data Penyidik Gagal dihapus', '20px');
        }
    }

    public function export() {
        error_reporting(E_ALL);
        include_once './assets/phpexcel/Classes/PHPExcel.php';
        $objPHPExcel = new PHPExcel();
        $data = $this->M_pegawai->select_all_pegawai();
//        print_r($data);exit;
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $rowCount = 1;
        $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, "No");
        $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, "Nama");
        $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, "Nomor Telepon");
        $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, "Email");
        $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, "Unit");
        $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, "Hak Akses");
        $rowCount++;
        foreach ($data as $value) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $value->no);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->nama);
            $objPHPExcel->getActiveSheet()->setCellValueExplicit('C' . $rowCount, $value->number_handphone, PHPExcel_Cell_DataType::TYPE_STRING);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $value->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $value->unit);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $value->sebagai);
//            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $value->status);
            $rowCount++;
        }

        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('./assets/excel/Data Penyidik.xlsx');

        $this->load->helper('download');
        force_download('./assets/excel/Data Penyidik.xlsx', NULL);
    }

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */