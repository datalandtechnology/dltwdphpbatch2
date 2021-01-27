<?php
// Manual Array

$name = array("aung aung","maung maung","mya may","su su");

var_dump($name);

echo "<br/>";

$key = array_keys($name);
var_dump($key);

echo "<br/>";
// echo $name[2];

for($i=0 ; $i < count($name) ; $i++ ){
    // echo $i . "<br/>";
    echo "this is manual array by forloop = index is ". $key[$i] ." value is ". $name[$i] . "<br/>";
}

echo "<hr/>";


$name = array("aung aung","maung maung","mya may","su su");
$x = 0;
$key = array_keys($name);

while($x < count($name)){
    echo "this is manual array by whileloop = index is ". $key[$x] ." value is ". $name[$x] . "<br/>";
    $x++;
}

echo "<hr/>";

$name = array("aung aung","maung maung","mya may","su su");
$y = 0;
$key = array_keys($name);

do{
    echo "this is manual array by dowhileloop = index is ". $key[$y] ." value is ". $name[$y] . "<br/>";
    $y++;
}while($y < count($name));

echo "<hr/>";



// Associative Array (index,key,value)


$val1 = array("one"=>"this is post one",
            "two"=>"this is post two",
            "three"=>"this is post three",
            "four"=>"this is post four"
                );

var_dump($val1);
echo "<br/>";

$key = array_keys($val1);
var_dump($key);
echo "<br/>";

for($i=0; $i< count($val1) ; $i++){
    // echo $key[$i]. "<br/>";
    echo "this is assoc array by forloop = key is ".$key[$i]. " value is ".$val1[$key[$i]]. "<br/>";
}

echo "<hr/>";

$val1 = array("one"=>"this is post one",
            "two"=>"this is post two",
            "three"=>"this is post three",
            "four"=>"this is post four"
                );
$x = 0;
$key = array_keys($val1);

while($x < count($val1)){
    echo "this is assoc array by whileloop = key is ".$key[$x]. " value is ".$val1[$key[$x]]. "<br/>";
    $x++;
}

echo "<hr/>";

$val1 = array("one"=>"this is post one",
            "two"=>"this is post two",
            "three"=>"this is post three",
            "four"=>"this is post four"
                );
$y = 0;
$key = array_keys($val1);

do{
    echo "this is assoc array by dowhileloop = key is ".$key[$y]. " value is ".$val1[$key[$y]]. "<br/>";
    $y++;
}while($y < count($val1));

echo "<hr/>";

// Multidimational Array (index,value) (index,key,value)

$val3 = array(
    array("name"=>"aung aung","age"=>"20"),
    array("name"=>"maung maung","age"=>"21"),
    array("name"=>"zaw zaw","age"=>"22"),
    array("name"=>"su su","age"=>"23"),
    array("name"=>"mya mya","age"=>"24")
);

// var_dump($val3);
echo "<br/>";
$key = array_keys($val3);
// var_dump($key);
echo "<br/>";
// $arrcount = count($val3);
// echo $arrcount;

for($i=0 ; $i < count($val3);$i++){

    // echo $i . "<br/>";

    // echo $key[$i]. "<br/>";

    $newkey = array_keys($val3[$key[$i]]);

    // var_dump($newkey). "<br/>";

    for($j=0 ; $j < count($newkey); $j++){
        echo "this is multi array by forloop = key is ". $newkey[$j]. " value is ". $val3[$i][$newkey[$j]] . "<br/>"; 
    }


}

echo "<hr/>";

$val3 = array(
    array("name"=>"aung aung","age"=>"20"),
    array("name"=>"maung maung","age"=>"21"),
    array("name"=>"zaw zaw","age"=>"22"),
    array("name"=>"su su","age"=>"23"),
    array("name"=>"mya mya","age"=>"24")
);

$x = 0;
$key = array_keys($val3);

while($x < count($val3)){

    $newkey = array_keys($val3[$key[$x]]);

    $y = 0;

    while($y < count($newkey)){
        echo "this is multi array by whileloop = key is ". $newkey[$y]. " value is ". $val3[$x][$newkey[$y]]  . "<br/>";
        $y++;
    }

    

    $x++;

}

echo "<hr/>";


$val3 = array(
    array("name"=>"aung aung","age"=>"20"),
    array("name"=>"maung maung","age"=>"21"),
    array("name"=>"zaw zaw","age"=>"22"),
    array("name"=>"su su","age"=>"23"),
    array("name"=>"mya mya","age"=>"24")
);

$j = 0;
$key = array_keys($val3);

do{

    $newkey = array_keys($val3[$key[$j]]);

    $k = 0;

    do{
        echo "this is multi array by dowhileloop = key is ". $newkey[$k]. " value is ". $val3[$j][$newkey[$k]]  . "<br/>";
        $k++;
    }while($k < count($newkey));

    

    $j++;

}while($j < count($val3));
?>

