<?php
   //declare class
class Car {
	
	//properties
	public $milikA; // = 'A';
	public $milikB; // = 'B';
    public $milikC; // = 'C';
    public $merekA; // = 'ASUS';
	public $merekB; // = 'Acer';
    public $merekC; // = 'lenovo';


    // method = hello
public function satu()
    {
        return "Hidupkan laptop ". $this-> merekA . " milik " . $this-> milikA ;
    }
	
	public function dua()
    {
        return "Matikan laptop ". $this-> merekB . " milik " . $this-> milikB ;
    }
	
	public function tiga()
    {
        return "Hidupkan laptop ". $this-> merekC . " milik " . $this-> milikC . ". Matikan loptop " . $this -> merekC . " milik " . $this -> milikC;
    }
}

///create object di class.
$bmw = new Car();
$mercedes = new Car();

//set values dari class properties.
$bmw -> milikA = 'A';
$bmw -> merekA = "ASUS";
$mercedes -> comp = "Mercedes Benz";

$bmw -> milikB = 'B';
$bmw -> merekB = "Acer";
$mercedes -> comp = "Mercedes Benz";

$bmw -> milikC = 'C';
$bmw -> merekC = "Lenovo";
$mercedes -> comp = "Mercedes Benz";

//Call hello method properties
echo $bmw -> satu();
echo "<br />";
echo $bmw -> dua();
echo "<br />";
echo $bmw -> tiga();
echo "<br />";
?>