<?php
// Types Of Function 

// Basic Function or Non Prameterized Function 

function add()
{
    echo "Basic Function" . "<br>";
}

// add();

//Parameterized Function

// function sum($num1 , $num2)  // define
function sum($num1 = 90 , $num2 = 100)  // default parameter
{

echo $result =  $num1 + $num2 ."<br>"; //550

}

//  sum(250,300); // call or declare

// Return function 

function sub($num1 , $num2)
{
    $result = $num1 - $num2 . "<br>";  // 15
    return $result;
}

// echo sub(40,25);
// variable Function
//Anonymous Function
$name = function($first , $email){

    echo $first ."<br>". $email . "<br>";

};
// $name("Faiz" , "Faiz@gmail.com,");
// $name("ALi", "Ali@gmail.com");

// recursive function   

function recur($number)
{
   if($number <= 20)
   {
    echo $number . "<br>";
    return recur($number + 1);
   }
}

// echo recur(5);

// Factorial Number 

// F(5) = 5*4*3*2*1 = 120
// F(6)= 6*5*4*3*2*1 
// Formula of Factorial Number 
// F(n) = n*F(n-1);

function facto($n)
{
if($n == 0)
{
    return 1;
}else
{
    return ($n *facto($n-1));
}
}

// echo facto(5);
// echo facto(6);
// echo facto(7);

// 4
// 3
// 2
// 1
// if 1
// 0


// Goto Statement 

echo "this is number 1 <br> ";
echo "this is number 2 <br>";
goto jump;
echo "this is number 3 <br>";
echo "this is number 4 <br>";
echo "this is number 5 <br>";
echo "this is number 6 <br>";
echo "this is number 7 <br>";
jump:
echo "this is number 8 <br>";

for($x = 1 ; $x<=10; $x++)
{
    if($x == 3 OR $x ==6 OR $x ==9)
    // if($x == 3 AND $x ==6 AND $x ==9)
    {
        // break;
        continue;
    }

    echo ($x."<br>");
}

?>