<?php
/*
  Plugin Name: Piraeus Bank WooCommerce Payment Gateway
  Plugin URI: https://github.com/jimrarras/woo-payment-gateway-for-piraeus-bank
  Description: Accept Visa, Mastercard and Maestro cards, plus Google Pay and IRIS instant payments, through the Piraeus Bank Paycenter hosted payment page.
  Version: 3.3.1
  Author: Dimitrios Rarras, based on the plugin by Papaki (Enartia S.A.)
  Author URI: https://jimrarras.com
  License: GPL-3.0-or-later
  License URI: https://www.gnu.org/licenses/gpl-3.0.txt
  Requires PHP: 7.4
  WC tested up to: 11.1
  Text Domain: woo-payment-gateway-for-piraeus-bank
  Domain Path: /languages
  Update URI: https://github.com/jimrarras/woo-payment-gateway-for-piraeus-bank
*/
/*
Independently maintained fork of "Piraeus Bank WooCommerce Payment Gateway" by
Papaki (Enartia S.A.), https://www.papaki.com, itself based on the plugin by
emspace.gr (https://wordpress.org/plugins/woo-payment-gateway-piraeus-bank-greece/).
Not affiliated with or endorsed by Papaki or Piraeus Bank.
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

register_activation_hook( __FILE__, function () {
    global $wpdb;

    $table_name      = $wpdb->prefix . 'piraeusbank_transactions';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id int(11) unsigned NOT NULL AUTO_INCREMENT,
        merch_ref varchar(50) NOT NULL,
        trans_ticket varchar(32) NOT NULL,
        timestamp datetime DEFAULT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
} );

add_action( 'plugins_loaded', function () {
    if ( ! class_exists( '\WC_Payment_Gateway' ) ) {
        add_action( 'admin_notices', function () {
            echo '<div class="notice notice-error"><p>';
            echo __( 'Piraeus Bank Payment Gateway requires WooCommerce to be installed and active.', 'woo-payment-gateway-for-piraeus-bank' );
            echo '</p></div>';
        } );
        return;
    }

    spl_autoload_register( function ( $class ) {
        $prefix   = 'JimRarras\\PiraeusBank\\WooCommerce\\';
        $base_dir = plugin_dir_path( __FILE__ ) . 'classes/';

        $len = strlen( $prefix );
        if ( strncmp( $prefix, $class, $len ) !== 0 ) {
            return;
        }

        $relative_class = substr( $class, $len );
        $file           = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

        if ( file_exists( $file ) ) {
            require $file;
        }
    } );

    new \JimRarras\PiraeusBank\WooCommerce\Application( plugin_basename( __FILE__ ) );
}, 0 );
