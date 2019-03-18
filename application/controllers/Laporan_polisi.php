<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_polisi extends AUTH_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_laporan');
        $this->load->model('M_posisi');
        $this->load->model('M_user');
    }

    //LAPORAN POLISI
    public function index() {
        $data['userdata'] = $this->userdata;
        $data['dataLaporan'] = $this->M_laporan->select_all();
        $data['page'] = "laporan";
        $data['judul'] = "Data Laporan Polisi";
        $data['deskripsi'] = "Manage Data Laporan Polisi";
        $data['modal_tambah_laporan'] = show_my_modal('modals/modal_tambah_laporan', 'tambah-laporan', $data);
        $this->template->views('laporan/home', $data);
    }



    function index_get() { 
        $laporan = $this->db->get('tb_lp')->result();
        $this->response(array("result"=>$laporan, 200));
    }

    public function tampil() {
        $data['userdata'] = $this->userdata;
        $data['dataLaporan'] = $this->M_laporan->select_all();
        $this->load->view('laporan/list_data', $data);
    }

    public function update() {
        $no = trim($_POST['id']);
        $data['dataLaporan'] = $this->M_laporan->select_by_id($no);
        $data['userdata'] = $this->userdata;
        echo show_my_modal('modals/modal_update_laporan', 'update-laporan', $data);
    }

    public function prosesUpdate() {
        $this->form_validation->set_rules('nomor_polisi', 'Nomor Polisi', 'trim|required');
        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_laporan->update($data);
            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Laporan Berhasil diupdate', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Laporan Gagal diupdate', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        echo json_encode($out);
    }

    public function prosesTambah() {
        $this->form_validation->set_rules('nomor_polisi', 'Nomor Polisi', 'trim|required');
        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_laporan->insert($data);
            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Laporan Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Laporan Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        echo json_encode($out);
    }

    public function delete() {
        $no = $_POST['id'];
        $result = $this->M_laporan->delete($no);
        if ($result > 0) {
            echo show_succ_msg('Data Laporan Polisi Berhasil dihapus', '20px');
        } else {
            echo show_err_msg('Data Laporan Polisi Gagal dihapus', '20px');
        }
    }

    public function detail() {
        $no = trim($_POST['id']);
        $data['dataLaporan'] = $this->M_laporan->select_by_id($no);
        $data['userdata'] = $this->userdata;
        echo show_my_modal('modals/modal_detail_laporan', 'detail-laporan', $data);
    }

//
//    public function export() {
//        error_reporting(E_ALL);
//        include_once './assets/phpexcel/Classes/PHPExcel.php';
//        $objPHPExcel = new PHPExcel();
//        $data = $this->M_pegawai->select_all_pegawai();
////        print_r($data);exit;
//        $objPHPExcel = new PHPExcel();
//        $objPHPExcel->setActiveSheetIndex(0);
//        $rowCount = 1;
//        $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, "No");
//        $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, "Nama");
//        $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, "Nomor Telepon");
//        $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, "Email");
//        $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, "Unit");
//        $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, "Hak Akses");
//        $rowCount++;
//        foreach ($data as $value) {
//            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $value->no);
//            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->nama);
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('C' . $rowCount, $value->number_handphone, PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $value->email);
//            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $value->unit);
//            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $value->sebagai);
////            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $value->status);
//            $rowCount++;
//        }
//
//        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
//        $objWriter->save('./assets/excel/Data Penyidik.xlsx');
//
//        $this->load->helper('download');
//        force_download('./assets/excel/Data Penyidik.xlsx', NULL);
//    }


}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */