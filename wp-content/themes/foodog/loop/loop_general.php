<?php

$query = new WP_Query($arguments);
?>
<div class="container_posts"> <?php
while
($query->have_posts()) : $query->the_post(); ?>

    <div class="card featured_card" style="width: 500px;">

        <a href="<?= get_permalink() ?>">
            <img class="card-img-top" src="<?= get_the_post_thumbnail()?>">
        </a>


        <div class=" card-body article>

            <h5 class=" card-title" style="text-align: center"><?= the_title() ?></h5>
            <p class="card-text"><?= the_excerpt() ?></p>
            <a href="<?= the_permalink() ?>" class="btn btn-primary">lire plus</a>
            </div>
        </div>
    </div>


<?php endwhile; ?>