<?php 

// there are 3 types of modifiers in php oops

// public , protected , private 

// Example of public

// class A {
//     public $name = "Saleem<br>";
//     public  function show()
//     {
//         echo $this->name . "<br>";
//     }
// }

// class B extends A 
// {

// }

// $obj = new B();
// echo $obj->name;
// $obj->show();

// Example of protected 


// class A {
//     protected $name ;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }


//     protected function show()
//     {
//         echo $this->name . "<br>";
//     }
// }

// class B extends A 
// {
//    public function get()
//    {
//     echo $this->name . "<br>";
//     echo $this->show();
//    }
// }
// $obj1 = new A("Saleem<br>"); 
// // echo $obj1->name;
// // $obj1->show();
// // $obj = new B("AQeel <br>");
// // echo $obj->name;
// // $obj->show();
// // $obj->get();


class A {
    private $name ;

    public function __construct($n)
    {
       echo $this->name = $n;
    }


    private function show()
    {
        echo $this->name . "<br>";
    }
}

class B extends A 
{
   public function get()
   {
    // echo $this->name . "<br>";
    // echo $this->show();
   }
}
$obj1 = new A("Saleem<br>"); 
// echo $obj1->name;
// $obj1->show();
$obj = new B("AQeel <br>");
// echo $obj->name;
// $obj->show();
$obj->get();

?>