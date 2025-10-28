<?php
declare(strict_types=1);
class Voiture
{
    public $marque;
    public $couleur;
    public $vitesse;
    public function __construct($marque, $couleur, $vitesse)
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }
    public function info()
    {
        echo ("marque :" . $this->marque . "<br>" . "couleur : " . $this->couleur . "<br>" . "vitesse : " . $this->vitesse . "<br>");
    }
    function demarrer()
    {
        echo ("La voiture demarre" . "<br>");
    }
    function accelere($plus)
    {
        $this->vitesse = $this->vitesse + $plus;
        echo ("New vitesse : " . $this->vitesse . "<br>");
    }
}

$voiture1 = new Voiture("honda", "Red", 200);
$voiture2 = new Voiture("Toyota", "Red", 200);
$voiture3 = new Voiture("BMW", "Blue", 200);

$voiture1->info();
echo ("<br>");
$voiture1->demarrer();
echo ("<br>");
$voiture1->accelere(20);
echo ("<br>");
$voiture2->info();
echo ("<br>");
$voiture2->demarrer();
echo ("<br>");
$voiture2->accelere(10);
echo ("<br>");
$voiture3->info();
echo ("<br>");
$voiture3->demarrer();
echo ("<br>");
$voiture3->accelere(-30);




?>