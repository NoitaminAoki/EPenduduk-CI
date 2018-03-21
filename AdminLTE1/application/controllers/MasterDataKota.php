<?php
defined('BASEPATH') or exit("No direct script access allowed");

/**
* 
*/
class MasterDataKota extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMaster');
		$this->load->helper(array('html','url','file'));

		if ($this->session->userdata('status') != "loggedIn") {
			redirect(base_url("master/login"));
		};

	}

	public function showMessages($kota,$status,$message)
	{
		if ($status == "bisa") {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-success"><h4>Berhasil </h4><p>Anda berhasil '.$message.'</p></div>');
		}
		else{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger"><h4>Gagal </h4><p>Anda gagal meng'.$message.'</p></div>');
		}
		redirect(base_url('data/kota'));
	}

	public function showAll()
	{
		$data['kota'] = $this->ModelMaster->getData('masterkota');

		$this->load->view('headerAdminLTE');
		$this->load->view('master_Kota',$data);
		$this->load->view('footerAdminLTE');
	}

	public function tambahKota()
	{
		$nama_kota = $this->input->post('nama_kota');

		$data = array('nama_kota' => $nama_kota);

		if($this->ModelMaster->insertData($data,'masterkota') > 0){
			redirect(base_url('MasterDataKota/showMessages/'.$nama_kota.'/bisa/input'));
		}else{
			redirect(base_url('MasterDataKota/showMessages/'.$nama_kota.'/gagal/input'));
		}

	}

	public function editKota($id)
	{
		$get_Id = $id;

		$data = $this->ModelMaster->getDataById('masterkota',$get_Id);

		echo json_encode($data);	
	}

	public function updateKota()
	{
		$id = $this->input->post('id_edit_kota');
		$nama_kota = $this->input->post('nama_edit_kota');

		$data = array('nama_kota' => $nama_kota);

		if($this->ModelMaster->updateData($id,$data,'masterkota') > 0){
			redirect(base_url('MasterDataKota/showMessages/'.$nama_kota.'/bisa/update'));
		}else{
			redirect(base_url('MasterDataKota/showMessages/'.$nama_kota.'/gagal/update'));
		}


	}

	public function deleteKota($id)
	{
		$get_Id = $id;
		
		if ($this->ModelMaster->deleteData($get_Id,'masterkota') > 0) {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-success"><h4>Berhasil </h4><p>Anda berhasil menghapus data</p></div>');
			
		}else{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger"><h4>Gagal </h4><p>Anda gagal menghapus data</p></div>');
		}

		
		redirect(base_url('data/kota'));
	}

}

?>