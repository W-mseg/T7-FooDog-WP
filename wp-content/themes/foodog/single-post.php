<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) :  the_post(); ?>
            <div class="categories m-4">
                <?php the_category(' '); ?>
            </div>
            <h1><?= the_title() ?></h1>
            <?= the_content() ?>

        <?php endwhile;
        wp_reset_query(); ?>

    <?php else : ?>
        <h1>Pas d'articles</h1>
    <?php endif; ?>
</div>



<?php get_footer(); ?>