<?php


$name = "Manzar";
$profession = "Video Editor (Sastay wala)";// Variable
function work()   // function
{
    echo "Nothing to work <br>";
};
class manzar
{
   public $name = "Manzar";
   public $profession = "Video Editor"; // Property

public function work()   // method
{
    echo "Nothing to work <br>";
}

public function __construct()
{
    for($x=1;$x<10;$x++)
    {
        echo "Why Manzar Why <br>";
    }
}
}

class person 
{
    public $name;
    public $age ;

    function __construct($n = "No Name" , $x = "No Age")
    {
       echo $this->name = $n;
       echo "<br>";
       echo $this->age = $x;
    }
}

$obj3 = new person();


// $obj = new manzar();

//  $obj->name;
//  $obj->work();

//  $obj2 = new manzar();
//  $obj2->profession;
//  $obj2->work();



?>