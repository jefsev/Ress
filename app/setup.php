<?php

use BoxyBird\Inertia\Inertia;

/**
 * Setup everything we need for the theme.
 *
 * @Ress
 */

// Enqueue scripts.
add_action('wp_enqueue_scripts', function () {
    $version = md5_file(get_stylesheet_directory() . '/dist/manifest.json');

    wp_enqueue_style('ress/css', get_stylesheet_directory_uri() .'/dist/css/app.css', [], $version, false, null);
    wp_enqueue_script('ress/react', get_stylesheet_directory_uri() . '/dist/main.js', [], $version, true);

    // Remove unwanted scripts.
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS

    if (!is_admin_bar_showing() && !is_customize_preview()) {
        wp_dequeue_style('dashicons');
        wp_deregister_style('dashicons');
    }
});

// Remove Emoji.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Share globally with Inertia views
add_action('after_setup_theme', function () {
    Inertia::share([
        'site' => [
            'name'        => get_bloginfo('name'),
            'description' => get_bloginfo('description'),
        ],
    ]);
});

// Add Inertia version. Helps with cache busting
add_action('after_setup_theme', function () {
    $version = md5_file(get_stylesheet_directory() . '/dist/manifest.json');

    Inertia::version($version);
});

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'ress'),
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

     /**
     * Enable custom logo in customizer.
     * @link https://developer.wordpress.org/themes/functionality/custom-logo/
     */
    add_theme_support( 'custom-logo' );

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

}, 20);

// Removing additional CSS from the customizer
add_action ('customize_register', function($wp_customize) {
    $wp_customize-> remove_section ('custom_css'); // whole section out
});

/**
 * Removes all meta data from the presenters, we want to load them with Inertia <Head />.
 * We will use the collectYoastMeta::collectMeta() function to get the meta data.
 * 
 * @param array $presenters The registered presenters.
 *
 * @return array return $presenters empty, we will get them using intertia.
 */

add_action( 'wpseo_frontend_presenters',function( $presenters ) {
    $presenters = [];

    return $presenters;
} );


/**
 * If ACF is installed
 * Initialize ACF Builder
 * Get acf fields from controllers
 */
if( class_exists('ACF') ) {
    add_action('init', function () {
        //$front_page = new FrontPage();
        //$front_page_acf = $front_page->acf_fields();
        $fields = [];
    
        if (!empty($fields)) {
            array_push($fields, $front_page_acf);
        
            array_walk($fields, function($field) {
                acf_add_local_field_group($field->build());
            });
        }
    });
}
