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
                        <a href="top.php"><img src="img/avocado.webp" class="d-block mx-auto social-img" alt="tartine d'avocat"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="top.php"><img src="img/moussa.webp" class="d-block mx-auto social-img" alt="moussa"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="top.php"><img src="img/cake.jpg" class="d-block mx-auto social-img" alt="cake"></a>
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
</main>

<?php include("bottom.php"); ?>