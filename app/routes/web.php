<?php 

use Nomix\Inc\Collecter;
use Nomix\Controllers\FrontPage;
use Nomix\Controllers\Single;
use Nomix\Controllers\Page;
use Nomix\Controllers\Archive;
use BoxyBird\Inertia\Inertia;

if (is_front_page()) {
    return FrontPage::index();
}

if (is_single()) {
    return Single::index();
}

if (!is_front_page() && is_page()) {
    return Page::index();
}

if (is_archive()) {
    return Archive::index();
}


if (is_404()) {
    return Inertia::render('Page404', [
        'content' => '404 - Not Found',
    ]);
}
