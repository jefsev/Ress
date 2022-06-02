<?php

namespace Nomix\Inc;

class Collecter {
    public static function collectFiles( array $files = []) {
        
        if (!$files) {
            wp_die(
                sprintf(__('Error locating for inclusion.', 'nomix'), $file)
            );
        } else {
            foreach ($files as $key => $file) {
                locate_template($file = "app/{$file}.php", true, true);
            }
        }
    }
}