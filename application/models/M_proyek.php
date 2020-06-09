<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proyek extends CI_Model {

    public function getAllProyekByIdProyek($idProyek){
        $index = 0;
        foreach ($idProyek  as $data) {
          if ($index == 0){
            $this->db->where('id_proyek', $data);
          } else {
            $this->db->or_where('id_proyek', $data);
          }
          $index++;
        }
    
        $data = $this->db->get('tb_proyek');
        return $data->result();
      }
}