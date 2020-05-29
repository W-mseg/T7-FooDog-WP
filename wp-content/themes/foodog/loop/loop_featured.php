<?php
$stick = get_option('sticky_posts');
$recent_post = wp_get_recent_posts(array(
    'numberposts' => 3,
    'post_status' => 'publish',
    'post__in' => $stick,
));

if (have_posts()) :
    foreach ($recent_post as $post) : ?>
        <div class="custom-card row">
            <a href="<?= get_permalink($post['ID']) ?>" class="col-6">
                    <?= get_the_post_thumbnail($post['ID'], 'thumnail', ['class' => 'img-fluid', 'style' => 'height:auto']); ?>
            </a>
            <div class="col-6">
                <?php the_category(' '); ?>
                <h5 class="card-title"><?= $post['post_title'] ?></h5>
                <p><?= get_the_content('', false, $post['ID']) ?></p>

            </div>
        </div>

    <?php endforeach;
    wp_reset_query(); ?>

<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>