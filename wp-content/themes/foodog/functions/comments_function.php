<?php

class CustomComments
{
    public static function renderCommentsDefault($fields)
    {
        $fields["comment_notes_before"] = "";
        $fields['label_submit'] = "LEAVE A COMMENT";
        return $fields;
    }
    public static function renderComments($fields)
    {
        $fields['email'] = <<<HTML
        <div class="form-group col-lg-4 ">
            <input class="form-control  single-form" name="email" id="email" aria-label="email" placeholder="Email..." required>
        </div>
    HTML;
        $fields['author'] = <<<HTML
    <div class="form-group col-lg-4">
        <input class="form-control single-form" name="author" id="author" aria-label="name" placeholder="Name..." required>
    </div>
    HTML;
        $fields['url'] = <<<HTML
    <div class="form-group col-lg-4">
        <input class="form-control  single-form" name="url" id="url" placeholder="Website..." aria-label="comment">
    </div>
    HTML;
        $fields['comment'] = <<<HTML
    <div class="form-group col-12">
        <textarea id="comment" class="form-control single-form" name="comment" rows="5" placeholder="Write your comment here..." aria-label="comment" required></textarea>
    </div>
    HTML;
        unset($fields['cookies']);
        return $fields;
    }

    public static function addCustomComments()
    {
        add_filter('comment_form_fields', [self::class, 'renderComments']);
        add_filter('comment_form_defaults', [self::class, 'renderCommentsDefault']);
    }
}
