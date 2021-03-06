<?php

if (have_posts()) :

    $arguments = array(
        'post_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'comment_count',
        'order'=>'DESC'
    );
    $query = new WP_Query($arguments);
    while($query->have_posts()) : $query->the_post(); ?>

        <div class="card" style="width: 500px;">

            <a href="<?= get_permalink($post['ID']) ?>">
                <img class="card-img-top" src="<?= get_the_post_thumbnail($post['ID']); ?>">
            </a>


            <div class="card-body article">

                <h5 class="card-title" style="text-align: center"><?= $post['post_title'] ?></h5>
                <p class="card-text"><?= $post['post_excerpt'] ?></p>
                <a href="<?= get_permalink($post['ID']) ?>" class="btn btn-primary">lire plus</a>

            </div>
        </div>


    <?php endwhile;

    else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>