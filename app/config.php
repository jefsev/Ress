<?php

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
 * don't forget to add use Ress\Controllers\YourControllerName at the top of the file
 * 
 * @param array $fields: push returns from YourClass::acf_field() method
 */
if( class_exists('ACF') ) {
    add_action('init', function () {
        //$front_page_acf = FrontPage::acf_fields();
        $fields = [];
    
        if (!empty($fields)) {
            array_push($fields, $front_page_acf);
        
            array_walk($fields, function($field) {
                acf_add_local_field_group($field->build());
            });
        }
    });
}

/**
 * On failed login attempt don't redirect to wp-login page
 * Append ?login=failed to url to use with React
 */
add_action( 'wp_login_failed', function ( $username ) {
        $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
        // if there's a valid referrer, and it's not the default log-in screen
        if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
        wp_redirect( $referrer . '?login=failed' );  // let's append some information (login=failed) to the URL for React to use
        exit;
        } 
    }
);  