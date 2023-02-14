<?php

define("_RECIPES_IMG_PATH_", "uploads/recipes/");


$recipes = [
  ["title" => "Mousse au chocolat", "description" => "Mousse quick example text to build on the card title and make up the bulk of the card's content.", "image" => "1-chocolate-au-mousse.jpg"],
  ["title" => "Gratin Dauphinois", "description" => "Gratin quick example text to build on the card title and make up the bulk of the card's content.", "image" => "2-gratin-dauphinois.jpg "],
  ["title" => "Salade de chevre", "description" => "Salade quick example text to build on the card title and make up the bulk of the card's content.", "image" => "3-salade.jpg "]
];
/*
// pour parcourir un tableau avec la methode foreach pour plusieurs tableaux
// <?php foreach($recipes as $key => $recipe){ ?> 
  code html................
 <?php }?>


 // avec un tableau simple $fruits['bananas', 'mangue', 'cerise'];
 
 foreach($fruits as $fruit){
echo "<h1>$fruit</h1>";
 }
*/

require_once("templates/header.php");

?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <h1>Liste des recettes</h1>
</div>
  

<!--°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°Les cartes°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°--->

<div class="row">

  <?php foreach($recipes as $key => $recipe){ 

include("templates/recipe_partial.php");
   }?>
</div>

  <?php

require_once("templates/footer.php");

// -----------------Live - 5------------------Arret sur image à 50 mn------------------>

  ?>  


