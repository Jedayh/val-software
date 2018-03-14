<?php
/**
 * Plugin Name: Val-Software
 * Description: Retrieve information via an API trainings that are on valsoftware to feed "product" records. It is necessary that from the data sheets, the visitor can make a request of "QUOTE".
 * Version: 0.1
 * Author: kissender
 * Text Domain: val_software
 *
 */
 define('VAL_SOFTWARE', dirname(__FILE__));
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
require_once( ABSPATH . "wp-includes/pluggable.php" );
require_once (VAL_SOFTWARE . '/includes/class-val-software.php');

global $val_soft;

$val_soft = new Val_Software();