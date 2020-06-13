<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pertanyaan extends CI_Model {

    public function getPertanyaanByIdProyek($id){
        $this->db->where('id_proyek', $id);
        $data = $this->db->get('tb_pertanyaan');

        return $data->result();
    }

    public function getJawabanPertanyaanBySiswaProyek($idSiswa, $idProyek){
        $this->db->where('id_siswa', $idSiswa);
        $this->db->where('id_proyek', $idProyek);
        $data = $this->db->get('tb_jwb_pertanyaan');

        return $data->result();
    }

    public function insertJawabanPertanyaan($arr){
        $this->db->insert('tb_jwb_pertanyaan', $arr);

        return $this->db->affected_rows();
    }
}

