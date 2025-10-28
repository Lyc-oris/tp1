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
            echo "true";
        }
    }
    function afficherInfos(){
            echo $this ->lastName . " " . $this -> firstName . " " ;
            echo " note :  ".  "<br>";
            if ($this->calculerMoyenne($this -> note) == "true"){
                echo "Reussi";
            }
            else
                echo "Echoue";
        }
    function __destruct()
    {
        echo "la fin de est";
    }
}


$clas = new Stagiaire(makhlofi mohamed) ; 
?>