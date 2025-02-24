<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3"; //Mettre le nom du titre de la page que vous voulez

?>

<!-- mettre ici le code -->
<?php



class Animal{
    public $nom;
    public $age;
    public $type;
    
 
    public function __construct($nom, $age, $type)
    {
      $this->nom = $nom;
      $this->age = $age;
      $this->type= $type;
    }
}


$animal1 = new Animal("Mina", 5, "chat");
$animal2 = new Animal("Loulou", 2, "chien");
$animal3 = new Animal("Fifi", 3, "chat");
$animal4 = new Animal("Pepere", 1, "chien");
$animaux = [$animal1, $animal2, $animal3, $animal4];
function afficherAnimaux(){
    global $animaux;
  foreach($animaux as $animal){
       echo "Nom: " . $animal->nom ."<br />";
       echo "Age: " . $animal->age ."<br />";
       echo "Type: " . $animal->type ."<br />";
       echo "................................ <br />";
  }
}




  
function afficherAnimauxType($type){
    global $animaux;
    
    foreach($animaux as $animal){
        if($animal->type === $type){
       
            echo "Type: " . $animal->type ."<br />";
            echo "Nom: " . $animal->nom ."<br />";
       echo "Age: " . $animal->age ."<br />";
            echo "<br/>";
         }
         echo "................................ <br />";
        }
    }



 ?>
 
 <div>
     <a href="?type=tous" class="btn btn-primary">tous</a>
     <a href="?type=chien" class="btn btn-primary">chien</a>
     <a href="?type=chat" class="btn btn-primary">chat</a>
 </div>
 <?php
 
 if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type']!=="tous") {
      if($_GET['type'] === 'chien'){
        afficherAnimauxType('chien');
      } elseif($_GET['type'] === 'chat'){
        afficherAnimauxType('chat');
      } 

 
  } else {
    afficherAnimaux();
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