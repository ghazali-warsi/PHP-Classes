<?php

//  classes
//  Student information (name , id , age , address , fathername) no permission to create object 
//  fees ('Fees' , 'month' , 'type')
//  momthly_report ('report' , 'behaviour')

abstract class A 
{
    protected $name = "manzar";
     abstract protected function display();  // declare or call 
      
}

// $obj = new A();

class B extends A{
    public function display() // implement
    {
       echo $this->name;
    }
}

$obj = new B("");
$obj->display();


// basic php 

// define or implement a function 

// function name ()
// {
//     echo "my name is khan";
// }

// name(); // decalre or call of a function

?>