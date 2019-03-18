<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_upload');
        $this->load->model('M_laporan');
    }

    function index() {
        $this->load->view('v_upload');
    }

    function do_upload() {
        $input['catatan'] = $this->input->post('catatan');
        $input['id_disposisi'] = $this->input->post('id_disposisi');
        $config['upload_path'] = "./assets/images";
        $config['allowed_types'] = 'gif|jpg|png|txt|pdf';
        $config['encrypt_name'] = TRUE;
        $this->form_validation->set_rules('nama_document', 'Nama Document', 'trim|required');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file")) {
            $data = array('upload_data' => $this->upload->data());

            $judul = $this->input->post('judul');
            $image = $data['upload_data']['file_name'];

            $result = $this->m_upload->simpan_upload($judul, $image, $input);
            echo json_decode($result);
        }
    }

    function modal() {
        if (isset($_POST["employee_id"])) {
            $output = ''; 
            $result = $this->M_laporan->select_galery($_POST["employee_id"]);
            $output .= '  
      <div class="table-responsive">  
<div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Show</th>
                </tr>
            </thead>';

            foreach ($result as $row) {
                $output .= '  
                <tr>  
                     <td width="70%">' . $row->judul . '</td>  
                     <td width="70%">' . $row->gambar . '</td>
                     <td width="70%"><a href="http://localhost/sp2hp_new/assets/images/' . $row->gambar . '" class="btn btn-warning btn-xs" target="_blank">Show</a></td>
                </tr>  
                
                ';
            }
            $output .= "</table></div></div>";
            echo $output;
        }
    }

}