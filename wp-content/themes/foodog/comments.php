<?php
$count = absint(get_comments_number());

if ($count > 0) : ?>
    <h2><?= $count ?> COMMENT<?= $count > 1 ? 'S' : '' ?></h2>
<?php else : ?>

<?php endif ?>
<?php comment_form(
    [
        'title_reply' => '',
    ]
);


