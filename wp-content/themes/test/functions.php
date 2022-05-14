<?php 

function test_after_setup_theme() 
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menu('Header', "Header location");
    register_nav_menu('Footer', "Footer location");
}

add_action('after_setup_theme', 'test_after_setup_theme');

function wps_excerpt_more($more) {
    return ' ...';
}

add_filter('excerpt_more', 'wps_excerpt_more');

function wps_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'wps_excerpt_length');

function wps_navigation_markup_template() {
    return '<div class="post_pagination">%3$s</div>';
}

add_filter('navigation_markup_template', 'wps_navigation_markup_template');

function wps_widgets_init() {
    $argsMain = [
        'name' => 'Main sidebar',
        'id' => 'main-sidebar'
    ];
    register_sidebar($argsMain);

    $argsFooter = [
        'name' => 'Footer sidebar',
        'id' => 'footer-sidebar'
    ];
    register_sidebar($argsFooter);
}

add_action('widgets_init', 'wps_widgets_init');

function wps_wp_enqueue_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '', 'all');
    wp_enqueue_style('media1', get_template_directory_uri() . '/css/media.css', array(), '', 'all');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'wps_wp_enqueue_scripts');


function logo_setup() {
    add_theme_support('custom-logo', Array(
        'height' => 100,
        'width'  => 100
        )
    );
}
add_action('after_setup_theme', 'logo_setup'); 

add_theme_support( 'custom-background' );

?>



<?php

// Add inline style to set body background via "myprefix_background_image" custom field

function myprefix_custom_field_background() {
    if ($background = get_post_meta( get_the_ID(), 'url_background_image', true) ) { ?> 
        <style type="text/css">
            body { background-image: url( "<?php echo esc_url( $background ); ?>" ) !important; /*background-repeat: no-repeat;*/ }
        </style>
<?php 	} } 


add_action( 'wp_head', 'myprefix_custom_field_background' );


load_theme_textdomain( 'lang', get_template_directory(). '/lang' );
