<?php
namespace Nomix\Controllers;

use BoxyBird\Inertia\Inertia;

class FrontPage {
    public static function index() {
        return Inertia::render('Index', [
            'title' => get_the_title(),
            'content' => get_the_content(),
            'posts' => get_posts(),
        ]);
    }
}