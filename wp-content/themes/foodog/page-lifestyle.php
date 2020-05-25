<h1>lifestyle</h1>
<?php
$arguments = array(
    'post_per_page'=>3,
    'category__in'=>8,
    'orderby'=>'comment_count',
    'ignore_sticky_posts'=>1
);
require_once('loop/loop_general.php');

