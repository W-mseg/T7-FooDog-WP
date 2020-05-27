<?php get_header() ?>
<?php
/**
 * boucle pour afficher les articles
 */

?>
<div class="container feature-section">
    <div class="row">
        <div class="col-12 col-md-8 col-xl-8">

            <div class="all_featured">
                <?php
    require_once('loop/loop_index.php');?>

                <div class="featured">
                    <?php
        require_once('loop/loop_index_mini.php');
        ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xl-2"></div>
                <div class="col-md-2 col-xl-2"></div>
            </div>
        </div>
        <div class="col-md-4 col-xl-4"></div>
    </div>
</div>
<br>
<br>
<h2>featured section</h2>

<?php require_once('loop/loop_featured.php')  ?>
<br><br>

<h2>Latest posts</h2>
<br>
<?php require_once('loop/loop_latest.php') ?>
<?php get_footer() ?>
