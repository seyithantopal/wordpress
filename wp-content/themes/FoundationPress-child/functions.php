<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'main-stylesheet'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}



add_action('get_header', 'my_filter_head');

function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 

function my_asc_nav_menu($menu, $args) {
if (isset($args->reverse) && $args->reverse) {
return array_reverse($menu);
}
return $menu;
}
add_filter('wp_nav_menu_objects', 'my_asc_nav_menu', 10, 2);

function custom_wpautop($content) {
  if (get_post_meta(get_the_ID(), 'wpautop', true) == 'false')
    return $content;
  else
    return wpautop($content);
}

/*remove_filter('the_content', 'wpautop');
add_filter('the_content', 'custom_wpautop');*/

//----------------------------------
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
return $html;
}


?>