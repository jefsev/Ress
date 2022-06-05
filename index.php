<?php

use BoxyBird\Inertia\Inertia;

if (is_front_page()) {
    return Inertia::render('Index', [
        'page' => get_post(),
    ]);
}

if (is_single()) {
    return Inertia::render('Single', [
        'post' => get_post(),
    ]);
}

if (!is_front_page() && is_page()) {
    return Inertia::render('Page', [
        'page' => get_post(),
    ]);
}

if (is_404()) {
    return Inertia::render('Page404', [
        'content' => '404 - Not Found',
    ]);
}