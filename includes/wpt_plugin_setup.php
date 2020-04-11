<?php

if( !class_exists('WPTPluginSetup') ) {

class WPTPluginSetup 
{
    public static function createAdminMenu()
    {
        add_menu_page(
            __( 'Tweedle', 'wpt-text' ),
            __( 'Tweedle', 'wpt-text' ),
            'manage_options',
            'wp_tweedle',
            '',
            'dashicons-twitter',
            6
        );

        add_submenu_page( 'wp_tweedle', 'Tweets', 'Tweets',
        'manage_options', 'wp_tweedle');

        add_submenu_page( 'wp_tweedle', 'Reports', 'Reports',
        'manage_options', 'wpt_reports');

        add_submenu_page( 'wp_tweedle', 'Settings', 'Settings',
    'manage_options', 'wpt_settings');
    }

}

}