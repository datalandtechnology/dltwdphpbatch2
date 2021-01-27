<?php
// Array

// Manual Array
// Associative Array
// Muti Dimational Array


// Manual Array (index, value)
$name = array("aung aung","maung maung","mya may","su su");
$color = ["orange","250","blue",150,"black"];

var_dump($name);

echo "<hr/>";

echo count($color);

echo "<hr/>";

echo "<pre>".print_r($name,"a")."</pre>";


echo "<hr/>";

$students = array(); //manual array index value
$students[0] = "aung aung";
$students[1] = "maung maung";
$students[2] = "su su";

// var_dump($students);

echo $students[1];

// index key ( start 0)

echo "<hr/>";

// Associative Array (index,key,value)


$val1 = array("one"=>"this is post one",
            "two"=>"this is post two",
            "three"=>"this is post three",
            "four"=>"this is post four"
                );

$val2 = ["name"=>"aung aung",
        "age"=>"26",
        "phone"=>"09123456",
        "address"=>"mandalay"];


        // var_dump($val2);

        echo $val1["three"];

        echo "<br/>";

        echo $val2["name"];

echo "<hr/>";

// Multidimational Array (index,value) (index,key,value)

$val3 = array(
    array("name"=>"aung aung","age"=>"20"),
    array("name"=>"maung maung","age"=>"21"),
    array("name"=>"zaw zaw","age"=>"22"),
    array("name"=>"su su","age"=>"23"),
    array("name"=>"mya mya","age"=>"24")
);

$val4 = [
    ["name"=>"aung aung","age"=>"20"],
    ["name"=>"maung maung","age"=>"21"],
    ["name"=>"zaw zaw","age"=>"22"],
    ["name"=>"su su","age"=>"23"],
    ["name"=>"mya mya","age"=>"24"],
];



var_dump($val3);

echo "<br/>";

echo $val4[2]["name"];

echo "<br/>";

$val5 = array(
    array("red","green","blue","white","black"),
    array("maung maung","aung aung","zaw zaw","kyaw kyaw","mya mya"),
    array("apple","orange","mango","peach","grave"),
);

echo $val5[2][4];


echo "<hr/>";

// Foreach Looping

// foreach(a,b,c as $b){
//     echo result;
// }

//Manual Array
$name = array("aung aung","maung maung","mya may","su su");

echo "manual array";

foreach($name as $a){
    echo "my name is ${a}" . "<br/>";
}

echo "<hr/>";

// Associative Array
$val2 = ["name"=>"aung aung",
        "age"=>"26",
        "phone"=>"09123456",
        "address"=>"mandalay"];

        foreach($val2 as $key=>$b){
            echo "key is ${key} value is $b". "<br/>";
        }

        echo "<hr/>";



        $val3 = array(
            array("name"=>"aung aung","age"=>"20"),
            array("name"=>"maung maung","age"=>"21"),
            array("name"=>"zaw zaw","age"=>"22"),
            array("name"=>"su su","age"=>"23"),
            array("name"=>"mya mya","age"=>"24")
        );


        foreach($val3 as $j){
            // var_dump($j);
            foreach($j as $key=>$k){
                echo "key is ${key} value is ${k}". "<br/>";
            }

        }







?>