<?php

if (have_posts()) :

    $arguments = array(
        'post_per_page' => 6,
        'orderby' => 'date',
        'order'=>'DESC',
        'post_status'=>'publish',
    );
    $query = new WP_Query($arguments);
?>
    <?php while($query->have_posts()):$query->the_post(); ?>

        <div class="custom-card row">
            <a href="<?= get_permalink() ?>" class="col-6">
                <?= get_the_post_thumbnail(); ?>
            </a>
            <div class="col-6">
                <?php the_category(' '); ?>
                <h5 class="card-title"><?= the_title() ?></h5>


            </div>
        </div>


    <?php endwhile;
else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>