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
        $this->load->model('user_m');
    }
    
    public function index()
    {
        $data['judul'] = "Admin | Kuisioner";
        $data['isi']   = 'admin/dashboard';
        $this->load->view('admin/template/layout', $data);
    }

    public function tambah_pertanyaan()
    {
        $data['judul'] = "Admin | Tambah Pertanyaan";
        $data['isi']   = 'admin/tambah_pertanyaan';
        $this->load->view('admin/template/layout', $data); 
    }

    public function alumni()
    {
        $data['alumni'] = $this->user_m->ambil_data();
        $data['judul'] = "Admin | Kuisioner";
        $data['isi']   = 'admin/alumni_view';
        $this->load->view('admin/template/layout', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }

}

/* End of file Admin.php */
