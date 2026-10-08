<?php
/**
 * Plugin Name: Wiselogix WordPress Toolkit
 * Plugin URI: https://wiselogix.com/
 * Description: Practical WordPress development utilities maintained by Wiselogix Technologies.
 * Version: 0.1.0
 * Author: Wiselogix Technologies
 * Author URI: https://wiselogix.com/
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: wiselogix-wordpress-toolkit
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Remove WordPress emoji assets.
 *
 * This reduces unnecessary front-end requests on sites
 * that do not require the WordPress emoji JavaScript.
 */
function wiselogix_toolkit_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}

add_action( 'init', 'wiselogix_toolkit_disable_emojis' );
