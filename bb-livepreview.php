<?php
/**
 * Plugin Name: Beaver Builder Live Preview and Quicksave
 * Plugin URI: http://www.badabing.nl
 * Description: By the press of a button view your layout as if you were on the frontend, not on the backend. Also adds a quicksave button, which publishes the layout with just one click.
 * Version: 1.1.8
 * Author: Badabing
 * Author URI: http://www.badabing.nl
 * Text Domain: bb-livepreview
 * Domain Path: /languages
  */
define( 'BBLIVEPREVIEW_VERSION' , '1.1.8' );
define( 'BBLIVEPREVIEW_DIR', plugin_dir_path( __FILE__ ) );
define( 'BBLIVEPREVIEW_URL', plugins_url( '/', __FILE__ ) );

//textdomain
load_plugin_textdomain( 'bb-livepreview', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );

add_action( 'init', 'BBLIVEPREVIEW_plugin_start' );

function BBLIVEPREVIEW_plugin_start() {

  if ( class_exists( 'FLBuilder' ) ) {

       require_once ( 'livepreview/livepreview.php' );

  }

}

/**
 * UPDATER
 */

if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'badabingbreda' );
$updater->set_repository( 'bb-livepreview' );

$updater->initialize();


