<?php

/**
 * Hello Word
 *
 * @package   Hello_Word_Two
 * @author    Qasim Riaz
 * @version   2.2
 * @license   GPL-2.0+
 * @link      https://github.com/QasimRiaz/hello-word-two
 */

/**
 * Plugin Name:       Hello Word
 * Plugin URI:        https://github.com/QasimRiaz/hello-word-two
 * Description:       A plugin to automatically update GitHub.
 * Version:           2.2
 * Author:            Qasim Riaz
 * License:           GNU General Public License v2
 * Text Domain:       hello-word-two
 * Network:           true
 * GitHub Plugin URI: https://github.com/QasimRiaz/hello-word-two
 * Requires WP:       4.0
 * Requires PHP:      5.3
 */

include_once('updater.php');

if (is_admin()) { // note the use of is_admin() to double check that this is happening in the admin
        $config = array(
            'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
            'proper_folder_name' => 'hello-word-two', // this is the name of the folder your plugin lives in
            'api_url' => 'https://api.github.com/repos/QasimRiaz/hello-word-two', // the GitHub API url of your GitHub repo
            'raw_url' => 'https://raw.github.com/QasimRiaz/hello-word-two/master', // the GitHub raw url of your GitHub repo
            'github_url' => 'https://github.com/QasimRiaz/hello-word-two', // the GitHub url of your GitHub repo
            'zip_url' => 'https://github.com/QasimRiaz/hello-word-two/zipball/master', // the zip url of the GitHub repo
            'sslverify' => true, // whether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
            'requires' => '3.0', // which version of WordPress does your plugin require?
            'tested' => '3.3', // which version of WordPress is your plugin tested up to?
            'readme' => 'README.md', // which file to use as the readme for the version number
            'access_token' => '07c43edc92c1eaf76d36a3420674bdd38fb1e289', // Access private repositories by authorizing under Appearance > GitHub Updates when this example plugin is installed
        );
        new WP_GitHub_Updater($config);
    }
