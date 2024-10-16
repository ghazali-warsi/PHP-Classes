<?php

// overriding in php 

class parent1 
{
    public $name ;

    public function __construct($n)
    {
      $this->name = $n;

    }

    public function print()
    {
        echo "Parent name is : " . $this->name . "<br>";
    }
} 

class child1 extends parent1
{
    public $name ;

    public function __construct($n)
    {
      $this->name = $n;

    }

    public function print()
    {
        echo "Child name is : " . $this->name . "<br>";
    }
} 

$obj = new child1("Daniyal");
$obj->print();

$obj1 = new parent1("Kaleem");
$obj1->print();
?>