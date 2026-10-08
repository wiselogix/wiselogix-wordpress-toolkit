<?php
/**
 * Example WooCommerce customization:
 * change the number of related products.
 */
function wiselogix_related_products_args( $args ) {
    $args['posts_per_page'] = 4;
    return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'wiselogix_related_products_args' );
