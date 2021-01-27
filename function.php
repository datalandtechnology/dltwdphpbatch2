<?php
// Function 

// function functinname(){
// }


//Simple Function ( re_usable )

function myfun(){
    echo "hello my name is myfun" . "<br/>";
}


myfun();

function hellocal(){
    $num1 = 100;
    $num2 = 20;
    $result = $num1 + $num2;
    echo $result . "<br/>";
}


// recall


hellocal();


echo "<hr/>";

// Parameter Function
// - single parameter function
// - multi parameter function

$name = "zaw zaw";

function singlefun($x){
    echo "My name is ". $x;
}

// singlefun("aung aung");



singlefun($name);

?>

