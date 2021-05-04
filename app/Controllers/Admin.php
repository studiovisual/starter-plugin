<?php

namespace StarterPlugin\Controllers;

use StarterPlugin\App;

Class Admin {
	
	public function __construct() {
        add_action('cmb2_admin_init', array($this, 'init'));
    }

    public function init() {
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