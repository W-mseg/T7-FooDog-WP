<?php
$count = absint(get_comments_number());

if ($count > 0) : ?>
    <h3 class="single-comments-title my-4"><?= $count ?> COMMENT<?= $count > 1 ? 'S' : '' ?></h3>
<?php else : ?>
    <h3 class="single-comments-title my-4">LEAVE A RESPONSE</h3>
<?php endif ?>
<?php comment_form(
    [
        'title_reply' => '',
        'class_form' => 'row',
        'class_submit' => 'btn btn-dark',
    ]
);
