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


// class base 
// { 
//     static public $name;
//    static function name($n)
//     {
//         echo self::$name = $n . "<br>";
//     }
// }

// base::name("Usaid");
// echo base::$name;
// class derived extends base
// {
//    public function call()
//     {
//         echo parent::$name;
//         parent::name("Aliyan");
//     }
// }

// $test = new derived();
// $test->call();

// late static binding 

class parent_1 
{
    public static $name = "Manzar";

    public static function show()
    {
        echo self::$name . "<br>";
        echo static::$name . "<br>";
    }
}

class child1 extends parent_1
{
    public static $name = "Ebad";

    // parent::$show();
}

$obj = new child1();
$obj->show();

?>