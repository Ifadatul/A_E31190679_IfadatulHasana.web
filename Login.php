<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_controller{
    function_construct(){
        parent::_construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index (){
        $this->load->view('crud/login');
    }

    public function cek_log(){
        $username = $this->input->post('txt_user');
        $username = $this->input->post('txt_pass');
        $cek = $this->Mahasiswa_model->login($username,$password, 'tm_user')->result();
        if($cek != FALSE){
            foreach ($cek as $row){
                $user = $row->username;
                $grup = $row->grup;
            }
            $this->session->set_userdata('session_user', $user);
            $this->session->set_userdata('session_grup', $grup);
            redirect('Mahasiswa');
        }else{
            $this->load->view('crud/login');
        }
    }
}
?>