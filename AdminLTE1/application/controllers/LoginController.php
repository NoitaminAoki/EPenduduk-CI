<?php
defined('BASEPATH') or exit("No direct script access allowed");

/**
* 
*/
class LoginController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('html','url'));
	}

	public function index()
	{
		
	}

	public function login()
	{
		$get_Username = $this->input->post('username');
		$get_Password = $this->input->post('password');

		if ($get_Username != "" && $get_Password != "") {

			if ($get_Username == "admin" && $get_Password == "admin") {
				$data_Sesi = array(
					'username' => $get_Username,
					'status' => "loggedIn"
				);

				$this->session->set_userdata($data_Sesi);
				$this->session->unset_userdata('nik_User');
				redirect(base_url("Penduduk/showAll"));

			}else{
				$this->session->set_flashdata('msg', 
					'<div class="alert alert-danger"><p>Username atau password salah</p></div>');
				$data_User['usersession'] = array('username' => $get_Username,'password' => $get_Password);
		// echo json_encode($data_User);
				$this->load->view('login_Admin',$data_User);

			}

		}else{
			$this->load->view('login_Admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("master/login"));
	}
}

?>