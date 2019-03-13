<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model', 'main');
	}

	public function index()
	{
		if ($this->session->userdata('logged_user') == NULL) {
			
			redirect(site_url('login/page'),'refresh');
		}else{

			redirect(site_url(''),'refresh');
		}
		
	}

	public function page()
	{
		if ($this->session->userdata('logged_user') == NULL) {
			
			if ($this->input->post('submit') == 'signin') {
				
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$query = $this->main->login($username, md5($password));
				if ($query) {
					
					$result = $this->main->get_user($username, md5($password));
					$logged_user = array(
										'id_user'	=> $result['id_user'],
										'nama'	 	=> $result['nama'],
										'level' 	=> $result['level'],
										'id_modul'	=> $result['id_modul'],
										);
					$sidemenu 	= serialize($this->main->get_menu($result['id_modul']));
					$this->session->set_userdata('logged_user', $logged_user);
					$this->session->set_userdata('sidemenu', $sidemenu);
					redirect(site_url(''),'refresh');
				}else{

					$this->session->set_flashdata('msg_login', '
						<div class="alert alert-danger alert-dismissible">
    						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Danger,</strong> Password is incorrect!
						</div>
					');
					redirect(site_url('login/page'),'refresh');
				}
			}elseif($this->input->post('submit') == 'signup'){


			}else{

				$data['page'] = 'login';
				$data['action'] = site_url('login/page');
				$this->load->view('login/index',$data);
			}
				
		}else{

			$this->load->view('template/main');	
		}
	}

	public function logout(){

		$this->session->unset_userdata('logged_user');
		redirect(site_url(''),'refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */