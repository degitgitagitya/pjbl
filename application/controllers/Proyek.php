<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    public function __construct(){
		parent:: __construct();
		$this->load->model('M_proyek');
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

		$daftarProyek['listProyek'] = $this->M_proyek->getAllProyekByIdProyek($arrIdProyek);

        $this->load->view('header');
		$this->load->view('v_proyek', $daftarProyek);
		$this->load->view('footer');
    }
}