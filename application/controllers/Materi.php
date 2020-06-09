<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('M_materi');
		$this->load->model('M_pjbl');
		if (!isset($_SESSION['logged_in'])){
			redirect(base_url('index.php/Login'));
		}
	}
	
	public function index(){
		$idProyek = $this->M_pjbl->getIdProyek($_SESSION['id_siswa']);
		
		$arrIdProyek = array();
		foreach ($idProyek as $data) {
			array_push($arrIdProyek, $data->id_proyek);
		}

		$daftarMateri['tb_materi'] = $this->M_materi->getAllMateriByIdProyek($arrIdProyek);

		$this->load->view('header');
		$this->load->view('v_materi', $daftarMateri);
		$this->load->view('footer');
	}

	public function viewMateri($id){
		$daftarMateri['listMateri'] = $this->M_materi->getMateriById($id);

		$this->load->view('header');
		$this->load->view('v_materi', $daftarMateri);
		$this->load->view('footer');
	}

}