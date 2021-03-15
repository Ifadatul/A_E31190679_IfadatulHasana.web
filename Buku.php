<?php
   //declare class
class Car {
	
	//properties
	public $judulBuku;
	public $pengarang;
    public $penerbit;
    public $tahun;
	
    // method = hello
public function satu()
    {
        return " judulBuku = ". $this-> judulBuku ;
    }
	
	public function dua()
    {
        return " pengarang = ". $this-> pengarang ;
    }
	
	public function tiga()
    {
        return " penerbit = ". $this-> penerbit ;
    }
	public function empat()
    {
        return " tahun = ". $this-> tahun;
    }
}

///create object di class.
$bmw = new Car();
$mercedes = new Car();

//set values dari class properties.
$bmw -> judulBuku= 'Dari Terbitnya Matahari';
$mercedes -> comp = "Mercedes Benz";

$bmw -> pengarang = 'Ifadatul Hasana';
$mercedes -> comp = "Mercedes Benz";

$bmw -> penerbit = 'Nur Fatimah';
$mercedes -> comp = "Mercedes Benz";

$bmw -> tahun = '2000';
$mercedes -> comp = "Mercedes Benz";

//Call hello method properties
echo $bmw -> satu();
echo "<br />";
echo $bmw -> dua();
echo "<br />";
echo $bmw -> tiga();
echo "<br />";
echo $bmw -> empat();
echo "<br />";
?>