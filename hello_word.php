<?php
/**
 * @package hello-word-two
 * @version 1.6
 */
/*

Plugin Name: Hello word
Description:  Hello word
Author: Qasim riaz
Version: 1.6


*/



require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater(__FILE__, 'QasimRiaz', "hello-word-two" );
}
