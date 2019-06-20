<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') 
        {
            redirect(site_url('auth'));
            
        }
    }
    
    public function index()
    {
        $data['judul'] = "Admin | Kuisioner";
        $data['isi']   = 'admin/dashboard';
        $this->load->view('admin/template/layout', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }

}

/* End of file Admin.php */
