<?php
/* Stylesheets
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 */

// Site Style
function rootbeer_site_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'rootbeer_site_style' );

// Login Style
function rootbeer_login_style() { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-login.css">
<?php }
add_action( 'login_enqueue_scripts', 'rootbeer_login_style' );

function rootbeer_login_scripts() {
  wp_enqueue_style( 'core', 'style.css', false );
}
add_action( 'login_enqueue_scripts', 'rootbeer_login_scripts', 10 );

// Editor Style
function rootbeer_editor_style() {
    add_editor_style( 'style-editor.css' );
}
add_action( 'init', 'rootbeer_editor_style' );