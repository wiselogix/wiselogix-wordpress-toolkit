<?php
/**
 * Example: remove default dashboard widgets.
 *
 * Customize the list for the project instead of removing
 * everything blindly.
 */
function wiselogix_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
}

add_action( 'wp_dashboard_setup', 'wiselogix_remove_dashboard_widgets' );
