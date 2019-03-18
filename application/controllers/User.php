<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends AUTH_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_user');
    }

    public function index() {
        $data['userdata'] = $this->userdata;
        $data['dataKota'] = $this->M_user->select_all();
//        print_r($data);exit;
        $data['page'] = "user";
        $data['judul'] = "Data User";
        $data['deskripsi'] = "Manage Data User";
        $data['modal_tambah_user'] = show_my_modal('modals/modal_tambah_user', 'tambah-user', $data);
        $this->template->views('user/home', $data);
    }

    public function tampil() {
        $data['userdata'] = $this->userdata;
        $data['dataKota'] = $this->M_user->select_all();
        $this->load->view('user/list_data', $data);
    }

    public function prosesTambah() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
        $this->form_validation->set_rules('id_level', 'Hak Akses', 'trim|required');
        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_user->insert($data);
            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data User Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data User Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        echo json_encode($out);
    }

    public function update() {
        $data['userdata'] = $this->userdata;
        $id = trim($_POST['id']);
        $data['dataKota'] = $this->M_user->select_by_id($id);
        echo show_my_modal('modals/modal_update_user', 'update-user', $data);
    }

    public function prosesUpdate() {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
//            print_r($data);exit;
            $result = $this->M_user->update($data);
            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data User Berhasil diupdate', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data User Gagal diupdate', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        echo json_encode($out);
    }

    public function delete() {
        $id = $_POST['id'];
        $result = $this->M_user->delete($id);
        if ($result > 0) {
            echo show_succ_msg('Data User Berhasil dihapus', '20px');
        } else {
            echo show_err_msg('Data User Gagal dihapus', '20px');
        }
    }

    public function export() {
        error_reporting(E_ALL);

        include_once './assets/phpexcel/Classes/PHPExcel.php';
        $objPHPExcel = new PHPExcel();

        $data = $this->M_user->select_all();

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->SetCellValue('A1', "ID");
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', "Nama Kota");

        $rowCount = 2;
        foreach ($data as $value) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $value->id);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->nama);
            $rowCount++;
        }

        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('./assets/excel/Data Kota.xlsx');

        $this->load->helper('download');
        force_download('./assets/excel/Data Kota.xlsx', NULL);
    }

}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */