<?php
namespace Nomix\Controllers;

use BoxyBird\Inertia\Inertia;

class Single {
    public static function index() {
        return Inertia::render('Single', [
            'title' => get_the_title(),
            'content' => get_the_content(),
        ]);
    }
}