<?php

if (have_posts()):
        $recent_post = wp_get_recent_posts(array(
            'numberposts'=>1,
            'post_status'=>'publish',
        ));

        foreach ($recent_post as $post): ?>

            <div class="card" style="width: 500px;">
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail($post['ID']); ?>
                <div class="card-body article">
                    <h5 class="card-title" style="text-align: center"><?php echo $post['post_title'] ?></h5>
                    <p class="card-text"><?php echo $post['post_excerpt'] ?></p>
                    <a href="<?php echo get_permalink($post['ID']) ?>" class="btn btn-primary">lire plus</a>
                </div>
            </div>


        <?php endforeach;wp_reset_query(); ?>

<?php else: ?>
        <h1>Pas d'articles</h1>
<?php endif;?>

