<?php

$a = [];
for ($z=0; $z < 50 ; $z++) { 
    $i+=1;
    $a[] = $i;
//   array_push($a , $i) ;
  
}
// $arrlength =count([$a]);
// for ($i = 0; $i <$arrlength; $i++){
//     echo $a[$i];
//     echo "<br>";
// }

$tab = array('Tableau' => $a);

var_dump($tab);


$aleatoire = array_rand($tab["Tableau"], 5);
var_dump ($aleatoire);









?>