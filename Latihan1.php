<?php

class laptop {

    public $hidupkanLaptop;
    public $matikanLaptop;
    public $restratLaptop;
    public $operasikanLaptop;
    public $jalankanaplikasi;


public function hidupkan_laptop() {
      return $this -> hidupkanLaptop . $this -> operasikanLaptop . "<br />" ;
	  return "<br />";
   }
public function matikan_laptop() {
      return $this -> jalankanaplikasi . $this -> matikanLaptop . "<br />" ;
   }
protected function restrat_laptop(){
	   return $this -> restratLaptop . "<br />" ;
	}
}

$bmw = new laptop();
$mercedes = new laptop();


echo $bmw -> hidupkanLaptop = 'Hidupkan Laptop . ';
echo $bmw -> matikanLaptop = "Matikan Laptop . ";
echo $bmw -> restratLaptop = "Restrat Laptop . ";
echo $bmw -> operasikanLaptop = "Operasikan Laptop . ";
$mercedes -> jalankanaplikasi = "Jalankan Aplikasi . ";

//get values
echo $bmw -> hidupkanLaptop ; //hidupkanLaptop
echo "<br />";
echo $mercedes -> matikanLaptop ; //matikanLaptop
echo "<br />";
echo $bmw -> restratLaptop ; //restratLaptop
echo "<br />";
echo $mercedes -> jalankanaplikasi ; //jalankanaplikasi
echo "<hr />";

?>