<?php

//using echo
echo ("my name is haytham i'am 23 i live in sale ");
echo "<br>";
//using print 
print("je commence a apprendre php");
echo "<br>";


$name = "haytham";
$age = 23;
$taille = 80;

echo ("name : {$name} type : " . gettype($name));
echo "<br>";
echo ("age : {$age} type : " . gettype($age));
echo "<br>";
echo ("name : {$taille} type : " . gettype($taille));
echo "<br>";

$number = 23.334;

echo "<br>";

echo ("number type before changing :  " . gettype($number) . "   " . $number);

settype($number, "int");

echo "<br>";

echo ("number type after changing :  " . gettype($number) . "  " . $number);

echo "<br>";

const SCHOOLE =  "ids";

echo SCHOOLE;

echo "<br>";

echo (__FILE__);

echo "<br>";

echo (__DIR__);

echo "<br>";

echo (__LINE__);

echo "<br>";

$a = rand(1, 6);
$b = rand(1, 6);

echo  "a =  " . $a  . " <br> ", " b = " .  $b . "<br>";

echo  "{$a} + {$b} = " . $a + $b . "<br>";
echo  "{$a} - {$b} = " . $a - $b . "<br>";
echo  "{$a} x {$b} = " . $a * $b . "<br>";
echo  "{$a} / {$b} = " . $a / $b . "<br>";
echo  "{$a} % {$b} = " . $a % $b . "<br>";

if ($a > $b) {
    echo $a . " est plus grand";
} elseif ($a < $b) {
    echo $b . " est plus grand";
} else
    echo "les deux sont egaux";


echo "<br>";

$day = "Monday";

switch ($day) {
    case 'Monday':
        echo "today is Monday <br>";
        break;
    case 'Tuesday':
        echo "today is Tuesday <br>";
        break;
    case 'Wednesday':
        echo "today is Wednesday <br>";
        break;
    case 'Thursday':
        echo "today is Thursday <br>";
        break;
    case 'Friday':
        echo "today is Friday <br>";
        break;
    case 'Saturday':
        echo "today is Saturday <br>";
        break;
    case 'Sunday':
        echo "today is Sunday <br>";
        break;

    default:
        echo "that's not a day";
        break;
}

echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo $i + 1 . " <br> ";
}
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo $i . " <br> ";
    $i++;
}
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
    $i++;
    if ($i == 8) {
        break;
    }
}

echo "<br>";
$i = 0;
while ($i < 10) {
    echo $i + 1 . " <br> ";
    $i++;
}
echo "<br>";
$i = 0;
while ($i < 10) {
    echo $i . " <br> ";
    $i += 2;
}
echo "<br>";
$i = 0;
while ($i < 10) {
    echo $i . " <br> ";
    $i += 2;
    if ($i == 10) {
        break;
    }
}


echo "<br>";
$i = 0;
do {
    echo $i + 1 . " <br> ";
    $i++;
} while ($i < 10);
echo "<br>";
$i = 0;
do {
    echo $i . " <br> ";
    $i += 2;
} while ($i < 10);
echo "<br>";
$i = 0;
do {
    echo $i . " <br> ";
    $i += 2;
    if ($i == 10) {
        break;
    }
} while ($i < 10);

echo "<br>";

function hello($name)
{
    echo "hello {$name}";
}

hello("haytham");

echo "<br>";

function plus($a, $b)
{
    return $a + $b;
}

echo plus(4, 5);

echo "<br>";

function pair($number)
{
    if (($number % 2) == 0) {
        return "true";
    } else {
        return "false";
    }
}

echo pair(5);

echo "<br>";
echo "<br>";

$table = ["moahmed", "ahmed", "khalid", "haytham", "rachid"];

for ($i = 0; $i < count($table); $i++) {
    echo $table[$i] . "<br>";
}

echo "<br>";

array_push($table, "salman");

for ($i = 0; $i < count($table); $i++) {
    echo $table[$i] . "<br>";
}
echo "<br>";

array_pop($table);

for ($i = 0; $i < count($table); $i++) {
    echo $table[$i] . "<br>";
}

echo "<br>";

$table = ["name" => "mohamed", "age" => 23, "subject" => "dev mobile", "note" => 15];

foreach ($table as $key => $value) {
    echo "key is : {$key} and value is : {$value} <br>";
}
$table["note"] = 16;
echo "<br>";
echo "after the change <br>";
foreach ($table as $key => $value) {
    echo "key is : {$key} and value is : {$value} <br>";
}

$table["city"] = "sale";
echo "<br>";
echo "after adding the city <br>";
foreach ($table as $key => $value) {
    echo "key is : {$key} and value is : {$value} <br>";
}
echo "<br>";
$table = [12, 4, 8, 15, 1];
echo "sort ascending <br>";
sort($table) ;

print_r($table);
echo "<br>";

rsort($table);
print_r($table);

echo "<br>";
echo count($table);
echo "<br>";


$table = [12, 4, 8, 15, 1];
for ($i=0; $i < count($table); $i++) { 
    echo "{$i} is the key and {$table[$i]} is the value <br>";
}

function calculator($a , $b , $op){
    if ($op == "+")
    echo "$a + $b = ". $a + $b ;
    elseif($op == "-")
        echo "$a - $b = ". $a - $b ;
    elseif($op == "*")
        echo "$a * $b = ". $a * $b ;
    elseif($op == "/")
        echo "$a / $b = ". $a / $b ;
    elseif($op == "%")
        echo "$a % $b = ". $a % $b ;
    else
        echo "that's not a valid op";
}

calculator(4, 5 , "+");
echo "<br>";


$students = ["mohamed"=>17,"ahmed"=>14,"khalid"=>12];
$total = 0;
foreach ($students as $key => $value) {
    $total += $value;
}
$average = $total / count($students);

echo "average note is {$average}";
echo "<br>";


function mention($note){
    if ($note < 10) {
        echo "Failure";
    }
    elseif($note > 10 & $note <= 14 )
        echo "Passable";
    elseif($note >15 & $note <= 17)
        echo "GOOD";
    elseif($note > 17 & $note <= 20)
        echo "amazing";
    else
        echo "that's not a valide note";
}
foreach ($students as $key => $value) {
    echo "name : {$key} <br> mention :";
    echo  mention($value) . "<br>";
}



?>