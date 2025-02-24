<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2"; //Mettre le nom du titre de la page que vous voulez

?>

<!-- mettre ici le code -->
<?php
require("./exo2-fonctions.php");
$numbers = [1,5,3,6,145,1,54,5,8];
$numbers2 = [2,2,4,2,6,2,10,2,2,2];

 echo peerNumbers($numbers) . "\n";
 echo afficherTableau($numbers) . "\n";
 echo calculerMoyenne($numbers) . "\n";

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
