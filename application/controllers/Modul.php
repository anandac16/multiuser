<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model','main');
	}

	public function index()
	{	
		$data['title']			= 'Pengaturan Menu';
	    $data['userdata'] 		= $this->session->userdata('logged_user');
	    $data['sidemenu'] 		= $this->session->userdata('sidemenu');
	    $data['menu'] 			= $this->main->getMenu($data['userdata']['id_modul']);
		$data['content']		= 'modul/index.php';

		$this->load->view('template/main2', $data, FALSE);
	}

}

/* End of file Modul.php */
/* Location: ./application/controllers/Modul.php */