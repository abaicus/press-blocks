<?php
/**
 * Plugin Name:       Press Blocks
 * Plugin URI:        https://example.org
 * Description:       No description available
 * Version:           0.0.1
 * Author:            Andrei Baicus <andrei@themeisle.com>
 * Author URI:        https://abaic.us
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       press-blocks
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PRESS_BLOCKS_URL', plugins_url( '/', __FILE__ ) );
define( 'PRESS_BLOCKS_PATH', dirname( __FILE__ ) );
define( 'PRESS_BLOCKS_VERSION', '0.0.1' );

function press_blocks_run() {
	echo '<div id="press-block-bootstrap"></div>';
}

add_shortcode( 'press_blocks', 'press_blocks_run' );

function press_blocks_enqueue() {
	wp_enqueue_script( 'press-blocks-app', PRESS_BLOCKS_URL . 'dist/build.js', array(), PRESS_BLOCKS_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'press_blocks_enqueue' );