<?php

//using echo
echo("my name is haytham i'am 23 i live in sale ");
echo "<br>";
//using print 
print("je commence a apprendre php");
echo "<br>";


$name = "haytham";
$age = 23;
$taille = 80;

echo("name : {$name} type : " .gettype($name));
echo "<br>";
echo("age : {$age} type : " .gettype($age));
echo "<br>";
echo("name : {$taille} type : " .gettype($taille));
echo "<br>";

$number = 23.334 ;

echo "<br>";

echo ( "number type before changing :  " .gettype($number) . "   " . $number);

settype($number ,"int");

echo "<br>";

echo("number type after changing :  ". gettype($number) . "  " . $number);

echo "<br>";

const SCHOOLE =  "ids";

echo SCHOOLE;

echo "<br>";

echo(__FILE__);

echo "<br>";

echo(__DIR__);

echo "<br>";

echo(__LINE__);

echo "<br>";

$a = rand(1,6);
$b = rand(1,6);

echo  "a =  " . $a  . " <br> " , " b = " .  $b . "<br>";

echo  "{$a} + {$b} = " . $a + $b . "<br>";
echo  "{$a} - {$b} = " . $a - $b . "<br>";
echo  "{$a} x {$b} = " . $a * $b . "<br>";
echo  "{$a} / {$b} = " . $a / $b . "<br>";
echo  "{$a} % {$b} = " . $a % $b . "<br>";

if ($a > $b) {
    echo $a . " est plus grand";
}
elseif($a < $b){
    echo $b . " est plus grand";
}
else
    echo "les deux sont egaux";

$day = "Monday" ;

switch ($variable) {
    case 'Monday':
        echo "today is Monday <br>";
        break;
    case 'Tuesday':
        # code...
        break;
    case 'Wednesday':
        # code...
        break;
    case 'Thursday':
        # code...
        break;
    case 'Friday':
        # code...
        break;
    case 'Saturday':
        # code...
        break;
    case 'Sunday':
        # code...
        break;
    
    default:
        echo"that's not a day";
        break;
}

monday, , , , , , and 
?>