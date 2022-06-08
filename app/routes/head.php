<?php
use BoxyBird\Inertia\Inertia;

add_action('init', function () {
        Inertia::share([
            // Synchronously
            'wordpress_seo' => [
                'wp_site_name'       => get_bloginfo('name'),
                'wp_seo_description' => get_bloginfo('description'),
            ],
        ]);
});