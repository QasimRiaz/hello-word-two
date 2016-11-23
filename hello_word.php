<?php

/**
 * Hello Word
 *
 * @package   Hello_Word_Two
 * @author    Qasim Riaz
 * @license   GPL-2.0+
 * @link      https://github.com/QasimRiaz/hello-word-two
 */

/**
 * Plugin Name:       Hello Word
 * Plugin URI:        https://github.com/QasimRiaz/hello-word-two
 * Description:       A plugin to automatically update GitHub.
 * Version:           2.0
 * Author:            Qasim Riaz
 * License:           GNU General Public License v2
 * Text Domain:       hello-word-two
 * Network:           true
 * GitHub Plugin URI: https://github.com/QasimRiaz/hello-word-two
 * Requires WP:       4.0
 * Requires PHP:      5.3
 */



require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater(__FILE__, 'QasimRiaz', "hello-word-two" );
}
