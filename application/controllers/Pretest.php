<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pretest extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('M_pertanyaan');
		if (!isset($_SESSION['logged_in'])){
			redirect(base_url('index.php/Login'));
		}
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('v_pretest');
		$this->load->view('footer');
	}

	public function getPertanyaanByProyek($id){
		$data = $this->M_pertanyaan->getJawabanPertanyaanBySiswaProyek($_SESSION['id_siswa'], $id);

		if (count($data) != 0){
			redirect(base_url('index.php/Materi/viewMateri/'.$id));
		} else {
			$daftarPertanyaan['listPertanyaan'] = $this->M_pertanyaan->getPertanyaanByIdProyek($id);
			$daftarPertanyaan['idProyek'] = $id;

			$this->load->view('header');
			$this->load->view('v_pretest', $daftarPertanyaan);
			$this->load->view('footer');
		}
	}

	public function addJawaban($idSiswa, $idProyek, $idPjbl){
		$jawaban = $this->input->post('jawaban');
		$idPertanyaan = $this->input->post('idPertanyaan');

		$index = 0;

		foreach ($idPertanyaan as $data) {
			$arr = array(
				'jwb_pertanyaan' => $jawaban[$index],
				'id_pjbl' => $idPjbl,
				'id_pertanyaan' => $data,
				'id_siswa' => $idSiswa,
				'id_proyek' => $idProyek
			);

			$this->M_pertanyaan->insertJawabanPertanyaan($arr);

			$index++;
		}

		redirect(base_url('index.php/Materi/viewMateri/'.$idProyek));
	}
}