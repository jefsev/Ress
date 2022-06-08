<?php
namespace Nomix\Controllers;

use BoxyBird\Inertia\Inertia;
use Nomix\Inc\CollectYoastMeta;

class Page {
    public static function index() {
        return Inertia::render('Page', [
            'yoast_meta' => CollectYoastMeta::collectMeta(get_the_ID()),
            'title' => get_the_title(),
            'content' => get_the_content(),
        ]);
    }
}