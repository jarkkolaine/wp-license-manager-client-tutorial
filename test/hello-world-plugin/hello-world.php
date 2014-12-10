<?php
/*
Plugin Name: Hello World Plugin
Description: A test plugin that says Hello.
Version: 0.1
*/

require_once( 'class-wp-license-manager-client.php' );

if ( is_admin() ) {
    $license_manager = new Wp_License_Manager_Client(
        'hello-world-plugin',
        'Hello World Plugin',
        'hello-world-plugin-text',
        'http:// !!! YOUR_SERVER_URL_HERE !!! /api/license-manager/v1',
        'plugin',
        __FILE__
    );
}
