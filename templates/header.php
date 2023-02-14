<?php
require_once("lib/config.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/override-bootstrap.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <title>Cuisinea - Senegalaise </title>

</head>

<body>

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Amorcer">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <img src="assets/images/logo-cuisinea-horizontal.jpg" width="300" alt="cuisinea">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Acceuil</font>
            </font>
          </a></li>
        <li><a href="#" class="nav-link px-2 link-dark">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Nos recettes</font>
            </font>
          </a></li>
        <li><a href="#" class="nav-link px-2 link-dark">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Nos tarifs</font>
            </font>
          </a></li>
        <li><a href="#" class="nav-link px-2 link-dark">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">FAQ</font>
            </font>
          </a></li>
        <li><a href="#" class="nav-link px-2 link-dark">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">À propos</font>
            </font>
          </a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Connexion</font>
          </font>
        </button>
        <button type="button" class="btn btn-primary">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">S'inscrire</font>
          </font>
        </button>
      </div>
    </header>