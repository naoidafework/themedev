<?php
/**
 * Created by PhpStorm.
 * User: Naod
 * Date: 1/10/2020
 * Time: 10:58 PM
 */
function wp_theme_setup(){
	require_once ('class-wp-bootstrap-navwalker.php');

	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary'=> __('Primary Menu')
	));
}
add_action('after_setup_theme','wp_theme_setup');
function wpb_init_widgets($id){
	register_sidebar(array(
		'name'=>'sidebar',
		'id'=>'sidebar',
		'before_widget'=>'<div class="sidebar_module ">',
		"after_widget"=>'</div>',
		'before_title'=>'<h4>',
	));
}
add_action('widgets_init','wpb_init_widgets');

function bwpy_customizer( $wp_customize ) {
	// customizer build code
	$wp_customize->add_section( 'bwpy_theme_colors', array(
		'title' => __( 'Theme Colors', 'bwpy' ),
		'priority' => 100,
	) );

// add color picker setting
	$wp_customize->add_setting( 'link_color', array(
		'default' => '#dd1f65'
	) );

// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label' => 'Link Color',
		'section' => 'bwpy_theme_colors',
		'settings' => 'link_color',
	) ) );
	$wp_customize->add_setting( 'header_background', array(
		'default' => '#fff'
	) );

// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background', array(
		'label' => 'Header Background Color',
		'section' => 'bwpy_theme_colors',
		'settings' => 'header_background',
	) ) );
	$wp_customize->add_setting( 'header-color', array(
		'default' => '#dd1f65'
	) );

// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header-color', array(
		'label' => 'Header Color',
		'section' => 'bwpy_theme_colors',
		'settings' => 'header-color',
	) ) );
}
add_action( 'customize_register', 'bwpy_customizer' );



function bwpy_customizer_head_styles() {
	$link_color = get_theme_mod( 'link_color' );

	if ( $link_color != '#ff0000' ) :
		?>
		<style type="text/css">
			a {
				color: <?php echo $link_color; ?>;
			}
		</style>
		<?php
	endif;
}
function bwpy_customizer_back_head_styles() {
	$back_color = get_theme_mod( 'header_background' );

	if ( $back_color != '#ff0000' ) :
		?>
		<style type="text/css">
			nav {
				background-color: <?php echo $back_color; ?>
			}
		</style>
		<?php
	endif;
}
function bwpy_customizer_color_head_styles() {
	$color = get_theme_mod( 'header-color' );

	if ( $color != '#ff0000' ) :
		?>
		<style type="text/css">
			.navbar-brand {
				color: <?php echo $color; ?>
			}
			.menu li a {
				color: <?php echo $color; ?>
			}
		</style>
		<?php
	endif;
}
add_action( 'wp_head', 'bwpy_customizer_head_styles' );
add_action( 'wp_head', 'bwpy_customizer_back_head_styles' );
add_action( 'wp_head', 'bwpy_customizer_color_head_styles' );
?>