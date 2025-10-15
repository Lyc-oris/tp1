<?php


$students = ["student1", "student2", "student3", "student4", "student5"];


if (is_array($students)) {
    echo ("students is a table <br>");
}

echo (count($students) . "<br>");

if (count($students) >= 3)
    echo ("goupe complet");
else
    echo ("group is not complet");

echo ("<br>");
$vill = "";

echo ("<br>");

if ($vill == null) {
    echo ("la ville is vide");
}

echo ("<br>");
$Email = "akhfamnihaytham@gmail.com";

echo ("<br>");

if ($Email == !null)
    echo ("Email est definie");

else
    echo ("Email manquant");

echo ("<br>");
echo ("<br>");

unset($Email);
if (isset($Email) == !null)
    echo ("Email est definie");


else
    echo ("Email manquant");


echo ("<br>");
echo ("<br>");


$produit = ['nom' => 'chaise', 'prix' => 120, 'stock' => 5];
print_r($produit);
echo ("<br>");
unset($produit['stock']);
echo ("<br>");
print_r($produit);

$dateLivrasion = NULL;
echo ("<br>");
echo ("<br>");

if ($dateLivrasion === NULL) {
    echo ("date non definie");
} else
    echo ("Livration");

echo ("<br>");
echo ("<br>");
$code = "ARCHI-2025-007";

echo (substr($code, -14, 5));
echo ("<br>");
echo ("<br>");

if (substr($code, -14, 5) === "ARCHI") {
    echo ("Project d architecture");
}
echo ("<br>");

const APP_NAME = "MonSite";
const APP_VERSION = "1.0";

echo (APP_NAME);
echo ("<br>");
echo (APP_VERSION);
echo ("<br>");
echo ("<br>");

$i = 5;

echo ($i++);

echo ("<br>");

echo (++$i);

echo ("<br>");

echo ("the different between i++ and ++i is that the i++ changes the value after the secnond usage but ++i change the value in the exact same place");


echo ("<br>");


$compteur = 0;

for ($i = 1; $i <= 5; $i++) {
    echo ($i . "<br>");
}

echo ("<br>");


$val = 10;

while ($val >= 5) {
    echo ($val . "<br>");
    $val--;
}

echo ("<br>");


$age = rand(1, 20);

if ($age < 18) {
    echo ("mineur");
} else {
    echo ("majeur");
}

echo ("<br>");

$note = rand(0, 20);

if ($note < 10) {
    echo ("echec");
} elseif ($note >= 10 and $note <= 12) {
    echo ("Passable");
} elseif ($note >= 13 and $note <= 15) {
    echo ("Bien");
} elseif ($note > 15) {
    echo ("Tres bien");
}

echo("<br>");

$jour = rand(1, 8);

switch ($jour) {
    case $jour == 1:
        echo ($jour. "  =>  " ."lundi");
        break;

    case $jour == 2:
        echo ($jour. "  =>  " ."mardi");
        break;

    case $jour == 3:
        echo ($jour. "  =>  " ."merrcredi");
        break;

    case $jour == 4:
        echo ($jour. "  =>  " ."jeudi");
        break;

    case $jour == 5:
        echo ($jour. "  =>  " ."vendredi");
        break;

    case $jour == 6:
        echo ($jour. "  =>  " ."samedi");
        break;

    case $jour == 7:
        echo ($jour. "  =>  " ."dimanche");
        break;

    case $jour == 8:
        echo ($jour. "  =>  " ."jour inconnu");
        break;
}

echo("<br>");

$a = rand(-10 , 10);
$b = rand(-10 , 10);

if ($a > 0 & $b > 0) {
    echo("Positive");
}
elseif($a > 0 & $b < 0){
    echo("Nombres mixet");
}
elseif ($a < 0 & $b > 0) {
    echo("Nombres mixet");
}
elseif($a < 0 & $b < 0){
    echo("Negative");
}
else
    echo(0);

echo("<br>");


$i = 1;
while ($i <= 10) {
    echo($i++ . "  ");
}
echo("<br>");

$motDePasse = "php2025";
$tentatives = 0 ;
while ($motDePasse == !"php2025") {
    echo("ressayes <br>");
    $tentatives++;
}
echo("mot de passe correct apres". "  " . $tentatives ."  " . "tentatives");

echo("<br>");

for ($i=1; $i <= 20 ; $i++) { 
    $i++ ;
    echo("$i" . "  ");
}

echo("<br>");
$somme = 0;
for ($i=1; $i <= 100 ; $i++) { 
    $somme += $i ;
}
echo("La somme des nombres de 1 a 100 est :  ".$somme);

echo("<br>");

$n = 5;

for ($i=0; $i < 10 ; $i++) { 
    echo( $n. "  x  " . ($i+1). " = " .$n * ($i+1) . "<br>");
}

echo("<br>");

$nombreMystere = 7;

$essai = 1 ;

$nombre = 0;

while ($nombreMystere != $nombre) {
    $nombre = rand(1 , 10);
    echo("ressaye <br>");
    $essai ++;
}
echo("Trouve en " . $essai . "  essais ");

echo("<br>");


for ($i=10; $i >= 0 ; $i--) { 
    echo($i . "  ");
}
echo("<br> Decollage");

echo("<br>");

for ($i=1; $i <= 10 ; $i++) { 
    echo("<span>". $i ."</span> <sup>". 2 ."</sup> =  " . pow($i, 2) . "<br>");
}

for ($i=1; $i <= 10 ; $i++) { 
    if ($i % 2 == 0) {
        echo($i . " est pair <br>");
    }
    else{
        echo($i . " est impair <br>");
    }
}
echo("<br>");

for ($i=1; $i <= 20 ; $i++) { 
    if ($i % 5 == 0) {
        echo($i . " multiple de 5 ! <br>");
    }
    else{
        echo($i . "<br>");
    }
}

$note = [];
for ($i=0; $i < 20; $i++) { 
    $note[$i] = rand(0,20);
}

print_r($note);

echo("<br>");

$succed = [];

$noteMax = $note[0];
$noteMin = $note[0] ;
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i]>=10) {
    $succed[$i] = $note[$i];
    }
}
$fail = [];
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i]<10) {
    $fail[$i] = $note[$i];
    }
}
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i] >= $noteMax) {
        $noteMax = $note[$i];
    }
}
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i] <= $noteMin) {
        $noteMin= $note[$i];
    }
}
$somme = 0;
$moyeen = 0;
for ($i=0; $i <20 ; $i++) { 
    $somme += $note[$i];
}
$moyeen = $somme/20;

$moremoyeen = [];
$lessmoyeen = [];
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i] >= $moyeen) {
        $moremoyeen[$i] = $note[$i];
    }
}
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i] < $moyeen) {
        $lessmoyeen[$i] = $note[$i];
    }
}


echo("les stg ressuie : ". count($succed) . "<br>");
echo("les stg ne pas ressuie : " .count($fail). "<br>");
echo("la premier note est : ".$noteMax . "<br>");
echo("la dernier note est :  ".$noteMin . "<br>");
echo("la moyeen do classe est : " . $moyeen . "<br>");
echo("les stg qui a obetenu un note superieur a la moyenne est  : " . "<br>");
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i] >= $moyeen) {
        $moremoyeen[$i] = $note[$i];
        echo($moremoyeen[$i] . "<br>");
    }
}
echo("les stg qui a obetenu un note inferieur a la moyenne est  : " . "<br>");
for ($i=0; $i < 20 ; $i++) { 
    if ($note[$i] < $moyeen) {
        $lessmoyeen[$i] = $note[$i];
        echo($lessmoyeen[$i] . "<br>");
    }
}

?>