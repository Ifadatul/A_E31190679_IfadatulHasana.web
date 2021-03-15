<?php
class Car{
    
    //public method & properies.
    public $model;

    public function getModel()
    {
        return "The car model is" . $this -> model;
    }
}

	$mercedes = new Car();
	//akses property dari dalam class
	$mercedes -> medel = "Mercedes benz";
	//akses property dari luar class
	echo $mercedes -> getModel();

?>