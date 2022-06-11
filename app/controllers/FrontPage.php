<?php
namespace Ress\Controllers;

use BoxyBird\Inertia\Inertia;
use Ress\Inc\CollectYoastMeta;

class FrontPage {
    public static function index() {
        return Inertia::render('Index', [
            'yoast_meta' => CollectYoastMeta::collectMeta(get_the_ID()),
            'title' => get_the_title(),
            'content' => get_the_content(),
            'posts' => get_posts(),
        ]);
    }
}