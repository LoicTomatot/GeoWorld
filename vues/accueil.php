<main role="main" class="flex-shrink-0">

  <div id="liste" class="container">
    <div>
      <?php if(isset($_POST['Continent'])) { 
        $leContinentSelec = $_POST['Continent'];
          ?>
        <h1>Les pays en <?php echo $leContinentSelec; ?> </h1>
      <div>
          <?php
            require_once 'inc/manager-db.php';
            $desPays = getCountriesByContinent($leContinentSelec);
           
           foreach ($desPays as $unPays) {
            echo "<a href='infospays-pays".$unPays->id.".html'>".$unPays->Name."</a><br/>";
           } 
        }
      ?>
      </div>
    </div>
    <p></p>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <img id="logo_accueil" src="images/logo.png">
    <div class="carousel-item active">
      <img class="d-block w-100" src="vues/carteMonde.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="vues/map.jpg" alt="Second slide">
    </div>
  </div>
</div>
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Étudiez notre monde géo-politique sous toutes ses coutures</h1>
        <p>Explorez notre base de données afin d'avoir accès à de nombreuses informations sur plusieurs milliers de pays différents !</p>
      </div>
    </section>
  </div>
</main>
