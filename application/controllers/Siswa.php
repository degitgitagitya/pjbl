<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	
	public function __construct(){
		
		parent:: __construct();
		$this->load->model('M_siswa');
	}
	
	public function index(){
		$data['tb_pjbl']= $this->M_siswa->getAll();
		$this->load->view('header');
		$this->load->view('v_siswa', $data);
		$this->load->view('footer');
	}

}