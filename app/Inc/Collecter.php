<?php
namespace Ress\Inc;
/**
 * File collecter class
 * Only collecting php files directy in app/
 * If $files loop over files and add them using locate_template
 * 
 * @property array $files
 * @method collectFiles calling locate_template on $file
 */ 

class Collecter {
    private $files;

    public static function collectFiles($files) {
        
        if (!empty($files)) { 
            foreach ($files as $key => $file) {
                locate_template($file = "app/{$file}.php", true, true);
            }
        } 
    }
}