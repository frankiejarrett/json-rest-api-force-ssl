<?php
/**
 * Plugin Name: WP REST API Force SSL
 * Description: Force WP REST API endpoints to only be served over HTTPS.
 * Version: 0.2.0
 * Depends: json-rest-api
 * Author: Frankie Jarrett
 * Author URI: https://frankiejarrett.com
 * Text Domain: json-rest-api-force-ssl
 * License: GNU General Public License v2.0
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright © 2016 Frankie Jarrett. All Rights Reserved.
 */

/**
 * Redirect HTTP requests to HTTPS.
 *
 * @action rest_api_init
 */
function wp_rest_api_force_ssl() {

	if ( ! is_ssl() ) {

		$url = set_url_scheme( esc_url_raw( $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ), 'https' );

		wp_safe_redirect( $url, 301 );

		exit;

	}

}
add_action( 'rest_api_init', 'wp_rest_api_force_ssl', ~PHP_INT_MAX );
