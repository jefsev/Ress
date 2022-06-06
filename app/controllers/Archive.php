<?php
namespace Nomix\Controllers;

use BoxyBird\Inertia\Inertia;

class Archive {
    public static function index() {
        return Inertia::render('Archive', [
            'title' => get_the_archive_title(),
            'posts' => get_posts(),
        ]);
    }
}