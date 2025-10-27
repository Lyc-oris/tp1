<?php

class Voiture
{
    public $marque;
    public $couleur;
    public $vitesse;
    public function __construct($marque,$couleur,$vitesse)
    {
        $this -> marque = $marque;
        $this -> couleur = $couleur;
        $this -> vitesse = $vitesse;
    }
    public function info(){
        echo("marque :" . $this -> marque . "<br>" . "couleur : " . $this -> couleur . "<br>" . "vitesse : " . $this -> vitesse ."<br>");
    }
    function demarrer(){
        echo("La voiture demarre" . "<br>");
    }
    function accelere($plus){
        $this -> vitesse += $plus;
        echo("vitesse : " . $this -> vitesse . "<br>");
    }
}

$voiture1 = new Voiture("honda" , "Red" , "200km/h");
$voiture2 = new Voiture("Toyota" , "Red" , "100km/h");
$voiture3 = new Voiture("BMW" , "Blue" , "300km/h");

$voiture1 -> info();

$voiture1 -> demarrer();

$voiture1 -> accelere(20);

$voiture2 -> info();

$voiture2 -> demarrer();

$voiture2 -> accelere(10);

$voiture3 -> info();

$voiture3 -> demarrer();

$voiture3 -> accelere(30);

?>