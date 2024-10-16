<?php 

class A {
    function run()
    {
        echo "Lets Run <br>";
    }
}

Class B extends A{
    function walk()
    {
        echo "Lets walk <br>";
    }
}

Class C extends B{
    function sleep()
    {
        echo "Lets sleep <br>";
    }
}

$obj1 = new A();
$obj2 = new B();
$obj3 = new C();
$obj3->sleep();
$obj3->walk();
$obj3->run();

?>