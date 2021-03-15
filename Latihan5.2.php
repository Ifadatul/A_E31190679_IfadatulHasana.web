<?php
//The parent class
class segitiga {
    //private property inside the class
   // private $alas;
	

    public function luas_segitiga ($alas,$tinggi)
    {
        $luassegitiga = ($alas)/2 * $tinggi;
		return  $luassegitiga ; //"Luas Segitiga dengan alas 6 dan tinggi 15 = " . segitiga(6,15);
    }

}

//The child class inherits the code from the parent class
class segiempat extends segitiga{
    //nim code in the child class
	public function luas_persegi($sisi)
	{
		$luaspersegi = $sisi * $sisi;
		return $luaspersegi; // "Luas Pesegi dengan sisi 4 = " . luas_persegi(4);
	}
}

class lingkaran extends segiempat{
    //nim code in the child class
	public function luas_lingkaran($phie,$jari)
	{
		$luaslingkaran = ($phie) * (($jari * $jari) );
		return $luaslingkaran; // "Luas Segitiga dengan phie 22/7 dan jari 14 = " .luas_lingkaran(22/7,14);
		return "Luas Segitiga dengan alas 6 dan tinggi 15 =  $this->luassegitiga, Luas Pesegi dengan sisi 4 = $this->luaspersegi, 
     Luas Segitiga dengan phie 22/7 dan jari 14 = $this->luaslingkaran";
	}
}

//create an instance from the child class
$bagunDatar = new lingkaran();

//set the value of the class' property.
//for this aim, we use a method that we created in the parent
$bagunDatar -> luassegitiga = $luassegitiga ;
$bagunDatar -> luaspersegi = $luaspersegi;
$bagunDatar -> luaslingkaran = $luaslingkaran;


//use another method that the child class inherited from the paret class

echo $bagunDatar-> luas_segitiga();
echo "<br />";
echo $bangunDatar->luas_persegi();
echo "<br />";
echo $bangunDatar->luas_lingkaran();

?>