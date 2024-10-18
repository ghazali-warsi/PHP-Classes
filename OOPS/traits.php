<?php

// some common function i want to use in A ,B ,C Classes
// class A , Class B , Class C 

trait userInfo 
{
    public $name = "Ebad Bangali";
    public $address = "Bangali Colony";
    public $age = 18;
    public $job = "Machine Operator";

    public function show()
    {
        echo "name is  : " . $this->name . "<br>" . "address is  : " . $this->address . "<br>" . 
        "age is  : " . $this->age . "<br>". "job is  : " . $this->job . "<br><hr>";
    }
}

class A 
{
use userInfo ;
}

$obj = new A();
$obj->show();


Class B 
{
    use userInfo ;
}

$obj1 = new B();
$obj1->show();

Class C 
{
    use userInfo ;
}

$obj2 = new C();
$obj2->show();

?>