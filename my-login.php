<?php defined('WPINC') || die;

/*
Plugin Name: My Login
Plugin URI:  #
Description: Allow to customize the style of the login screen
Version:     1.0.0
Author:      Gennaro Di Fiandra
Author URI:  https://espertowp.it
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
Text Domain: mylogin
Domain Path: /languages
Requires PHP: 7.3.0
Requires at least: 5.0
Tested up to: 5.9
Stable tag: 1.0.0
*/


require_once plugin_dir_path(__FILE__) . 'core/customizer/register-customizer-controls.php';
require_once plugin_dir_path(__FILE__) . 'core/inject-style.php';

add_action('customize_register', 'MyLogin\Customizer\register_customizer_controls');
add_action('login_enqueue_scripts', 'MyLogin\inject_style');
