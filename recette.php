<?php

require_once("templates/header.php");
require_once("lib/recipe.php");
var_dump($_GET);

$id = $_GET["id"];

?>


<div class="row">

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=_RECIPES_IMG_PATH_.$recipes[$id]['image'];?>" class="d-block mx-lg-auto img-fluid" alt="Thèmes d'amorçage" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?= $recipes[$id]["title"];?></h1>
        <p class="lead"><?= $key.$recipes[$id]["description"];?></p>  
        </div>
      </div>
    </div>
   
</div>

  <?php

require_once("templates/footer.php");

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

// -----------------Live - 5------------------Arret sur image à 43 mn------------------>

  ?>  


