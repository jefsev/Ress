<?php
namespace Ress\Controllers;

use BoxyBird\Inertia\Inertia;
use Ress\Inc\CollectYoastMeta;

class FrontPage {
    public static function index() {
        // filter get_the_content so it return proper HTML tags
        $content = apply_filters( 'the_content', get_the_content());

        return Inertia::render('Index', [
            'yoast_meta' => CollectYoastMeta::collectMeta(get_the_ID()),
            'title' => get_the_title(),
            'content' => $content,
            'posts' => get_posts(),
        ]);
    }
}