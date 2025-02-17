<?php

declare(strict_types=1);
// instruction demandant à PHP d'être exigeant avec le typage. Le mot clédeclare permet d'indiquer à PHP un comportement spécifique pour le fichier dans lequel nous nous trouvons.

class Pont 
{
  public float $longueur;
  public float $largeur; 

  public function getSurface(): float
  {
    return $this->longueur * $this->largeur;
  }
}


$pont = new Pont;
$pont->longueur = 263.0;
$pont->largeur = 5;

$surface = $pont->getSurface();

var_dump($surface);




