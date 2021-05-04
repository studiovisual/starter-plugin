<?php

namespace StarterPlugin;

use StarterPlugin\Controllers\Admin;

Class App {
    
    // Plugin name
    static $name = 'Starter plugin';

    public function __construct() {
        // Controllers
       new Admin;
    }

}