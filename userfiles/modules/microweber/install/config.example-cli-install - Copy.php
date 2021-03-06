<?php

// you can use this config if you want to install MW from the command line

defined('T') or die();

// Global site configuration
$config = array(
    // In development, debug mode unlocks extra error info
    'debug_mode' => false,
    'admin_url' => 'admin',
    'admin_username' => 'admin',
    'admin_password' => '123456',
    'admin_email' => 'email@example.com',
    'uri_protocol' => 'AUTO',
    'default_timezone' => 'UTC',
    'with_default_content' => 'yes',
    'table_prefix' => 'mw_', 
    
    // Database Settings
    'db' => array(
	'type' => 'mysql',
        'host' => '127.0.0.1',
        'dbname' => 'test',
        'user' => 'root',
        'pass' => '123456'
    )
);
 
 
