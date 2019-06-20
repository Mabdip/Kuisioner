<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function tambah($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

}

/* End of file User_m.php */
