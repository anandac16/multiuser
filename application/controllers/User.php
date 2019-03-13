<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$logged_user = $this->session->userdata('logged_user');
		$sidemenu = $this->session->userdata('sidemenu');
		if ($logged_user == NULL) {
			
			redirect(site_url('login/page'),'refresh');
		}else{
			$this->load->model('user_model', 'user');
		}
	}

	public function index()
	{
		$data['title']			= 'Data User';
	    $data['userdata'] 		= $this->session->userdata('logged_user');
	    $data['sidemenu'] 		= $this->session->userdata('sidemenu');
	    $data['content']		= 'user/index.php';
	    $data['data']			= $this->user->allData();
		$this->load->view('template/main', $data);	
	}

	public function add()
	{
		$data['title']			= 'Tambah Data User';
	    $data['userdata'] 		= $this->session->userdata('logged_user');
	    $data['sidemenu'] 		= $this->session->userdata('sidemenu');
	    $data['backBtn']		= '<a class="btn btn-sm btn-flat btn-warning" href="'.site_url("user").'"><i class="fa fa-arrow-left "></i> Back</a>';
	    $data['saveBtn']		= '<button id="send" type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>';
	    $data['action']			= site_url('user/save');
	    $data['modul']			= $this->user->getModul();
	    $data['content']		= 'user/add.php';
		$this->load->view('template/main', $data);
	}

	public function save()
	{
		$username = $this->input->post('username');
		$cek = $this->user->cekUsername($username);
		if ($cek) {
			
			$this->session->set_flashdata('error','
				<div class="alert alert-danger alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Danger,</strong> Username already exist!
				</div>	
				');
			redirect(site_url('user'),'refresh');
		}else{



		$data = array('nama' => $this->input->post('nama'),
					  'username' => $this->input->post('username'),
					  'email' => $this->input->post('email'), 
					  'password' => md5($this->input->post('password')), 
					  'level' => $this->input->post('level'), 
					  'id_modul' => $this->input->post('id_modul'), 
					 );

		$save = $this->user->save($data);

			if ($save) {
				
				$this->session->set_flashdata('error','
					<div class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Success,</strong> Data saved successfully.
					</div>	
					');
				redirect(site_url('user'),'refresh');
			}else{

				$this->session->set_flashdata('error','
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Failed,</strong> Data Failed to Save.
					</div>	
					');
				redirect(site_url('user'),'refresh');

			}
		}
		
 	}

 	public function edit($id)
 	{

		$data['title']			= 'Edit Data User';
	    $data['userdata'] 		= $this->session->userdata('logged_user');
	    $data['sidemenu'] 		= $this->session->userdata('sidemenu');
	    $data['backBtn']		= '<a class="btn btn-sm btn-flat btn-warning" href="'.site_url("user").'"><i class="fa fa-arrow-left "></i> Back</a>';
	    $data['saveBtn']		= '<button id="send" type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Update</button>';
	    $data['action']			= site_url('user/update');
	    $data['modul']			= $this->user->getModul();
	    $data['content']		= 'user/edit.php';
	    $data['data']			= $this->user->getData($id);
		$this->load->view('template/main', $data);
 	}

 	public function update()
 	{
 		$id = $this->input->post('id_user');
 		$data = array('nama' => $this->input->post('nama'),
					  'username' => $this->input->post('username'),
					  'level' => $this->input->post('level'), 
					  'id_modul' => $this->input->post('id_modul'), 
					 );

		$update = $this->user->update($id, $data);

		if ($update) {
			
			$this->session->set_flashdata('error','
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Success,</strong> Data updated successfully.
				</div>	
				');
			redirect(site_url('user'),'refresh');
		}else{

			$this->session->set_flashdata('error','
				<div class="alert alert-danger alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Failed,</strong> Data Failed to Update.
				</div>	
				');
			redirect(site_url('user'),'refresh');

		}		
 	}

	public function delete($id)
	{
		$query = $this->user->delete_by_id($id);
		echo $query ? json_encode(array("status" => TRUE)) : json_encode(array("status" => FALSE));
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */