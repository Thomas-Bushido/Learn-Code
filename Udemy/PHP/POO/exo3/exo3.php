<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3"; //Mettre le nom du titre de la page que vous voulez

?>

<!-- mettre ici le code -->
<?php

$Chien = ['nom' => 'toutou', 'age' => 5, 'type' => 'chien'];
$Chat = ['nom' => 'minou', 'age' => 2, 'type' => 'chat'];
$Animaux = [$Chien, $Chat];
//  $type = 'chat';
function afficherAnimaux(){
    global $Animaux;
  foreach($Animaux as $animal){

      foreach($animal as $key => $valeur){
          echo $key. ": " . $valeur ."\n";
          echo "<br/>";
       }
       echo "................................ <br />";

  }
}

  function afficherAnimauxType($type){
    global $Animaux;
    
    foreach($Animaux as $animal){
        if($animal['type'] === $type){
        foreach($animal as $key => $valeur){
            echo $key. ": " . $valeur ."\n";
            echo "<br/>";
         }
         echo "................................ <br />";
        }
    }

}

//  afficherAnimauxType('chien');


?>

<div>
    <a href="?type=tous" class="btn btn-primary">tous</a>
    <a href="?type=chien" class="btn btn-primary">chien</a>
    <a href="?type=chat" class="btn btn-primary">chat</a>
</div>
<?php

if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] === 'tous') {
    afficherAnimaux(); // Affiche tous les animaux si 'tous' est sélectionné
} elseif (isset($_GET['type']) && !empty($_GET['type'])) {
    afficherAnimauxType($_GET['type']); // Affiche les animaux du type spécifique
} else {
    afficherAnimaux(); // Si aucun type n'est précisé, afficher tous les animaux par défaut
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