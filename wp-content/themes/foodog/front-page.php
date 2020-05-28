<?php get_header() ?>
<?php
/**
 * boucle pour afficher les articles
 */

?>
<div class="all_featured">
    <?php
    require_once('loop/loop_index.php'); ?>

    <div class="featured">
        <?php
        require_once('loop/loop_index_mini.php');
        ?>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>featured section</h2>

            <?php require_once('loop/loop_featured.php')  ?>
            <br><br>

            <h2>Latest posts</h2>
            <br>
            <?php require_once('loop/loop_latest.php') ?>
        </div>
        <div class="col-md-4">
            <?php get_template_part('_sidebar'); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>