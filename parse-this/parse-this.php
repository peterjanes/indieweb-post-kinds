<?php
/* Parse This Load
 */

if ( ! function_exists( 'parse_this_loader' ) ) {
	function parse_this_loader() {
		// Core Parse This Class
		require_once plugin_dir_path( __FILE__ ) . 'class-parse-this.php';
		// Parse This for OGP and HTML Properties
		require_once plugin_dir_path( __FILE__ ) . 'class-parse-this-html.php';

		// Parse This for Microformats 2
		require_once plugin_dir_path( __FILE__ ) . 'class-parse-this-mf2.php';

		// Parse This API
		require_once plugin_dir_path( __FILE__ ) . 'class-parse-this-api.php';
	}
	parse_this_loader();
}