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
    echo("date non definie");
}
else
    echo("Livration");

echo ("<br>");
echo ("<br>");
$code = "ARCHI-2025-007";

echo(substr($code , -14 , 5));
echo ("<br>");
echo ("<br>");

if (substr($code , -14 , 5) === "ARCHI") {
    echo("Project d architecture");
}

const APP_NAME = "MonSite";
const APP_VERSION = "1.0";

constant(APP_NAME);

constant(APP_VERSION)

?>