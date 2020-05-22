<?php get_header(); ?>
<style>
    .error-404{
        display: flex;
        justify-content: center;
    }
    .p_404{
        display: flex;
        justify-content: center;
    }
</style>
<?php require_once('loop/loop_popular.php') ?>
<h1 class="error-404">Error 404 not found</h1>
<p class="p_404">If you see this page, go back, your URL don't exist</p>
<?php get_footer(); ?>