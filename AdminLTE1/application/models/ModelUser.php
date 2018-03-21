<?php
defined('BASEPATH') or exit("No direct script access allowed");

/**
* 
*/
class ModelUser extends CI_Model
{
	
	public function checkLogin($nik,$password)
	{
		$this->db->select('*');
		$this->db->from('penduduk');
		$this->db->where(array('nik'=> $nik,'password'=>$password));
		$data = $this->db->get();

		return $data;
	}

	public function getDataUser($nik)
	{
		$this->db->from('penduduk');
		$this->db->where('nik',$nik);
		return $this->db->get()->row();
	}


}

?>