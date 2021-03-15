<?php
//The parent class
class topi {
    //private property inside the class
    private $model;
	private $tipe;

    public function setmodel ($model)
    {
       $this -> model = $model;
    }

    public function topi()
    {
        return " S, Hijau, Topi";
    }
}

//The child class inherits the code from the parent class
class celana extends topi{
	
    //nim code in the child class
	public function celana()
    {
        return "M, Hitam, Celana ";
    }
}

class baju extends celana{
	
    //nim code in the child class
	public function baju()
    {
        return "L, Putih, Baju";
    }
}

//create an instance from the child class
$kostum = new baju();

//set the value of the class' property.
//for this aim, we use a method that we created in the parent
//$MobilBMWberaksi1 -> setnontonTV('Mercedes Benz');

//use another method that the child class inherited from the paret class
echo $kostum -> topi();
echo "<br />";
echo $kostum -> celana();
echo "<br />";
echo $kostum -> baju();
echo "<br />";
?>