<?php

declare(strict_types=1);
class Employe
{
    protected $lname;
    protected $fname;
    protected $baseSalaire;

    function __construct(string $lname, string $fname, float $baseSalaire)
    {
        $this->lname = $lname;
        $this->fname = $fname;
        $this->baseSalaire = $baseSalaire;
    }
    function calculerSalaire()
    {
        return $this->baseSalaire;
    }
    function afficherInfos()
    {
        echo "<b>First Name : </b> " . $this->fname . "<br>" . "<b> Last Name : </b>" . $this->lname . "<br>" . "<b>Base Salaire : </b>" . $this->baseSalaire . "MAD<br><br>";
    }
}


class Manager extends Employe
{
    private $prime ;

    function __construct(string $lname ,string $fname ,float $baseSalaire , float $prime)
    {
        $this -> prime = $prime;
        parent::__construct($lname , $fname , $baseSalaire) ;
    }
    function calculerSalaire(){
        $this ->baseSalaire = parent::calculerSalaire();
        $this ->baseSalaire += $this ->prime ;
    }
}
class Technicien extends Employe
{
    private $heuresSup ;
    function __construct(string $lname ,string $fname , float $baseSalaire , int $heuresSup)
    {
        $this -> heuresSup = $heuresSup;
        parent::__construct($lname , $fname , $baseSalaire);
    }
    function calculerSalaire()
    {
        $this -> baseSalaire = parent::calculerSalaire();
        $this -> baseSalaire += ($this -> heuresSup * 30);
    }
}

$m = new Manager("akhfamni" ,"haytham" , 10000 , 500);

$m ->afficherInfos();
$m -> calculerSalaire();
$m ->afficherInfos();

$t = new Technicien("akhfamni" , "haytham " , 5000.500 , 20);

$t -> afficherInfos();
$t -> calculerSalaire();
$t -> afficherInfos();