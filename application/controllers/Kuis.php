<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuis extends CI_Controller {

	public function index()
	{
		//parent::__construct();
        // if ($this->session->userdata('status') != 'login' ) 
        // {
        //     redirect(site_url('auth_user'));
        // }		
		$this->load->view('kuis/kuisioner_view.php');
	}

}

/* End of file Kuisioner.php */
/* Location: ./application/controllers/Kuisioner.php */ ?>