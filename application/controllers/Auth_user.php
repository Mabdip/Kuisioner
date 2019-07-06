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
        $status = $this->input->post('sudah_bekerja');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $prestasi_nama = $this->input->post('nama_kegiatan');
        $prestasi_tahun = $this->input->post('tahun_kegiatan');
        $prestasi_tingkat = $this->input->post('tingkat_kegiatan');
        
        $fotoname = md5($_FILES['foto']['name']);
            $data = array('nama' => $nama ,
                          'email' => $email,
                          'status' => 'BB',
                          'foto' => $fotoname,
                          'username' => $username,
                          'password' => $password, 
                          'tahun_lulus' => $tahun_lulus);

            if($status=='ya') {
              $data['status'] = 'SB';
              $data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
              $data['alamat_perusahaan'] = $this->input->post('alamat_perusahaan');
            }

            $this->do_upload($fotoname);
            $id_user = $this->user_m->tambah('user', $data);

            if(isset($prestasi_nama) && isset($prestasi_tingkat) && isset($prestasi_tahun)) {
              if(!empty($prestasi_nama) && !empty($prestasi_tingkat) && !empty($prestasi_tahun)) {
                for($i=0; $i<count($prestasi_nama); $i++) {
                  $this->user_m->tambah('prestasi', array(
                    'nama_kegiatan' => $prestasi_nama[$i],
                    'tahun_kegiatan' => $prestasi_tahun[$i],
                    'tingkat_kegiatan' => $prestasi_tingkat[$i],
                    'id_user' => $id_user
                  ));
                }
              }
            }


        
        echo "<script>
                              alert('Selamat Data Berhasil disimpan. Silahkan Login terlebih dahulu!!');
                              window.location = '".site_url('auth_user')."';
                            </script>";
        
    }

    public function register()
    {
        
        $this->load->view('register/register_user');
    }

    public function do_upload($fotoname)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $fotoname;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
                echo $this->upload->display_errors();
                exit();
        }
        else
        {
                // $data = array('upload_data' => $this->upload->data());

                // $this->load->view('upload_success', $data);
        }
    }
}

/* End of file Auth_user.php */
