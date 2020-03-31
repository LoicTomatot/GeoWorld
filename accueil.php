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
            echo $unPays->Name."<br />";
           } 
        }
      ?>
      </div>
    </div>
    <p></p>
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Bienvenue sur GeoWorld !</h1>
        <p>Un site pour élèves et enseignants, lié à l'histoire et la géographie.</p>
      </div>
    </section>
  </div>
</main>
