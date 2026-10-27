<?php include("top.php"); ?>


<section class="accueil">
    <img class="accueil-logo" src="img/h1.svg" alt="Sunny Recipe">
    <p>Des idées gourmandes pour bien commencer la journée.</p>
</section>

<section class="bestseller">
    <h2>Nos meilleures recettes</h2>
    <p>Pancakes, tartines et granola maison.</p>
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