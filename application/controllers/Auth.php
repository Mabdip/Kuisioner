<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_m');
       
    }
    

    public function index()
    {
        $data['judul'] = "Login";
        $data['isi']   = 'login/login';
        $this->load->view('login/template_admin/layout', $data);
    }

    public function admin_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where  = array('username' => $username ,
                        'password' => md5($password) 
                       );
        $cek = $this->login_m->auth_login('admin', $where)->num_rows();
        
                if ($cek > 0) 
                {
                    
                     $data_session = array('nama' => $username ,
                                           'status' => 'login' 
                                          );
                     $this->session->set_userdata( $data_session );
                       echo "<script>
                              alert('Selamat Datang'+' '+'".$this->session->userdata('nama')."');
                              window.location = '".site_url('admin')."';
                            </script>";
                    
                }
                else 
                {
                    echo "<script>
                             alert('Username dan Password Salah!!!');
                             window.location = '".site_url('auth')."';
                           </script>";
                }
    }

   

}

/* End of file Auth.php */
