<?php
use BoxyBird\Inertia\Inertia;

add_action('init', function () {
    //Check if theme nav is enabled else empty array
    $nav_items = [];
    if(has_nav_menu('primary_navigation')) {
        // Add your navigation name
        $nav_items = wp_get_nav_menu_items('menu-1');
    }
    //Synchronously using array
    Inertia::share([
        'custom_logo' => get_custom_logo_url(),
        'primary_menu' => array_map(function ($menu_item) {
            return [
                'id'   => $menu_item->ID,
                'link' => $menu_item->url,
                'name' => $menu_item->title,
            ];
        }, $nav_items)
    ]);
});