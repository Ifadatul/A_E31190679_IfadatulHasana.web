<?php
//the parent class
class Car 
{
    //the $model property is private, thus it can be accessed
    //only from inside the class
    private $model;
    //public setter method
    public function setModel ($model)
    {
        $this -> model;
    }
}
// the child class
class SportsCar extends Car {
    //Tries to get a private property that belonga to the parent
    public function hello()
    {
        return "beep! I am a <i>" . $this -> model . "</ i> <br />";
    }
}
//Create an instace from the child class
$SportsCar1 = new SportsCar();

//echo $SportsCar1 -> hello();

?>