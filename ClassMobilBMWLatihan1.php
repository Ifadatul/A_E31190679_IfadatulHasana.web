<?php
//The parent class
class mobilLengkap {
    //private property inside the class
    private $nontonTV;

    public function nontonTV ($nontonTV)
    {
       $this -> nontonTV = $nontonTV;
    }

    public function mobilLengkap()
    {
        return " Tv dihidupkan, Tv Mencari chanel, Tv Menampilkan ";
    }
	
	public function MobilBMWberaksi()
    {
        return "HidupkanMobil, MatikanMobil, ubahGigi " ;
    }
}

//The child class inherits the code from the parent class
class MobilBMWberaksi extends mobilLengkap {
    //nim code in the child class
}

//create an instance from the child class
$MobilBMWberaksi1 = new MobilBMWberaksi();

//set the value of the class' property.
//for this aim, we use a method that we created in the parent
//$MobilBMWberaksi1 -> setnontonTV('Mercedes Benz');

//use another method that the child class inherited from the paret class
echo $MobilBMWberaksi1 -> mobilLengkap();
echo "<br />";
echo $MobilBMWberaksi1 -> MobilBMWberaksi();
echo "<br />";
?>