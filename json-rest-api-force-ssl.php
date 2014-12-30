<?php
/**
 * Plugin Name: JSON REST API Force SSL
 * Description: Force WP JSON REST API endpoints to always be served over HTTPS.
 * Version: 0.1.0
 * Author: Frankie Jarrett
 * Author URI: http://frankiejarrett.com
 * License: GPLv2+
 * Text Domain: json-rest-api-force-ssl
 */

/**
 * Force WP JSON endpoints to always be served over HTTPS
 *
 * @action wp_json_server_before_serve
 *
 * @return void
 */
function fjarrett_wp_json_force_ssl() {
	if ( is_ssl() ) {
		return;
	}

	$json_url = esc_url_raw( $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
	$redirect = set_url_scheme( $json_url, 'https' );

	wp_redirect( $redirect, 301 );

	exit;
}
add_action( 'wp_json_server_before_serve', 'fjarrett_wp_json_force_ssl' );
