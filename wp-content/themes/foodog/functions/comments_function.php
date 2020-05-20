<?php

class CustomComments
{
    public static function renderComments($fields)
    {
        $fields['email'] = <<<HTML
        <div class="form-group">
            <input class="form-control" name="email" id="email" aria-label="email" placeholder="Email..." required>
        </div>
    HTML;
        $fields['author'] = <<<HTML
    <div class="form-group">
        <input class="form-control" name="author" id="author" aria-label="name" placeholder="Name..." required>
    </div>
    HTML;
        $fields['url'] = <<<HTML
    <div class="form-group">
        <input class="form-control" name="url" id="url" placeholder="Website..." aria-label="comment">
    </div>
    HTML;
        $fields['comment'] = <<<HTML
    <div class="form-group">
        <textarea id="comment" class="form-control" name="comment" rows="3" placeholder="Write your comment here..." aria-label="comment" required></textarea>
    </div>
    HTML;
        return $fields;
    }
    public static function addCustomComments()
    {
        add_filter('comment_form_fields', [self::class, 'renderComments']);
    }
}
