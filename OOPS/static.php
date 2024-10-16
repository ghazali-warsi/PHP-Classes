<?php

// class base 
// {   public $name;
//     function name($n)
//     {
//         echo $this->name = $n . "<br>";
//     }
// }

// $obj =  new base();
// $obj->name("Usaid");


class base 
{ 
    static public $name;
   static function name($n)
    {
        echo self::$name = $n . "<br>";
    }
}

base::name("Usaid");
echo base::$name;
class derived extends base
{
   public function call()
    {
        echo parent::$name;
        parent::name("Aliyan");
    }
}

$test = new derived();
$test->call();

?>