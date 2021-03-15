<?php
//declare class
class Car {
	
	//properties
	public $comp;
	public $color = 'beige';
    public $hasSunRoof = true;

    // method = hello
    public function hello()
    {
        return "beep";
    }
}

//membuat instance
$bmw = new Car();
$mercedes = new Car();

//get values
echo $bmw -> color; //beige
echo "<br />";
echo $mercedes -> color; //beige
echo "<br />";

//set values
echo $bmw -> color = 'blue';
echo $bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//get value 
echo $bmw -> color; //blue
echo "<br />";
echo $mercedes -> color; //beige
echo "<br />";
echo $bmw -> comp; //BMW
echo "<br />";
echo $mercedes -> comp; //Mercedes benz
echo "<hr />";

//methods get a beep
echo $bmw -> hello(); //beep

?>