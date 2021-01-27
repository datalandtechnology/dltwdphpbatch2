<?php
// Statement Function (Default Function)


$val1 = "Aung Aung";

// var_dump($val1);
if(is_string($val1)){
    echo "Your variable is String" . "<br/>";
}else{
    echo "Your variable is not String" . "<br/>";
}


$val2 =250;

// var_dump($val2);

if(is_numeric($val2)){
    echo "Your variable is Numeric" . "<br/>";
}else{
    echo "Your variable is not Numeric" . "<br/>";
}


$val3 = 20.5;

// var_dump($val3);

if(is_float($val3)){
    echo "Your variable is Float" . "<br/>";
}else{
    echo "Your variable is not Float" . "<br/>";
}


$val4 = true;

// var_dump($val4);

if(is_bool($val4)){
    echo "Your variable is Boolean" . "<br/>";
}else{
    echo "Your variable is not Boolean" . "<br/>";
}

$val5 = ["aung aung","maung maung"];

// var_dump($val5);

if(is_array($val5)){
    echo "Your variable is Array" . "<br/>";
}else{
    echo "Your variable is not Array" . "<br/>";
}


$val6 = [];

// var_dump($val5);

if(empty($val6)){
    echo "Your variable is Empty" . "<br/>";
}else{
    echo "Your variable is not Empty" . "<br/>";
}



$val7 = 250;

// var_dump($val7);

if(is_int($val7)){
    echo "Your variable is Integer" . "<br/>";
}else{
    echo "Your variable is not Integer" . "<br/>";
}



$val8 = NULL;

// var_dump($val8);

if(is_null($val8)){
    echo "Your variable is NUll" . "<br/>";
}else{
    echo "Your variable is not Null" . "<br/>";
}


?>