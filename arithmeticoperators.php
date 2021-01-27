<?php
// Arithmetic Operators
// + - * / % ( ++ increment and decrement operators -- ) 7 types

$num1= "1000";
$num2 = "20";

echo "$num1+$num2"; // result going to string 1000+20
echo "<br/>";
var_dump("$num1+$num2");
echo "<br/>";
echo $num1-$num2;
echo "<br/>";
echo $num1*$num2;
echo "<br/>";
echo $num1/$num2;
echo "<br/>";
echo $num1%$num2;
echo "<hr/>";

//Increment and Decrement Operator ( ++ -- )

$i = 10;
echo $i . "<br/>";


// $i = $i+1;
// echo $i;

$i += 50; // Assignment Operators 
echo $i . "<br/>";

$i++;

echo $i ."<br/>";
echo $i++ ."<br/>";

$y = 10;
echo $y . "<br/>";

// $y = $y - 1;
// echo $y;


$y -= 5; // Assignment Operators
echo $y;

// $y--;
// echo $y--;


?>