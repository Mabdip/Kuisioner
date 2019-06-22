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
        $this->load->model('admin_m');
    }
    
    public function index()
    {
        $data['judul'] = "Admin | Kuisioner";
        $data['isi']   = 'admin/dashboard';
        $data['user'] = $this->admin_m->ambil_data()->result();
        $this->load->view('admin/template/layout', $data);
    }

    public function view_pertanyaan()
    {
        # code...
        $data['judul'] = "Tambah Pertanyaan | Kuisioner";
        $data['isi']   = 'admin/tambah_pertanyaan';
        $this->load->view('admin/template/layout', $data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }

}

/* End of file Admin.php */
