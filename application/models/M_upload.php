<?php

class M_upload extends CI_Model {

    function simpan_upload($judul, $image, $input) {
        $data = array(
            'judul' => $judul,
            'gambar' => $image,
            'catatan' => $input['catatan'],
            'id_disposisi' => $input['id_disposisi']
        );
        $result = $this->db->insert('tbl_galeri', $data);
        return $result;
    }

}