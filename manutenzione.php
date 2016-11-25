<?php
/*
 * Plugin Name: Modalità manutenzione WP
 * Plugin URI: https://github.com/enricator/ei-manutenzione-wp
 * Description: Plugin WordPress per visualizzare una pagina di manutenzione per chiunque non abbia effettuato il login.
 * Version: 1.0
 * Author: Enrico Imbalzano
 * Author URI: https://www.enricator.it
 * License: GPL2
 *
 * @package ei-manutenzione-wp
 * @copyright Copyright (c) 2016, Enrico Imbalzano
 * @license GPL2+
*/

/**
 * Pagina di Manutenzione
 *
 * Visualizza una pagina per chiunque non abbia effettuato il login.
 * (ovviamente la pagina wp-login è esclusa in modo da permettere un'eventuale autenticazione)
 *
 * @return void
 */
function ei_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/manutenzione.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/manutenzione.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'ei_maintenance_mode' );