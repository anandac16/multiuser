<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		$query = $this->db->get('user');
		if($query->num_rows() == 1){
			
			return true;
		}else{

			return false;
		}

	}

	public function get_user($username,$password){
        
        $this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		$query = $this->db->get('user');
        return $query->row_array();
    }

	public function get_menu($id_modul){
		  
		$query= $this->db->where('id_modul',0)->or_where('id_modul',$id_modul)->get('menu');
		return $query->result_array();
	}

	public function getMenu($id)
	{
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->join('submenu', 'submenu.id_menu = menu.id_menu', 'LEFT');
		$this->db->where('id_modul', $id);
		$this->db->order_by('menu');
		$query = $this->db->get();
		
		foreach ($query->result() as $obb) {
			$result['menu'][$obb->menu]['menu'] = $obb->menu;
			$result['menu'][$obb->menu]['icon'] = $obb->icon;
			$result['menu'][$obb->menu]['level'] = $obb->level;
			$result['menu'][$obb->menu]['linked'] = $obb->linked;
			$result['menu'][$obb->menu]['id_modul'] = $obb->id_modul;
			$result['menu'][$obb->menu]['submenu'][$obb->id_submenu] = array(
				'submenu' => $obb->submenu,
				'linked' => $obb->linked
			);
		}
			return $result;
	}

}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */