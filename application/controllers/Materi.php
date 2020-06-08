<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
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

}