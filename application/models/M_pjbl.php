<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pjbl extends CI_Model {

  // Get Data PJBL
  public function getIdProyek($idSiswa){
    $this->db->where('id_siswa', $idSiswa);
    $data = $this->db->get("tb_pjbl");

    return $data->result();
  }
}