<?php
// Comparison Operators ( type  7)
// ==(value / not check date type) ===( both check value / data type ) != > < >= <=



// Ternary Operator ( Statement )
// (statemnt) ? true : false;


$i = 50;
$y = 100;

echo ($i > $y) ? " yes it is true " : "no it is false";
echo "<br/>";

echo ($i < $y) ? "yes it is true " : "no it is false";
echo "<br/>";

echo ($i != $y) ? "yes it is not equal " : "no it is equal";
echo "<br/>";

$a = 400;
$b = 400;

echo ($a >= $b) ? "yes it is true" : "no it is false";
echo "<br/>";
echo ($a <= $b) ? "yes it is true" : "no it is false";
echo "<br/>";

$j = "30";
$k = 30;

echo ($j == $k) ? "yes it is true" : "no it is false";
echo "<br/>";


$m = 50;
$n = "50";
echo ($m === $n) ? "yes it is true" : "no it is false";

?>

