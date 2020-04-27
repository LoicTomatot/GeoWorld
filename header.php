<!doctype html>
<html lang="fr" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Homepage : Bootstrap 4</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap-4.2.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="index.php">GeoWorld</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="accueil.html">Accueil</span></a>
        </li>
        <?php
        if($action == 'accueil') {
        ?> 
        <li class="nav-item dropdown">
          <div class="nav-link dropdown-toggle clickable" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">Continents</div>
          <div class="dropdown-menu clickable" aria-labelledby="dropdown01">
            <?php  
              require_once 'inc/manager-db.php';
              $desContinents = getAllContinents();
              foreach ($desContinents as $unContinent) {
                $leContinent = $unContinent->Continent ; 
                ?>
                <div class="dropdown-item" onclick="listePays('<?php echo $leContinent; ?>')"><?php echo $leContinent; ?></div>
                <?php
              }
            ?> 
          </div>
        </li>
        <?php
        }
        ?>
        
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.html">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.html">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="todo.html">
            ProjetPPE-SLAM
          </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
