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
    <div class="row">
        <div class="col col-md-8">


            <?php
            if (have_posts()) :
                while (have_posts()) :  the_post(); ?>
                    <div class="categories m-4">
                        <?php the_category(' '); ?>
                    </div>
                    <h2 class="single-title"><?= the_title() ?></h2>
                    <?= the_content() ?>

                <?php endwhile;
                wp_reset_query(); ?>

            <?php else : ?>
                <h1>Pas d'articles</h1>
            <?php endif; ?>
        </div>
        <div class="col col-md-4">

        </div>
    </div>
</div>



<?php get_footer(); ?>