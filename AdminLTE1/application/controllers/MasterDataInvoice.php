<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
* 
*/
class MasterDataInvoice extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('ModelMaster'));
		$this->load->helper(array('html','url','file'));

		if ($this->session->userdata('status') != "loggedIn") {
			redirect(base_url("master/login"));
		};
	}

	public function showAll()
	{
		$data['data_Desa'] = $this->ModelMaster->getData('master_desa');
		$this->load->view('headerAdminLTE');
		$this->load->view('Master/master_invoice',$data);
		$this->load->view('footerAdminLTE');
	}

	public function showMessages($status,$message)
	{
		if ($status == "bisa") {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-success"><h4>Berhasil </h4><p>Anda berhasil '.$message.'</p></div>');
		}
		else{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger"><h4>Gagal </h4><p>Anda gagal meng'.$message.'</p></div>');
		}
		redirect(base_url('data/surat'));
	}

	public function tambahData()
	{
		$kab = $this->input->post('kabupaten');
		$kades = $this->input->post('nama_kades');
		$kec = $this->input->post('kecamatan');
		$kel = $this->input->post('kelurahan');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$alamat_kades = $this->input->post('alamat_kades');
		$penutup = $this->input->post('penutup');

		$data = array(
			'kabupaten' => $kab,
			'kecamatan' => $kec,
			'kelurahan' => $kel,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
			'penutup_surat' => $penutup,
			'nama_pejabat' => $kades,
			'alamat_pejabat' => $alamat_kades );

		if($this->ModelMaster->insertData($data,'master_desa') > 0){
			redirect(base_url('MasterDataInvoice/showMessages/bisa/input'));
		}else{
			redirect(base_url('MasterDataInvoice/showMessages/gagal/input'));
		}

	}

	public function deleteData($id)
	{
		$get_Id = $id;

		$this->ModelMaster->deleteData($get_Id,'master_desa');
		$this->session->set_flashdata('msg', 
			'<div class="alert alert-success"><h4>Berhasil </h4><p>Anda berhasil menghapus data</p></div>');
		redirect('data/surat');
	}

	public function editData($id)
	{
		$get_Id = $id;

		$data = $this->ModelMaster->getDataById('master_desa',$get_Id);

		echo json_encode($data);	
	}

	public function updateData()
	{
		$get_Id = $this->input->post('id-desa'); 
		$kab = $this->input->post('kabupaten-edit');
		$kades = $this->input->post('nama_kades-edit');
		$kec = $this->input->post('kecamatan-edit');
		$kel = $this->input->post('kelurahan-edit');
		$no_telp = $this->input->post('no_telp-edit');
		$alamat = $this->input->post('alamat-edit');
		$alamat_kades = $this->input->post('alamat_kades-edit');
		$penutup = $this->input->post('penutup-edit');

		$data = array(
			'kabupaten' => $kab,
			'kecamatan' => $kec,
			'kelurahan' => $kel,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
			'penutup_surat' => $penutup,
			'nama_pejabat' => $kades,
			'alamat_pejabat' => $alamat_kades );

		if($this->ModelMaster->updateData($get_Id,$data,'master_desa') > 0){
			redirect(base_url('MasterDataInvoice/showMessages/bisa/update'));
		}else{
			redirect(base_url('MasterDataInvoice/showMessages/gagal/update'));
		}
	}

}

?>