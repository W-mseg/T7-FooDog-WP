<?php

if (have_posts()):
        $recent_post = wp_get_recent_posts(array(
            'numberposts'=>5,
            'post_status'=>'publish',
            'category'=>2,
        ));

        foreach ($recent_post as $post): ?>

                <div class="article">
                        <h3>
                                <p><?php echo $post['post_title'] ?></p>
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                        <?php echo get_the_post_thumbnail($post['ID']); ?>
                                </a>
                        </h3>
                        <?php
                        echo $post['post_excerpt']; ?>
                </div>
        <?php endforeach;wp_reset_query(); ?>

<?php else: ?>
        <h1>Pas d'articles</h1>
<?php endif;?>

