<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{	
		$data['title']			= 'Pengaturan Menu';
	    $data['userdata'] 		= $this->session->userdata('logged_user');
	    $data['sidemenu'] 		= $this->session->userdata('sidemenu');
		$data['content']	= 'modul/index.php';

		$this->load->view('template/main', $data, FALSE);
	}

}

/* End of file Modul.php */
/* Location: ./application/controllers/Modul.php */