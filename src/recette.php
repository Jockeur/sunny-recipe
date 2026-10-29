<?php 
include_once "recettes_data.php";

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') !== 'GET') {
    print "Nope !";
    exit();
}

$recette_id = filter_input(INPUT_GET, "recette");
$recette = $recettes[$recette_id];
?>
<?php include("top.php"); ?>

<style>main { padding-top: 30px; padding-bottom: 30px;}</style>

<div class="container">
  <section class="row">

    <div class="col-md-5" style="padding-bottom: 15px;">

      <?php print("<img src='img/$recette_id.png' class='img-thumbnail d-block w-100' alt='illustration'>"); ?>
    </div>

    <div class="col-md-7">

      <?php 
      $titre = $recette["titre"];
      print("<h1 style='padding-bottom: 10px'>$titre</h1>");
      
      $temps = $recette["prep_time"];
      print ("<p><strong>Temps de préparation : $temps minutes </strong></p>");

      $desc = $recette["description"];
      print("<p>$desc</p>")?>
    </div>
  </section>

  <!-- Bas de page : listes -->
  <section>
    <h2>Ingrédients</h2>
    <ul>
      <?php 
      $ingredients = $recette["ingredients"];
      foreach($ingredients as $ingredient) {
        print("<li>$ingredient</li>");
      }
      ?>
    </ul>

    <h2>Ustensiles</h2>
    <ul>
      <?php 
      $ustensiles = $recette["ustensiles"];
      foreach($ustensiles as $ustensile) {
        print("<li>$ustensile</li>");
      }
      ?>
    </ul>

    <h2>Préparation</h2>
    <ol>
      <?php 
      $etapes = $recette["etapes"];
      foreach($etapes as $etape) {
        print("<li>$etape</li>");
      }
      ?>
    </ol>
  </section>
</div>

<?php include("bottom.php"); ?>