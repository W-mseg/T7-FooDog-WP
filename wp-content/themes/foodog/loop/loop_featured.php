<?php
$stick = get_option('sticky_posts');
$recent_post = wp_get_recent_posts(array(
    'numberposts' => 3,
    'post_status' => 'publish',
    'post__in' => $stick,
));

if (have_posts()) :
    foreach ($recent_post as $post) : ?>

        <a href="<?= get_permalink($post['ID']) ?>" class="custom-card">
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