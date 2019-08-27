<?php
 
function bootstrapstarter_enqueue_styles() {
    
    /*This function (wp_register_style) is used to safely register a CSS style file for later use with wp_enqueue_style(). The reason we register first instead of directly including (enqueuing) the file is because we want to create a dependency between our style.css file and the Bootstrap CSS file – in other words, we do not want our style sheet to be loaded before the Bootstrap CSS file. */
        
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
    wp_enqueue_style('web-fonts', 'https://fonts.googleapis.com/css?family=Quicksand:400,700|Vollkorn+SC:400,700|Vollkorn:400,500,700');
}
 
function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    /* Concerning 'jquery' above, by default, the WordPress installation includes and pre registers many popular scripts commonly used by web developers besides the scripts used by WordPress itself, jQuery being one of them.*/
    
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true);
    wp_enqueue_script('match-height', get_template_directory_uri().'/scripts/jquery.matchHeight.js', $dependencies, '1.0', true);
    wp_enqueue_script('emw-scripts', get_template_directory_uri().'/scripts/emwScripts.js', $dependencies, null, true);
    wp_enqueue_script('fa-icons', 'https://use.fontawesome.com/ed71279d93.js');
}
 
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );


function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}
 
add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

function bootstrapstarter_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'bootstrapstarter_register_menu' );

function bootstrapstarter_widgets_init() {

    register_sidebar( array(
        'name'          => 'Yelp Reviews',
        'id'            => 'yelp-review-area',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Google Reviews',
        'id'            => 'google-review-area',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    

}
add_action( 'widgets_init', 'bootstrapstarter_widgets_init' );

?>