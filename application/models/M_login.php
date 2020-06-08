<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{
    public function getLogin($username,$password){
        
        $this->db->where("username_siswa",$username);
        $this->db->where("pswd_siswa",$password);
        $data=$this->db->get("tb_siswa"); 
        return $data->result();
        
    }  
 }
