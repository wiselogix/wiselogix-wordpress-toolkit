<?php
/**
 * Disable XML-RPC when it is not required by the website.
 */
add_filter( 'xmlrpc_enabled', '__return_false' );
