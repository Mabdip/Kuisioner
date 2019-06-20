<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login' ) 
        {
            redirect(site_url('auth_user'));
        }
    }
    

    public function index()
    {
        $data['judul'] = "Kuisioner|User";
        $data['isi']   = 'user/dashboard';
        $this->load->view('user/template/layout', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('auth_user'));   
    }

}

/* End of file User.php */
