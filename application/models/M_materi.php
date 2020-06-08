<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Materi extends CI_Model {

  //ambil semua data
  public function getAll(){
    $data = $this->db->get("tb_materi");
    return $data->result();
  }
  public function getBySiswa($id){
    $this->db->where('id_siswa',$id);
    $data = $this->db->get("tb_materi");
    return $data->result();
  }

  public function getData($id){
    $this->db->select('*');
    $this->db->from('tb_materi');
    $this->db->join('tb_pjbl','tb_pjbl.id_siswa=tb_materi.id_siswa');
    $this->db->join('tb_siswa.id_siswa=tb_pjbl.id_siswa');
    $this->db->where('id_siswa',$id);
    $data=$this->db->get();
    return $data->result();
  }

  public function getAllMateriByIdProyek($idProyek){
    $index = 0;
    foreach ($idProyek  as $data) {
      if ($index == 0){
        $this->db->where('id_proyek', $data);
      } else {
        $this->db->or_where('id_proyek', $data);
      }
      $index++;
    }

    $data = $this->db->get('tb_materi');
    return $data->result();
  }
}

