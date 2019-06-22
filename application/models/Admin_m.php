<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

    public function ambil_data()
    {
       return $this->db->get('user');
    }

}

/* End of file Admin_m.php */
