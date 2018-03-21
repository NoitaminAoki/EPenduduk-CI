<?php 
defined('BASEPATH') or exit("No direct script access allowed");

class Penduduk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->Model(array('ModelPen','ModelMaster'));
		$this->load->helper(array('html','url','file'));
		$this->load->library('session');

		if ($this->session->userdata('status') != "loggedIn") {
			redirect(base_url("master/login"));
		};

	}

	public function index()
	{
		$this->load->view('pendudukAdmin');
	}

	public function showAll()
	{

		$data['penduduk'] = $this->ModelPen->getData();
		$this->load->view('headerAdminLTE');
		$this->load->view('penduduk-all',$data);
		$this->load->view('footerAdminLTE');
	}

	public function viewByNik($nik)
	{
		$get_Nik = $nik;
		$data = $this->ModelPen->getDataByNik('penduduk',$get_Nik);
		
		echo json_encode($data);
	}

	public function dashboardPenduduk()
	{

		$data['penduduk'] = $this->ModelPen->getDashboard();

		$this->load->view('headerAdminLTE');
		$this->load->view('dashboard_Penduduk',$data);
		$this->load->view('footerAdminLTE');
		$this->load->view('chart_Dashboard');
	}

	public function editPenduduk($nik)
	{
		$getNik = $nik;
		$data['penduduk'] = $this->ModelPen->getDataByNik('penduduk',$getNik);
		$data['data_Kota'] = $this->ModelMaster->getData('masterkota');
		$this->load->view('headerAdminLTE');
		$this->load->view('addPenduduk',$data);
		$this->load->view('footerAdminLTE');
		$this->load->view('bug_image_scroll');
	}

	public function tambahPenduduk()
	{
		$data['data_Kota'] = $this->ModelMaster->getData('masterkota');
		$this->load->view('headerAdminLTE');
		$this->load->view('addPenduduk',$data);
		$this->load->view('footerAdminLTE');
		$this->load->view('bug_image_scroll');
	}


	public function savePenduduk()
	{
		$this->form_validation->set_rules('nik','nika','min_length[5]', array('exact_length'=>'Panjang nik harus sepuluh digit!'));

		$this->form_validation->set_rules('nama','nama','required');

		if($this->form_validation->run() == false){
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger"><h4>Gagal </h4><p>'.validation_errors().'</p></div>');
			redirect(base_url('Penduduk/tambahPenduduk'));
		}else{
			$config['upload_path']          = './assets/images/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 4080;
			$config['max_height']           = 4080;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto_ktp')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('msg', 
					'<div class="alert alert-danger"><h4>Gagal </h4><p>'.$error['error'].'</p></div>');
				redirect(base_url('Penduduk/tambahPenduduk'));
			}else{
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
				$foto_ktp = $this->input->post('nama_foto');
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
					'foto_ktp' => $foto_ktp,
					'password' => $password,
					'role' => $role
				);


				if ($this->ModelPen->insertData($data,'penduduk') > 0) {
					redirect('penduduk/showMessages/'.$nik.'/bisa/input');
				}
				else{
					redirect('penduduk/showMessages/'.$nik.'/gagal/input');
				}

			}
		}
		
	}

	public function showMessages($nik,$status,$message)
	{
		if ($status == "bisa") {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-success"><h4>Berhasil </h4><p>Anda berhasil '.$message.' data dengan nik '.$nik.'</p></div>');
		}
		else{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger"><h4>Gagal </h4><p>Anda gagal meng'.$message.' data dengan nik '.$nik.'</p></div>');
		}
		redirect('Penduduk/showAll');
	}

	public function ngetes()
	{
		
		$this->session->set_flashdata('msg', 
			'<div class="alert alert-danger"><h4>Berhasil </h4><p>Anda berhasil input data.</p></div>');
		redirect('Penduduk/showAll');
	}

	public function updatePenduduk()
	{
		$nama_foto_baru = $this->input->post('nama_foto');
		$nama_foto_lama = $this->input->post('nama_foto_lama');
		$nik_lama = $this->input->post('nik_lama');
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
			'foto_ktp' => $nama_foto_baru,
			'password' => $password,
			'role' => $role
		);


		if ($nama_foto_baru == $nama_foto_lama) {
			$this->updatingData($nik_lama,$data,$nama_foto_baru);
		}else{
			$config['upload_path']          = './assets/images/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 4080;
			$config['max_height']           = 4080;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto_ktp')){
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
			}else{
				unlink("./assets/images/$nama_foto_lama");
				$this->updatingData($nik_lama,$data,$nama_foto_baru);
			}
		}


	}

	public function updatingData($nik_lama,$data,$nama_foto)
	{
		$get_final_name = $nama_foto;
		$getData = $data;
		$getNik = $nik_lama;

		if ($this->ModelPen->updateData($getNik,$getData,'penduduk') > 0) {
			redirect('penduduk/showMessages/'.$getNik.'/bisa/update');
		}
		else{
			redirect('penduduk/showMessages/'.$getNik.'/gagal/update');
		}
	}

	public function deletePenduduk($nik)
	{
		$get_Nik = $nik;

		$data['penduduk'] = $this->ModelPen->getDataByNik('penduduk',$get_Nik);

		$fotoKtp = $data['penduduk']->foto_ktp;
		unlink("./assets/images/$fotoKtp");
		

		$this->ModelPen->deleteData($get_Nik,'penduduk');
		$this->session->set_flashdata('msg', 
			'<div class="alert alert-success"><h4>Berhasil </h4><p>Anda berhasil menghapus data dengan nik '.$get_Nik.'</p></div>');
		redirect('Penduduk/showAll');
	}
}

?>