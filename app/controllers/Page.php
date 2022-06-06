<?php
namespace Nomix\Controllers;

use BoxyBird\Inertia\Inertia;

class Page {
    public static function index() {
        return Inertia::render('Page', [
            'title' => get_the_title(),
            'content' => get_the_content(),
        ]);
    }
}