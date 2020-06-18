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
		$_SESSION['id_proyek'] = $id;

		$daftarMateri['listMateri'] = $this->M_materi->getMateriById($id);
		$daftarMateri['listJawaban'] = $this->M_materi->getJawabanMateri($_SESSION['id_pjbl']);

		$this->load->view('header');
		$this->load->view('v_materi', $daftarMateri);
		$this->load->view('footer');
	}

	public function uploadTugas($idMateri){
		$name = strval(round(microtime(true) * 1000));
		$config['upload_path']          = $_SERVER['DOCUMENT_ROOT'].'/upload';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 2000;
		$config['file_name']            = $name;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = $this->upload->display_errors();
			
			echo '<script type="text/javascript"> alert("'.$error.'"); </script>';

			redirect(base_url('index.php/Materi/viewMateri/'.$_SESSION['id_proyek']));
		}
		else
		{
			$array = array(
				'file_jwb_materi' => $name.'.pdf',
				'nama_jwb_materi' => $name,
				'id_pjbl' => $_SESSION['id_pjbl'],
				'id_materi' => $idMateri
			);

			$this->M_materi->addJawaban($array);

			redirect(base_url('index.php/Materi/viewMateri/'.$_SESSION['id_proyek']));
		}
	}

	public function downloadMateri($nama){
		$this->load->helper('download');
		force_download($_SERVER['DOCUMENT_ROOT'].'/materi/'.$nama, NULL);
	}

	public function downloadTugas($nama){
		$this->load->helper('download');
		force_download($_SERVER['DOCUMENT_ROOT'].'/upload/'.$nama, NULL);
	}

	public function deleteTugas($idJawaban){
		$this->M_materi->removeTugas($idJawaban);
		
		redirect(base_url('index.php/Materi/viewMateri/'.$_SESSION['id_proyek']));
	}

}