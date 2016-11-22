<?php
/**

Plugin Name: Hello word
Description:  Hello word
Author: Qasim riaz
Version: 2.0


*/



require_once( 'BFIGitHubPluginUploader.php' );

add_action( 'admin_init', 'myprefix_handle_updates' );

function myprefix_handle_updates() {
    new BFIGitHubPluginUpdater(__FILE__, 'QasimRiaz', "hello-word-two" );
}
