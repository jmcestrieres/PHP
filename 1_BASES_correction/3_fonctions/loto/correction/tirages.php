<?php
//les variables et constantes

const NB_TIRAGES = 100000;

$monJeu = [1,2,3,4,5];

$tirages_global = array();
GLOBAL $tirages_global;// on récupèrera la valeur par $GLOBALS["tirages_global"]

$message = "Perdu";

//les tirages
for($nbTirages=1;$nbTirages<=NB_TIRAGES;$nbTirages++){
    $tirage = tirage();
    
    if(empty(array_diff($tirage,$monJeu))){//la combinaison $mon_jeu est trouvée
        $message = "J'ai gagné au ".number_format($nbTirages,0,""," ")."ème tirage !";
        break;
    }
}
echo $message;

//tri du tableau $GLOBALS["tirages_global"]
arsort($GLOBALS["tirages_global"]);
var_dump($GLOBALS["tirages_global"]);

//la fonction tirages
function tirage(){
    $tirage = array();
    $num = 1;

    while($num<=5){
        $nb = rand(1,49);

        if(!in_array($nb,$tirage)){
            $tirage[$num] = $nb;

            if(!isset($GLOBALS["tirages_global"][$nb])){
                $GLOBALS["tirages_global"][$nb] = 1;
            }else{
                $GLOBALS["tirages_global"][$nb]++;
            }
            
            $num++;
        }
    }
    return $tirage;
}