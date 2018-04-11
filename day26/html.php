<?php

/**
 * library html
 */
class html
{
    public static $allowed_attributes = [
        'h1' => [
            'class',
            'id',
            'onlick'
        ]
    ];

    public static function h1()
    {
        return '<h1>Headline</h1>';
    }

    public static function input()
    {
        return '<input type="text" value="">';
    }
}

class html_helpers extends html
{
    
}

function html_input()
{
    return '<input type="text" value="">';
}

echo html::h1();

?>

<form action="">

    <?= html_helpers::input(); ?>
</form>

<?php $html = new html(); echo $html->h1(); ?>

html.php