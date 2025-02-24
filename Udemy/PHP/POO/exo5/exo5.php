<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5"; //Mettre le nom du titre de la page que vous voulez

?>

<!-- mettre ici le code -->
<?php



class Livre
{
    private $nom;
    private $edition;
    private $auteur;
    private $dateParution;

    public function getEdition(){
        return $this->edition;
    }

    public function getdateParution(){
        return $this->dateParution;
    }

    public function __construct($nom, $edition, $auteur, $dateParution)
    {
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->dateParution = $dateParution;
    }

     public function __toString()
     {
         $txt = "titre: " . $this->nom  ."<br/>";
         $txt  .=  "edition: " . $this->edition  ."<br/>";
         $txt  .=  "auteur: " . $this->auteur  ."<br/>";
         $txt  .=  "parution: " . $this->dateParution  ."<br/>";
       return $txt;
     }
}

$livre1 = new Livre("tonton", "aya", "X", "1995");
$livre2 = new Livre("titi", "huhu", "Y", "1980");
$livre3 = new Livre("tulu", "ele", "Z", "2005");
$livre4 = new Livre("ooo", "mdgz", "A", "2025");
$librairie = [$livre1, $livre2, $livre3 ,$livre4];

function afficherLibrairie($tests){
    foreach($tests as $test){
        echo $test  ."<br/>";
     
    }
}

function afficherLivres($livres, $edition, $dateParution){
   foreach($livres as $livre){
    if(($livre->getEdition() ===  $edition || $edition === "tous") && ($livre->getdateParution() === $dateParution || $dateParution === "tous")){
        echo $livre;
        echo "....................... <br />";
    }
 
   }
    }




// afficherLibrairie($librairie);
// afficherLivres($librairie, "aya", "1995");
?>

<form action="" method="POST">
<div class="form-group">
     <label>Edition:</label>
     <select name="edition"><option value="tous">Tous</option>
     <option value="aya">Aya</option>
     <option value="huhu">Huhu</option>
     <option value="ele">Ele</option>
     <option value="mdgz">Mdgz</option></select>
</div>
<div class="form-group">
     <label>Date de parution:</label>
     <select name="parution"><option value="tous">Tous</option>
     <option value="1995">1995</option>
     <option value="1980">1980</option>
     <option value="2005">2005</option>
     <option value="2025">2025</option></select>
</div>
<input type = "submit" value='Valider'></button>
</form>

<?php

 if (isset($_POST['edition']) && !empty($_POST['edition'])
 && isset($_POST['parution']) && !empty($_POST['parution'])) {
    afficherLivres($librairie, $_POST['edition'], $_POST['parution']);
 } else {
    afficherLibrairie($librairie);
 }
?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>