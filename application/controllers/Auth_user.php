<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends CI_Controller {


    public function __construct() 
    {
        parent::__construct();
        $this->load->model('login_m');
        $this->load->model('user_m');
    }
    public function index()
    {
        $data['judul'] = "Login User";
        $data['isi']   = 'login/login_user';
        $this->load->view('login/template/layout', $data);
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where  = array('username' => $username ,
                        'password' => $password 
                       );
        $cek = $this->login_m->auth_user('user', $where)->num_rows();
        
                if ($cek > 0) 
                {
                    
                     $data_session = array('nama' => $username ,
                                           'status' => 'login' 
                                          );
                     $this->session->set_userdata( $data_session );
                       echo "<script>
                              alert('Selamat Datang'+' '+'".$this->session->userdata('nama')."');
                              window.location = '".site_url('user')."';
                            </script>";
                    
                }
                else 
                {
                    echo "<script>
                             alert('Username dan Password Salah!!!');
                             window.location = '".site_url('auth_user')."';
                           </script>";
                }
    }

    public function daftar_user()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $angkatan = $this->input->post('angkatan');
        $status = $this->input->post('status');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tahun_lulus = $this->input->post('tahun_lulus');

            $data = array('nama' => $nama ,
                          'email' => $email,
                          'angkatan' => $angkatan,
                          'status' => $status,
                          'username' => $username,
                          'password' => $password, 
                          'tahun_lulus' => $tahun_lulus);
        $this->user_m->tambah('user', $data);
        echo "<script>
                              alert('Selamat Data Berhasil disimpan. Silahkan Login terlebih dahulu!!');
                              window.location = '".site_url('auth_user')."';
                            </script>";
        
    }

    public function register()
    {
        
        $this->load->view('register/register_user');
    }

}

/* End of file Auth_user.php */
