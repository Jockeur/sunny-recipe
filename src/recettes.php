
<?php
include_once 'recettes_data.php';
include_once 'top.php';
?>

<div class='recettes container-fluid py-4'>

    <?php foreach ($recettes as $recette_id => $recette) { ?>

        <a href='recette.php?recette=<?= urlencode((string) $recette_id) ?>'
           class='recette-card card border-secondary rounded-4
                  text-decoration-none d-flex flex-row mx-auto mb-4'
           style='max-width: 1100px; overflow: hidden;'>

            <img src='img/<?= htmlspecialchars((string) $recette_id) ?>.png'
                 alt='<?= htmlspecialchars($recette['titre']) ?>'
                 class='rounded-4 m-3'
                 style='width: 170px; height: 170px; object-fit: cover; flex-shrink: 0;'>

            <div class='card-body'>
                <h5 class='card-title fw-bold'>
                    <?= htmlspecialchars($recette['titre']) ?>
                </h5>

                <p class='card-text text-secondary'>
                    <?= htmlspecialchars($recette['description']) ?>
                </p>
            </div>

        </a>

    <?php } ?>

</div>

<?php include_once 'bottom.php'; ?>
