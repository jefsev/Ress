<?php
use BoxyBird\Inertia\Inertia;

add_action('init', function () {
    //Synchronously using array
    Inertia::share([
        'custom_logo' => get_custom_logo_url(),
        'primary_menu' => array_map(function ($menu_item) {
            return [
                'id'   => $menu_item->ID,
                'link' => $menu_item->url,
                'name' => $menu_item->title,
            ];
        }, wp_get_nav_menu_items('primary-menu'))
    ]);
});