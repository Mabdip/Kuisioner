<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function tambah($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }

    public function ambil_data()
    {
    	return $this->db->get('user')->result();
    }

}

/* End of file User_m.php */
