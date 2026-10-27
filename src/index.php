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

<section class="categorie py-5">
    <div class="container">
        <h2 class="text-center mb-2">Nos catégories</h2>
        <p class="text-center mb-4">Choisissez votre envie du matin</p>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

            <div class="col">
                <div class="card h-100">
                    <a href="recettes.php?categorie=sucre">
                        <img src="img/suc.png"
                             class="card-img-top categorie-image"
                             alt="Pancakes et recettes sucrées">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title h5">Sucré</h3>
                        <p class="card-text">
                            Pancakes, granola et autres douceurs pour le petit-déjeuner.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <a href="recettes.php?categorie=sale">
                        <img src="img/sale.png"
                             class="card-img-top categorie-image"
                             alt="Tartines et recettes salées">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title h5">Salé</h3>
                        <p class="card-text">
                            Des tartines, des œufs et des idées salées pour bien commencer la journée.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <a href="recettes.php?categorie=rapide">
                        <img src="img/rapide.png"
                             class="card-img-top categorie-image"
                             alt="Petit-déjeuner rapide">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title h5">Rapide</h3>
                        <p class="card-text">
                            Des recettes simples à préparer quand on est pressé.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <a href="recettes.php?categorie=boissons">
                        <img src="img/boisson.png"
                             class="card-img-top categorie-image"
                             alt="Boissons du petit-déjeuner">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title h5">Boissons</h3>
                        <p class="card-text">
                            Smoothies, jus et boissons chaudes pour accompagner le repas.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include("bottom.php"); ?>