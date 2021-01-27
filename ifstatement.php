<?php
// IF statement

$a = 100;
$b = 20;

if($a < $b){
    echo "Condition is True";
    echo "<br/>";
    echo "i am OK";
}else{
    echo "Condition is False";
    echo "<br/>";
    echo "i am  NOT OK";
}

echo "<hr/>";

$x=30;
$y=50;

// IF statement (Short Hand) (just for single statement )

if($x == $y)
    echo "it's equal value";
else
    echo "it's not equal value";


    echo "<hr/>";


$val = "red";
$bal = $val;

$favcolor = "red";


// if($bal == "red"){
//     echo "Yes you correct , my fav color is red";
// }else{
//     echo "No you were wrong";
// }


// if($bal == $favcolor){
//     echo "Yes you correct , my fav color is ${favcolor}";
// }else{
//     echo "No you were wrong , i don't like ${bal}";
// }


// elseif

if($val == $favcolor  ){
    echo "Yes my fav color is ${favcolor}";
}elseif($val == "green"){
    echo "No you were wrong , but i like green a bit";
}elseif($val == "black"){
    echo "No you were wrong , this time is totally wrong , i hate ${val}";
}else{
    echo "No you were wrong , i don't like ${val}";
}

echo "<hr/>";


 
// LOGICAL OPERATOR ( 3 type )
// AND = &&
// OR = ||
// NOT = !

$username = "maungmaung";
$password = "123";


// if($username == "aungaung" && $password == "123456"){
//     echo "Successful Login";
// }else{
//     echo "User Name and Password do not match, Try Again ";
// }

if($username == "aungaung" || $password == "123456"){
    echo "Successful Login";
}else{
    echo "User Name and Password do not match, Try Again ";
}

echo "<hr/>";




$num1 = 40;
$num2 = 20;
$num3 = 0;

// if($num1 > $num2 && $num1 > $num3){
//     echo "it is true";
// }else{
//     echo "it is false";
// }


if($num1 < $num2 || $num1 > $num3){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<hr/>";

if(!($num1 < $num3)){
    echo "it is true";
}else{
    echo "it is fale";
}

?>