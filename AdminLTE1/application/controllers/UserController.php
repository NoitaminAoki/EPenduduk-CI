<?php
defined('BASEPATH') or exit("No direct script access allowed");

/**
* 
*/
class UserController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->Model(array('ModelUser','ModelMaster','ModelPen'));
	}

	public function index()
	{
		if ($this->session->userdata('status') == "user_LoggedIn") {
			redirect(base_url('homepage/me'));
		}else{
			$data['data_Kota'] = $this->ModelMaster->getData('masterkota');
			$this->load->view('homepage/homepage_User',$data);
		}

	}

	public function homepageUser()
	{
		if ($this->session->userdata('status') == "user_LoggedIn") {
			//paginasi surat domisili
			$this->load->library('pagination');

			$data['data_Desa'] = $this->ModelMaster->getData('master_desa');
			
			$get_Nik = $this->session->userdata('nik_User');
			$data['profile'] = $this->ModelUser->getDataUser($get_Nik);
			$convert_date = date_create($data['profile']->tanggal_lahir);
			$data['profile']->tanggal_lahir = $convert_date;
			$data['data_Kota'] = $this->ModelMaster->getData('masterkota');
			$this->load->view('homepage/homepage_User',$data);

		}else {
			redirect(base_url('homepage'));
		}
	}

	public function loginUser()
	{
		$get_Nik = $this->input->post('nik_signin');
		$get_Password = $this->input->post('password_signin');

		if ($get_Nik != "" && $get_Password != "") {

			$data['user'] = $this->ModelUser->checkLogin($get_Nik,$get_Password);

			if ($data['user']->num_rows() > 0) {

				$data['login_user_session'] = array('nik_User' => $get_Nik,'status' => 'user_LoggedIn');

				$this->session->set_userdata($data['login_user_session']);
				redirect('homepage/me');

			}
			else{
				echo "gagal";
			}


		}else {
			redirect(base_url('homepage'));
		}
	}

	public function registerUser()
	{
		$random_Name1 = mt_rand();
		$name_fileKtp = $random_Name1;
		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
		$config['max_width']            = 4080;
		$config['max_height']           = 4080;
		$config['file_name'] = $name_fileKtp;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_ktp')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>'.$error['error'].'</strong></div>');
			redirect(base_url('homepage'));
		}else{

			$data_Img = $this->upload->data();

			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$agama = $this->input->post('agama');
			$status = $this->input->post('status');
			$pekerjaan = $this->input->post('pekerjaan');
			$kewarganegaraan = $this->input->post('kewarganegaraan');
			$gol_darah = $this->input->post('gol_darah');
			$password = $this->input->post('password');
			$role = "penduduk";


			$data = array(
				'nik' => $nik,
				'nama' => $nama,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat' => $alamat,
				'agama' => $agama,
				'status' => $status,
				'pekerjaan' => $pekerjaan,
				'kewarganegaraan' => $kewarganegaraan,
				'gol_darah' => $gol_darah,
				'foto_ktp' => $data_Img['file_name'],
				'password' => $password,
				'role' => $role
			);


			if ($this->ModelPen->insertData($data,'penduduk') > 0) {
				$this->session->set_flashdata('msg_Register','Success to create your personal account! \n\n Now you can sign in with your account.');
				redirect(base_url('homepage'));
			}
			else{
				echo "gagal";
			}

		}
	}

	public function logoutUser()
	{
		$this->session->sess_destroy();
		redirect(base_url('homepage'));
	}

	public function generatePdf()
	{
		$get_Nik = $this->session->userdata('nik_User');
		$data['data_Surat'] = $this->ModelMaster->getDataById('master_desa','2');
		$data['data_Pdf'] = $this->ModelUser->getDataUser($get_Nik);
		$convert_date = date_create($data['data_Pdf']->tanggal_lahir);
		$data['data_Pdf']->tanggal_lahir = $convert_date;

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "surat_ajuan.pdf";
		$this->pdf->load_view('laporan_Pdf', $data);


	}

	public function tester()
	{
		$data['data_Surat'] = $this->ModelMaster->getDataById('master_desa','2');
		$this->load->view('coba',$data);

		// $this->pdf->setPaper('A4', 'potrait');
		// $this->pdf->filename = "surat_ajuan.pdf";
		// $this->pdf->load_view('coba', $data);
	}

}

?>