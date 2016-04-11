<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

 /*
 *
 *   Monday 837
 *
 */
if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
