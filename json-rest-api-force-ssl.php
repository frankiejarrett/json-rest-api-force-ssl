<?php
/**
 * Plugin Name: JSON REST API Force SSL
 * Description: Force WP JSON REST API endpoints to always be served over HTTPS.
 * Version: 0.1.0
 * Depends: JSON REST API
 * Author: Frankie Jarrett
 * Author URI: http://frankiejarrett.com
 * License: GPLv2+
 * Text Domain: json-rest-api-force-ssl
 */

class JSON_REST_API_Force_SSL {

	/**
	 * Plugin version number
	 *
	 * @const string
	 */
	const VERSION = '0.1.0';

	/**
	 * Hold whether or not dependencies are satisfied
	 *
	 * @var bool
	 */
	public static $dependencies_satisfied = false;

	/**
	 * Hold plugin instance
	 *
	 * @var string
	 */
	public static $instance;

	/**
	 * Class constructor
	 */
	private function __construct() {
		add_action( 'plugins_loaded', array( __CLASS__, 'load' ) );
		add_action( 'wp_json_server_before_serve', array( __CLASS__, 'ssl_redirect' ) );
	}

	/**
	 * Check the dependencies for this plugin
	 *
	 * @action plugins_loaded
	 *
	 * @return void
	 */
	public static function load() {
		if ( defined( 'JSON_API_VERSION' ) ) {
			return;
		}

		// Display admin notice
		add_action( 'all_admin_notices', array( __CLASS__, 'admin_notice' ) );

		// Deactivate the plugin
		add_action( 'admin_init', array( __CLASS__, 'deactivate' ) );
	}

	/**
	 * Display admin notice when JSON REST API does not exist
	 *
	 * @action all_admin_notices
	 *
	 * @return void
	 */
	public static function admin_notice() {
		?>
		<div class="error">
			<p><?php _e( 'The <strong>JSON REST API Force SSL</strong> plugin has been deactivated because it requires the <strong>JSON REST API</strong> plugin.', 'json-rest-api-force-ssl' ) ?></p>
		</div>
		<?php
	}

	/**
	 * Deactivate the plugin
	 *
	 * @action admin_init
	 *
	 * @return void
	 */
	public static function deactivate() {
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}

	/**
	 * Force WP JSON REST API endpoints to always be served over HTTPS
	 *
	 * @action wp_json_server_before_serve
	 *
	 * @return void
	 */
	public static function ssl_redirect() {
		if ( is_ssl() ) {
			return;
		}

		$json_url = esc_url_raw( $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
		$redirect = set_url_scheme( $json_url, 'https' );

		wp_redirect( $redirect, 301 );

		exit;
	}

	/**
	 * Return active instance of JSON_REST_API_Force_SSL, create one if it doesn't exist
	 *
	 * @return JSON_REST_API_Force_SSL
	 */
	public static function get_instance() {
		if ( empty( self::$instance ) ) {
			$class = __CLASS__;
			self::$instance = new $class;
		}

		return self::$instance;
	}

}

$GLOBALS['json_rest_api_force_ssl'] = JSON_REST_API_Force_SSL::get_instance();
