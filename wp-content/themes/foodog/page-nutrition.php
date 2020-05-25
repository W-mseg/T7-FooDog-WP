<h1>nutrition</h1>
<?php
$arguments = array(
    'post_per_page'=>8,
    'category_name'=>'nutrition',
    'orderby'=>'comment_count',
    'ignore_sticky_posts'=>1
);
require_once('loop/loop_general.php');

