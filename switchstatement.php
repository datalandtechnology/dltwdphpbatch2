<?php

// Switch Statement
// switch(condition){
//     case 1:
//         statement;
//         break;
//     case 2:
//         statement;
//         break;
//     case 3;
//         statement;
//         break;
//     default:
//         statement;
// }



$val = "blue";
$favcolor = "blue";

// switch($val){
//     case $favcolor:
//         echo "Yes , my fav color is ${val}";
//         break;
//     default:
//         echo "You were wrong, i don't like ${val}";
// }

switch($val){
    case $favcolor:
        echo "Yes , my fav color is ${favcolor}" . "<br>";
            break;
        case "green":
            echo "No you were wrong . but i like ${val} a bit" . "<br>";
            break;
        case "black":
            echo "You totally worng. i hate ${val} color" . "<br>";
            break;
        default:
            echo "You were wrong";
    
}


echo "<hr/>";

$val = "mm";

switch($val){
    case "mm":
        echo "Your location is Myanmar";
        break;
        case "th":
            echo "Your location is Thailand";
            break;
            case "indo";
            echo "Your location is Indonesia";
            break;
            case "slk":
            echo "Your location is Srilanka";
            break;
            default:
            echo "Sorry we don't have service in here";

}





?>