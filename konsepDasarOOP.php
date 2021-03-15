<?php
class car{

    //properties
    public $comp;
    public $color= 'beige';
    public $hasSunRood = true;

    //method = hello
    public function hello()
    {
        return "Beep I am a <i>". $this-> comp . "</i>, and I am <i>" . $this-> color;
    
    }
}

//create object di class.
$bmw = new Car();
$mercedes = new Car();

//set values dari class properties.
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//Call hello method properties
echo $bmw -> hello();
?>