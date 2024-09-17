<?php
function child_theme_enqueue_styles()
{
    // Enqueue child theme styles only
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function custom_theme_scripts()
{
    // Enqueue first JavaScript file
    wp_enqueue_script('custom-script-one', get_stylesheet_directory_uri() . '/assets/js/script-one.js', array(), null, true);

    // Enqueue second JavaScript file
    wp_enqueue_script('custom-script-two', get_stylesheet_directory_uri() . '/assets/js/script-two.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
add_theme_support('menus');



function register_footer_menu() {
    register_nav_menus(
        array(
            'footer-menu' => __( 'Footer' ), // Name of the menu
        )
    );
}
add_action( 'init', 'register_footer_menu' );



function my_custom_sidebar() {
    register_sidebar(
        array(
            'name'          => __( 'Custom Widget Area', 'your-textdomain' ),
            'id'            => 'custom-widget-area',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );





 if ( is_active_sidebar( 'custom-widget-area' ) ) : ?>
    <div id="footer-widgets" class="widget-area">
        <?php dynamic_sidebar( 'custom-widget-area' ); ?>
    </div>
<?php endif; ?>
