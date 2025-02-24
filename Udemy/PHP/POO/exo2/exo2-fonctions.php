<?php
declare(strict_types=1);


function afficherTableau ($numbers){

var_dump($numbers) ;

}
// afficherTableau ($numbers);


function calculerMoyenne($numbers){


echo array_sum($numbers)/count($numbers);


}

// calculerMoyenne ($numbers);

function peerNumbers($numbers){
    $peerArray = [];
    
    foreach($numbers as $number) {
        if($number % 2 === 0){
            $peerArray[] = $number;
        }
    }
   echo count($peerArray) === count($numbers) ? 'true' : 'false';

}











?>