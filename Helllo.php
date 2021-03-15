<?php 
class Hello extends CI_Controller{
    public function index(){
        //echo "<h2>Hello Word cI!</h2>";

        //memanggil file view
        $this -> load ->view('helloview');//file view
    }
}
?>