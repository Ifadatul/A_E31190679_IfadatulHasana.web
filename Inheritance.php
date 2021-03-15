<?php
//The parent class
class Car {
    //private property inside the class
    private $model;

	//public setter method
    public function setModel ($model)
    {
        $this -> model = $model;
    }

    public function hello()
    {
        return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
}

	//The child class inherits the code from the parent class
	class SportsCar extends car{
    //nim code in the child class
}

	//create an instance from the child class
	$SportsCar1 = new SportsCar();

	//set the value of the class' property.
	//for this aim, we use a method that we created in the parent
	$SportsCar1 -> setModel('Mercedes Benz');

	//use another method that the child class inherited from the paret class
	echo $SportsCar1 -> hello();

?>