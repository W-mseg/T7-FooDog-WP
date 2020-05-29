<?php get_header() ?>
<?php
/**
 * boucle pour afficher les articles
 */

?>
<div class="container">
    <div class="row">
            <div class="bigPost">
                <?php
    require_once('loop/loop_index.php');?>

                <div class="littlePost row">
                    <?php
        require_once('loop/loop_index_mini.php');
        ?>
                </div>
            </div></div></div>
<br>
<br>
<h2>featured section</h2>

<?php require_once('loop/loop_featured.php')  ?>
<br><br>

<h2>Latest posts</h2>
<br>
<?php require_once('loop/loop_latest.php') ?>
<?php get_footer() ?>
