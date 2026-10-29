<?php include("top.php"); ?>

<main>
    <section class="accueil">
        <img class="accueil-logo" src="img/h1.svg" alt="Sunny Recipe">
        <h2>Des idées gourmandes pour bien commencer la journée.</h2>
    </section>

    <section class="bestseller container-fluid text-center">
        <h2>Nos meilleures recettes</h2>
        <p>Pancakes, tartines et granola maison.</p>
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/avocado.webp" class="img-thumbnail d-block w-100" alt="Tartine à l'avocat">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

<section class="categorie">
    <h2>Nos catégories</h2>
    <p>Sucré · Salé · Rapide · Boissons</p>
</section>
<section class="categorie">
    <h2>Nos catégories</h2>
    <p>Sucré · Salé · Rapide · Boissons</p>
</section>

<?php include("bottom.php"); ?>