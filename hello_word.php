<?php
/**

Plugin Name: Hello word
Description:  Hello word
Author: Qasim riaz
Version: 2.0


*/





require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater(__FILE__, 'QasimRiaz', "hello-word-two" );
}
