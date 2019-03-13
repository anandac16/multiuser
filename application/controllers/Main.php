<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model', 'main');
		
	}

	public function index()
	{
		$logged_user = $this->session->userdata('logged_user');
		if ($logged_user == NULL) {
			
			redirect(site_url('login/page'),'refresh');
		}else{

			$data['title']			= 'Dashboard';
		    $data['userdata'] 		= $this->session->userdata('logged_user');
		    $data['sidemenu'] 		= $this->session->userdata('sidemenu');
		    $data['content']		= 'dashboard.php';
			$this->load->view('template/main', $data);	
		}
	}
}
