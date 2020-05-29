<?php

if (have_posts()) :
    $recent_post = wp_get_recent_posts(array(
        'numberposts' => 4,
        'ignore_sticky_posts' => 1,
        'post_status' => 'publish',
    ));

    foreach ($recent_post as $post) : ?>

        <a href="<?= get_permalink($post['ID']) ?>" class="custom-card col-md-6">
            <div class="card">
                <?= get_the_post_thumbnail($post['ID'], 'thumnail', ['class' => 'img-fluid', 'style' => 'height:auto']); ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $post['post_title'] ?></h5>
                </div>
            </div>
        </a>


    <?php endforeach;
    wp_reset_query(); ?>

<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>