<?php
$arguments = array(
    'post_per_page'=>3,
    'category__in'=>0,
    'orderby'=>'comment_count',
    'ignore_sticky_posts'=>1
);
require_once('loop_general.php');

