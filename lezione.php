<?php
function media($array){
    $somma = 0;
    $contatore =0;
    foreach($array as $numero){
        if($numero%2==0){
            $somma += $numero;
            $contatore ++;
        }
    }
    return $somma/$contatore;
}

$caso1 = media([5, 6, 2, 10]);
$caso2 = media([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

echo $caso1."\n";
echo $caso2."\n";