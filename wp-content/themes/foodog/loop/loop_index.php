<?php

    $stick = get_option('sticky_posts');
    $arguments = array(
        'post_per_page' => 1,
        'post__in' => $stick,
        'post_status' => 'publish',
    );

    $query = new WP_Query($arguments);

    while
        ($query->have_posts()) : $query->the_post(); ?>

        <a href="<?= get_permalink() ?>" class="custom-card-big">
            <div class="card-big">
                <?= get_the_post_thumbnail(); ?>
                <div class="card-body-big">

                    <?php the_category() ?>
                    <h5 class="card-title-big"><?= the_title() ?></h5>
                </div>
            </div>
        </a>


    <?php endwhile;
