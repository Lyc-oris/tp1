<?php

class Compte
{
    private $titulaire , $numeroCompte , $sold;

    function __construct($a , $b , $c)
    {
        $this -> titulaire = $a;
        $this -> numeroCompte = $b; 
        $c > 0 ? $this -> sold = $c : 0.00;
    }
    function setSold($c){
        $this -> sold = $c;
    }
    function setNumeroCompte($b){
        $this -> numeroCompte = $b;
    }
    function setTitulaire($a){
        $this -> titulaire = $a;
    }
    function getSold(){
        return $this -> sold ;
    }
    function getNumeroCompte(){
        return $this -> numeroCompte ;
    }
    function getTitulaire(){
        return $this -> titulaire ;
    }


    function deposer($c){
        if ($c > 0){
            $this -> sold += $c;
        }
        else
            echo "not valid";
    }
    function retirer($c){
        if ($this -> sold >= $c){
            $this -> sold -= $c;
        }
        else
            echo("refuse <br>");
    }
    function afficherSolde(){
        echo $this -> sold ;
    }

    private function validerMontant(){
        if ($this -> sold < 0) {
            $this -> sold = 0.00;
        }
    }
    

    function __destruct()
    {
        unset($sold,$titulaire,$numeroCompte);
        echo("<br>le compte est ferme");
    }

}


$compte1 = new Compte("Karim", "MA1234" , 500);
$compte2 = new Compte("Salma", "MA5678" , 0);

$compte1 -> deposer(250);
$compte1 -> retirer(900);
$compte1 -> retirer(300);

$compte2 -> deposer(1000);
$compte2 -> retirer(200);


$compte1 -> afficherSolde();
echo "<br>";
$compte2 -> afficherSolde()

?>