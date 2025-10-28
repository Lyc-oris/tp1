<?php

class Stagiaire
{
    private $lastName , $firstName , $note = [];

    function __construct($a, $b , $c)
    {
        $this -> lastName = $a;
        $this -> firstName = $b;
        $this -> note = $c;
    }
    private function calculerMoyenne($c){
        $total = 0 ;
        for ($i=0; $i < count($c); $i++) { 
            $total += $c[$i];
        }
        return $moyenne = $total/count($c);
    }
    function setNotes($note){
        $this -> note = $note;
    }
    function estReussi($note1){
        if ($note1 >= 10) {
            return "true";
        }
    }
    function afficherInfos(){
            echo $this ->lastName . " " . $this -> firstName . " " ;
            echo " moyeen :  ". $this->calculerMoyenne($this -> note).  "<br>";
            if ($this->estReussi($this->calculerMoyenne($this -> note)) == "true"){
                echo "<br>Reussi <br>";
            }
            else
                echo "<br>Echoue <br>";
        }
    function __destruct()
    {
        echo "la fin de test";
    }
}


$clas = new Stagiaire("makhlofi", "mohamed", [1,15,17]) ;

$clas -> afficherInfos();
?>