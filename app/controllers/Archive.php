<?php
namespace Ress\Controllers;

use BoxyBird\Inertia\Inertia;
use Ress\Inc\CollectYoastMeta;

class Archive {
    public static function index() {
        return Inertia::render('Archive', [
            'yoast_meta' => CollectYoastMeta::collectMeta(get_the_ID()),
            'title' => get_the_archive_title(),
            'posts' => get_posts(),
        ]);
    }
}