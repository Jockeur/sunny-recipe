<?php include("top.php"); ?>
<main>
    <section class="accueil">
        <img class="accueil-logo" src="img/h1.svg" alt="Sunny Recipe">
        <h2>Des idées gourmandes pour bien commencer la journée.</h2>
    </section>

    <section class="bestseller">
        <h2>Nos meilleures recettes</h2>
        <p>Pancakes, tartines et granola maison.</p>
        <div class="container-fluid d-flex justify-content-center">
            <div id="bestSellerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="recette.php?recette=avocado"><img src="img/avocado.png" class="d-block mx-auto social-img" alt="tartine d'avocat"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="recette.php?recette=mousse"><img src="img/mousse.png" class="d-block mx-auto social-img" alt="moussee au chocolat"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="recette.php?recette=cake"><img src="img/cake.png" class="d-block mx-auto social-img" alt="cake au jambon et au petit pois"></a>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#bestSellerCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#bestSellerCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

<section class="categorie">
    <h2>Nos catégories</h2>
    <p>Sucré · Salé · Rapide · Boissons</p>
</section>

<?php include("bottom.php"); ?>