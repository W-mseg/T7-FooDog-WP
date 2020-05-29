<?php get_header() ?>
<h1>lifestyle</h1>
<?php
$arguments = array(
    'post_per_page' => 8,
    'category_name' => 'lifestyle',
    'orderby' => 'comment_count',
    'ignore_sticky_posts' => 1
);
?>
<div class="row">
    <div class="col-md-8">
        <?php require_once('loop/loop_general.php'); ?>
    </div>
    <div class="col-md-4">
        <?php get_template_part('_sidebar'); ?>
    </div>
</div>

<?php
get_footer();
