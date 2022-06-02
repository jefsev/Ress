<?php
use BoxyBird\Inertia\Inertia;

add_action('init', function () {
    // Synchronously using key/value
    Inertia::share('site_name', get_bloginfo('name'));


    // Multiple values
    Inertia::share([
        // Synchronously
        'site' => [
            'name'       => get_bloginfo('name'),
            'description'=> get_bloginfo('description'),
        ],
    ]);
});