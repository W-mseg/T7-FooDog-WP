<?php get_header() ?>
<?php
/**
 * boucle pour afficher les articles
 */

?>
<div class="all_featured">
    <?php
    require_once('loop/loop_index.php');?>

    <div class="featured">
        <?php
        require_once('loop/loop_index_mini.php');
        ?>
    </div>
</div>
<br>
<br>
<h2>featured section</h2>

<?php require_once('loop/loop_featured.php')  ?>
<?php get_footer() ?>
