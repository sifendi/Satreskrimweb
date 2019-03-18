<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    public function login($user, $pass) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));

        $data = $this->db->get();
        if ($data->num_rows() == 1) {
            return $data->row();
        } else {
            return false;
        }
    }

    public function login2($user, $pass) {
        $query = $this->db->query("SELECT * FROM admin
            WHERE username  = '$user'
            and   password  = '$pass'");
        if ($query->num_rows() == 1) {
            foreach ($query->result_array() as $row) {
                $session_data = array(
                    'user_on' => true,
                    'username' => $user,
                    'id_level' => $row['id_level'],
                    'nama' => $row['nama'],
                    'foto' => $row['foto'],
                    'status' => "Loged in"
                );
                $this->session->set_userdata($session_data);
                return $query;
            }
        } else {
            return false;
        }
    }

}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */