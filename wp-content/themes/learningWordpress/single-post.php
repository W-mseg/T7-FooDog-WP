<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) :  the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_post_thumbnail('medium', ['alt' => '', 'style' => 'height: auto;']) ?>
        <p><?php the_content() ?></p>
    <?php endwhile; ?>
<?php else : ?>
    <h1>Pas d'articles</h1>

<?php endif; ?>



<?php get_footer() ?>