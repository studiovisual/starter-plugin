<?php

namespace StarterPlugin;

use StarterPlugin\Controllers\Admin;

Class App {
    
    // Plugin name
    static $name = 'Starter plugin';
    // Plugin path
    static $path = WP_PLUGIN_DIR . '/starter-plugin';

    public function __construct() {
        // Controllers
       new Admin;
    }

}
