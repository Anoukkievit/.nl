<?php
add_filter('template_include', function($template) {
    if (is_front_page() || is_page(2) || is_page('doorbraak-sessie') || is_page('livedag') || is_page('doorbraak')) {
        $custom = get_stylesheet_directory() . '/template-livedag.php';
        if (file_exists($custom)) return $custom;
    }
    return $template;
});
