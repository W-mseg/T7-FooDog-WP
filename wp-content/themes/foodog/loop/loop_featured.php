<?php

$stick = get_option('sticky_posts');
$arguments = array(
    'post_per_page' => 3,
    'post_status' => 'publish',
    'orderby' => 'comment_count',
    'post__in'=>$stick,
);

$query = new WP_Query($arguments);


if (have_posts()) :
    while($query->have_posts()) : $query->the_post();

    ?>
        <div class="custom-card row">
            <a href="<?= get_permalink() ?>" class="col-6">
                    <?= get_the_post_thumbnail() ?>
            </a>
            <div class="col-6">
                <h5 class="card-title"><?= the_title() ?></h5>
                <?php the_category(' '); ?>
                <p><?= the_content()?></p>
            </div>
        </div>

    <?php endwhile;

else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>