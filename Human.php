<?php

declare(strict_types=1);
class Human
{
    protected $fname;
    protected $age;
    protected $id;

    function __construct(string $fname, int $age, $id)
    {
        $this->fname = $fname;
        $this->age = $age;
        $this->id = $id;
    }
    function fullInfo()
    {
        echo "<b>Full Name : </b>" . $this->fname . "<br>" . "<b>Age : </b>" . $this->age . "<br>" . "<b> Id : </b>" . $this->id . "<br>";
    }
}

class Trainier extends Human
{
    private $specilaity ;
    private $number;


    function __construct(string $fname, int $age , $id,string $specilaity , int $number)
    {
        $this -> specilaity = $specilaity;
        $this -> number = $number;
        parent::__construct($fname , $age , $id);
    }
    
    function fullInfo()
    {
        parent::fullInfo();
        echo "<b>Speciality : </b>" . $this ->specilaity . "<br>" . "<b>Number :  </b> " . $this ->number . "<br><br>";
    }
}

class Trainer extends Human
{
    private $module ;
    private $hours ;


    function __construct(string $fname , int $age , $id , string $module , int $hours)
    {
        $this -> module = $module;
        $this -> hours = $hours;
        parent::__construct($fname , $age , $id);
    }

    function fullInfo()
    {
        parent::fullInfo();
        echo "<b>Module : </b>". $this -> module . "<br>" . "<b>Hours : </b>" . $this -> hours . "<br><br>";
    }
}

$h1 = new Trainier("haytham akhfamni" , 23 , "AE3243" , "Mobile Devolepper " , 1);
$h1 ->fullInfo();
$h2 = new Trainer("prof ahmed" , 38 , "ffs4243" , "culter numiric" , 20);
$h2 ->fullInfo();


?>

