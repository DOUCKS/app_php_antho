<?php

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
require_once("lib/recipe.php");

?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
      <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Thèmes d'amorçage" width="350"   loading="lazy">
  </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuisinea - Recettes Galsen</font></font></h1>
      <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Concevez et personnalisez rapidement des sites mobiles réactifs avec Bootstrap, 
        la boîte à outils open source frontale la plus populaire au monde, comprenant des variables et des mixins Sass, un système de grille réactif, de nombreux composants prédéfinis et 
        de puissants plug-ins JavaScript.</font></font></p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="recettes.php" class="btn btn-primary">Voir nos recettes</a>

      </div>
    </div>
</div>
  

<!--°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°Les cartes°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°--->

<div class="row">

  <?php foreach($recipes as $key => $recipe){ 

include("templates/recipe_partial.php");
   }?>
</div>

  <?php

require_once("templates/footer.php");

// -----------------Live - 5------------------Arret sur image à 21 mn------------------>

  ?>  


