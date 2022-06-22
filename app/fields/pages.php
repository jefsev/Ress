<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$pages = new FieldsBuilder('pages');

$pages
    ->setLocation('post_type', '==', 'page');

;return $pages;