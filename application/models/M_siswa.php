<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

  //ambil semua data
  public function getAll(){
    $data = $this->db->get("tb_pjbl");
    return $data->result();
  }
}