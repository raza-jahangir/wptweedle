<?php

/**
 * Plugin Name: Wordpress Tweedle
 * Plugin URI: https://github.com/raza-jahangir/wptweedle
 * Description: Twitter management within Wordpress dashboard 
 * Version: 1.0.0
 * Author: Raza Jahangir
 * Author URI: raza-jahangir@github.io
 * Text Domain: wpt-text
 *
 * @package WPTweedle
 */

defined( 'ABSPATH' ) || exit;

if( !defined( 'WP_TWEEDLE_ROOT_CONSTANTS' ) ) {

    define ( 'WP_TWEEDLE_ROOT_URL' , plugin_dir_url(__FILE__) );
    define ( 'WP_TWEEDLE_ROOT_PATH' , plugin_dir_path(__FILE__) );
    define ( 'WP_TWEEDLE_ROOT_CONSTANTS' , 'defined' );
}

/* Setting Up The Plugin */
require WP_TWEEDLE_ROOT_PATH . 'includes/wpt_plugin_setup.php'; 
add_action('admin_menu', 'WPTPluginSetup::createAdminMenu');
/* Setting Up The Plugin */

/* Tweet On Post Publish Modules */
// require WP_TWEEDLE_ROOT_PATH . 'includes/modules/publish_post_tweet/wpt_post_tweet_class.php'; 
// WPTPostTweet::init();
/* Tweet On Post Publish Modules */ 