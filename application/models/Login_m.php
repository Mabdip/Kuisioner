<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model 
{
    public function auth_login($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }

    public function auth_user($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }
    

}

/* End of file Login_m.php */
