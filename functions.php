<?php
function theme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
                     get_stylesheet_directory_uri() . '/css/style.css',
                     array($parent_style)
    );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_filter('tribe_organizer_label_singular', 'change_single_organizer_label' );
function change_single_organizer_label() {
    return 'Leader';
}

add_filter('tribe_organizer_label_plural', 'change_plural_organizer_label' );
function change_plural_organizer_label() {
    return 'Leaders';
}
?>
