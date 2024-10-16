<?php 

interface parent_1 
{
    // public $name  = "Some name";  // in interface we may not define a property 
    // public , protected , private // can not use access modifiers in interface

    function walk(); // declare a function we may not define or implement a function in interface
}

interface parent_2 
{
    function run();

}

// $test = new parent_1();
// $test2 = new parent_2();

// class child implements parent_1 , parent_2
// {
//     public function walk()
//     {
//    echo "We can walk together at park in night<br>";
//     }

//     public function run()
//     {
//         echo "We can run together at park in morning<br>";
//     }
// }

// $test = new child();
// $test->run();
// $test->walk();


// interface parent_3
// {
//     function oldCar();
// }

// class grandChild_1 implements parent_3
// {
//    public function oldCar()
//    {
//     echo "This is Corolla Of 1976 Model Which is own by my GrandParent <br>";
//    }
// }

// class grandChild_2 implements parent_3
// {
//    public function oldCar()
//    {
//     echo "This is CIVIC Of 2005 Model Which is own by my GrandParent<br>";
//    }
// }

// $test3 = new grandChild_1();
// $test3->oldCar();
// $test2 = new grandChild_2();
// $test2->oldCar();

// interface register 
// {
//     function name();
//     function email();
//     function password();
//     function confirm_Password();
//     function age();
//     function address();
//     function number();
// }


// class admin implements register{};
// class hr implements register{};
// class employee implements register {};
// class managers implements register{};







?>