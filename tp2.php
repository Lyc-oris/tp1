<?php

$NSTG = rand(1,10);
function creat_stg($NSTG){
    $stg =[];
    for ($i=0; $i <$NSTG ; $i++) { 
        $stg[$i]= " stg " . $i+1;
    }
return $stg;
}
$GN = rand(1,5);
for ($i=0; $i <$GN; $i++) { 
    $stg[$i] = creat_stg($NSTG);
}

function creat_nts($NSTG){
    $note = [];
    for ($i=0; $i <$NSTG; $i++) { 
        $note[$i] = rand(0,20);
    }
    return $note;
}
for ($i=0; $i <$GN; $i++) { 
    $note[$i] = creat_nts($NSTG);
    
}
print_r($stg);
print_r($note);
$group = [];
for ($i=0; $i <$GN ; $i++) { 
    for ($j=0; $j <$NSTG ; $j++) { 
    $group[$stg[$i][$j]] =  $note[$i][$j];
    }
}
var_dump($group)


?>