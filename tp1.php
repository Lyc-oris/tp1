<?php


$total =[];
function create($GN , $NSTG ){
    $stg = [];
    $note =[];
    $Stagers=[];
    $GP = [];

for ($i = 0 ; $i< $GN ; $i++)
    {for ($j=0; $j < $NSTG; $j++) { 
    $stg[$j] = " stg  ". $j+1;
    $note[$j] = rand(0,20);
    $Stagers[$i]= $stg;
    $notes[$i]=$note;
}
$GP[$i] = $Stagers[$i] .  $notes[$i];

}
return $GP;
}

$total=create(3,12);

var_dump($total);



?>