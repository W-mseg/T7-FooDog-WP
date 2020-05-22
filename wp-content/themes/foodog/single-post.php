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
        <div class="col-md-8">


            <?php
            if (have_posts()) :
                while (have_posts()) :  the_post(); ?>
                    <div class="categories m-2">
                        <?php the_category(' '); ?>
                    </div>
                    <h2 class="single-title mb-4"><?= the_title() ?></h2>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid mb-4', 'style' => 'height:auto']) ?>
                    <div class="d-flex bd-highlight border-top border-bottom mb-4">
                        <div class="p-2 flex-grow-1 bd-highlight my-auto"><?php get_avatar(get_the_author_meta('ID'), 32);
                                                                            the_author(); ?></div>
                        <div class="p-2 bd-highlight my-auto">COMMENTS</div>
                        <div class="p-2 bd-highlight my-auto">SHARE</div>
                        <div class="p-2 bd-highlight my-auto">SOCIALS</div>
                    </div>
                    <?= the_content() ?>
                    <div class="single-comments border-top">
                        <?php if (comments_open() || get_comments_number()) {
                            comments_template();
                            wp_list_comments();
                        } ?>
                    </div>

                <?php endwhile;
                wp_reset_query(); ?>

            <?php else : ?>
                <h1>Pas d'articles</h1>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>



<?php get_footer(); ?>