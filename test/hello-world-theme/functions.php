<?php
require_once( 'class-wp-license-manager-client.php' );

if ( is_admin() ) {     
    $license_manager = new Wp_License_Manager_Client(
        'hello-world-theme',
        'Hello World Theme',
        'hello-world-text',
        'http:// !!! YOUR SERVER URL HERE !!! /api/license-manager/v1'
    );
}

