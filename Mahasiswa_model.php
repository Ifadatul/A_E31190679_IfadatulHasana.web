<?php 
class Mahasiswa_model extends CI_Model {
public function getAll(){
	$this->db->select('*');
	$this->db->from('tm_user');
	$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup');
	$query = $this->db->get();
	return $query;
}

public function input_data($data,$table){
	$this->db->insert($table,$data);
	}
}

function login($user,$pass,$table){
	$this->db->select('*');
	$this->db->from('tm_user');
	$this->db->where('username',$user);
	$this->db->where('password',$pass)
	$query = $this->db->get();
	return $query;
}
public function logout()
 {
     $this->session->sess_destroy();
     echo 'alert("Sukses! Anda berhasil logout."); window.location.href="'.base_url('index.php/auth/login');
 }
?>