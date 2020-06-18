<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function __construct(){
		parent :: __construct();
		$this->load->helper('url');
		$this->load->model("M_login");
		$this->load->model("M_pjbl");
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('v_login');
		$this->load->view('footer');
		
	}
	public function loginSiswa(){
		$username=$this->input->post('username_siswa');
		$password=$this->input->post('pswd_siswa');
		$data=$this->M_login->getLogin($username,$password);
		if (count($data) !=0){
			$pjbl = $this->M_pjbl->getIdProyek($data[0]->id_siswa);

			$newData = array(
				'id_siswa'  => $data[0]->id_siswa,
				'username_siswa' => $data[0]->username_siswa,
				'logged_in' => TRUE,
				'id_pjbl' => $pjbl[0]->id_pjbl
			);

			$this->session->set_userdata($newData);
			redirect(base_url('index.php/Proyek'));
		}else{
			$viewData['err']="Username/Password Salah";
			$this->load->view('header');
			$this->load->view('v_login',$viewData);
			$this->load->view('footer');
		}
	}

	public function logoutSiswa(){
		unset(
			$_SESSION['id_siswa'],
			$_SESSION['username_siswa'],
			$_SESSION['logged_in'],
			$_SESSION['id_pjbl']
		);

		redirect(base_url('index.php/Login'));
	}
}
			
	
