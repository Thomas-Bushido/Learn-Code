<?
declare(strict_types=1);
// instruction demandant à PHP d'être exigeant avec le typage. Le mot clédeclare permet d'indiquer à PHP un comportement spécifique pour le fichier dans lequel nous nous trouvons.

class Pont 
{
public static function ValiderTaille(float $taille){

    if($taille<50){
        trigger_error(
            "taille trop courte", E_USER_ERROR
        );
    }

return true;

}

public function setLongueur(float $longueur):void
{
    self::ValiderTaille($longueur);
    $this->longueur = $longueur;
}
}

$towerBridge = new Pont;
$towerBridge->setLongueur(20.0);