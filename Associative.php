<?php 
class Hello extends CI_Controller{
	public function index(){
		$data = array(
			'nama' => "John Smith",
			'alamat' => "Cambridge, USA",
			'kampus' => "Harvard"
			 );
		$this->load->view('hello_ci', $data);
	}
}
?>