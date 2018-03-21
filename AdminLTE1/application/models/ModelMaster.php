<?php
defined('BASEPATH') or exit("No script access allowed");

/**
* 
*/
class ModelMaster extends CI_Model
{
	
	public function getData($table)
	{
		return $this->db->get($table)->result();
	}

	public function getDataPure($table)
	{
		return $this->db->get($table);
	}

	public function getDataPaging($table,$number,$offset)
	{
		return $this->db->get($table,$number,$offset)->result();
	}

	public function getDataById($table,$id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id',$id);

		$query = $this->db->get()->row();
		return $query;
	}

	public function insertData($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}

	public function updateData($id,$data,$table)
	{
		$this->db->where('id', $id);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
	}

	public function deleteData($id,$table)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
		return $this->db->affected_rows();
	}

}

?>