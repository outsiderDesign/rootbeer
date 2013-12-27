<?php
/* Theme Customization Options
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
function outlet_customizer_admin() {
	add_theme_page( 'Theme Customize', 'Theme Customize', 'edit_theme_options', 'customize.php' ); 	
	}
add_action ('admin_menu', 'outlet_customizer_admin');

function rootbeer_customize_register($wp_customize){

//	Logo Section
	$wp_customize->add_section('rootbeer_logo', array(
		'title'    => __('Logo', 'rootbeer'),
		'priority' => 25
    )); 
  }

//  =============================
//  Logo Section          		=
//  ============================= 

//	Retina Logo
    // $wp_customize->add_setting('rootbeer_theme_options[outlet_retina_logo]', array(
    //     'capability'	=> 'edit_theme_options',
    //     'type'			=> 'option',
    // ));
    // $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'outlet_retina_logo', array(
    //     'label'    => __('Retina Logo', 'rootbeer'),
    //     'section'  => 'rootbeer_logo',
    //     'settings' => 'rootbeer_theme_options[outlet_retina_logo]',
    // )));
    
   

add_action('customize_register', 'rootbeer_customize_register');

// Foundation's flex-video class for embedded videos (just paste the youtube link!)
// Credit: thanks davidmcnee (http://wordpress.org/support/topic/adding-a-wrapping-div-to-video-embeds)
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
    function my_embed_oembed_html($html, $url, $attr, $post_id) {
    return '<div class="flex-video">' . $html . '</div>';
    }

?>