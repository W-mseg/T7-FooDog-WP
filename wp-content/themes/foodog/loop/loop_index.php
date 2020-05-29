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

        <a href="<?= get_permalink() ?>" class="custom-card">
            <div class="card">
                <?= get_the_post_thumbnail(); ?>
                <div class="card-body">

                    <?php the_category() ?>
                    <h5 class="card-title"><?= the_title() ?></h5>
                </div>
            </div>
        </a>


    <?php endwhile;
