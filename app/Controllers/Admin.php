<?php

namespace StarterPlugin\Controllers;

use StarterPlugin\App;

Class Admin {
	
	public function __construct() {
        add_action('admin_enqueue_scripts', array($this, 'enqueueAssets'), 100);
        add_action('cmb2_admin_init', array($this, 'init'));
    }
    
    /**
     * enqueueAssets Enqueue admin assets
     *
     * @return void
     */
    function enqueueAssets() {            
        wp_enqueue_style('starter-plugin-style', plugins_url('../../assets/styles/starter-plugin-admin.css', __FILE__), false, null);
        wp_enqueue_script('starter-plugin-script', plugins_url('../../assets/scripts/starter-plugin-admin.js', __FILE__), array('jquery')); 
    }
    
    /**
     * init Initialize admin pages
     *
     * @return void
     */
    function init() {
        $cmb = new_cmb2_box(array(
            'id'           => 'cmb2_' . sanitize_title(App::$name) . '_metabox',
            'title'        => App::$name,
            'object_types' => array('options-page'),
            'option_key'   => sanitize_title(App::$name),
            'icon_url'     => 'dashicons-admin-generic',
            'capability'   => 'edit_posts', // Capability required to view this options page.
		    'position'     => 99.59, // Menu position.
        ) );
    
        $cmb->add_field(array(
            'name' => 'Test field',
            'id'   => 'cmb2_test',
            'type' => 'title',
            'desc' => 'Description',
        ));
    }

}