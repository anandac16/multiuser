<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	var $table = 'user';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function allData()
	{	
		$this->db->join('modul', 'modul.id_modul = user.id_modul', 'left');
		$this->db->order_by('nama', 'asc');
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function getData($id)
	{
		$this->db->join('modul', 'modul.id_modul = user.id_modul', 'left');
		$this->db->where('id_user', $id);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	public function delete_by_id($id)
	{
		$this->db->where("id_user",$id)
		         ->delete($this->table);
		         
		return $this->db->affected_rows();
	}

	public function getModul()
	{
		$query = $this->db->get('modul');
		return $query->result();
	}

	public function cekUsername($id)
	{
		$query=$this->db->where('username',$id)
            ->get($this->table);
      
	    return $query->num_rows() >= 1 ? TRUE : FALSE;
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($id,$data)
	{
		$this->db->where("id_user",$id);

		return $this->db->update($this->table,$data);;
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */