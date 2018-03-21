<?php
defined('BASEPATH') or exit("No script access allowed");

class ModelPen extends CI_Model
{
	
	public function getData()
	{
		return $this->db->get('penduduk')->result();
	}

	public function insertData($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}

	public function getDashboard()
	{
		$data['jumlah_data'] = $this->db->get('penduduk')->num_rows();

		$data['jumlah_data_kota'] = $this->db->get('masterkota')->num_rows();
		
		$data['dashboard_JK'] = $this->db->query("SELECT jenis_kelamin as label, COUNT(*) as value FROM penduduk GROUP BY label ORDER BY value DESC ;")->result();

		$data['dashboard_Kota'] = $this->db->query("SELECT tempat_lahir as label, COUNT(*) as value FROM penduduk GROUP BY label ORDER BY value DESC ;")->result();

		return $data;


	}

	public function getDataByNik($table,$nik)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('nik',$nik);

		$query = $this->db->get()->row();
		return $query;
	}

	public function updateData($nik,$data,$table)
	{
		$this->db->where('nik', $nik);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
		
	}

	public function deleteData($nik,$table)
	{
		$this->db->where('nik',$nik);
		$this->db->delete($table);
	}
}


?>