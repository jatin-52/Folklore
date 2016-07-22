<?php
/**
 * barletta theme Customizer
 *
 * @package barletta
 */

function barletta_theme_options( $wp_customize ) {
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}

add_action( 'customize_register' , 'barletta_theme_options' );

/**
 * Options for WordPress Theme Customizer.
 */
function barletta_customizer( $wp_customize ) {

	global $barletta_site_layout;

	/**
	 * Section: Theme layout options
	 */

	$wp_customize->add_section('barletta_layout_section', 
		array(
			'priority' => 31,
			'title' => __('Layout options', 'barletta'),
			'description' => __('Choose website layout', 'barletta'),
			)
		);

		// Sidebar position
		$wp_customize->add_setting('barletta_sidebar_position', array(
			'default' => 'mz-sidebar-right',
			'sanitize_callback' => 'barletta_sanitize_layout'
		));

		$wp_customize->add_control('barletta_sidebar_position', array(
			'priority'  => 1,
			'label' => __('Website Layout Options', 'barletta'),
			'section' => 'barletta_layout_section',
			'type'    => 'select',
			'description' => __('Choose between different layout options to be used as default', 'barletta'),
			'choices'    => $barletta_site_layout
		));	

	/**
	 * Section: Slider settings
	 */

	$wp_customize->add_section( 
		'barletta_slider_options', 
		array(
			'priority'    => 32,
			'title'       => __( 'Slider Settings', 'barletta' ),
			'capability'  => 'edit_theme_options',
			'description' => __('Change slider settings here.', 'barletta'), 
		) 
	);

		// chose category for slider
		$wp_customize->add_setting( 'barletta_slider_cat', array(
			'default' => 0,
			'transport'   => 'refresh',
			'sanitize_callback' => 'barletta_sanitize_slidercat'
		) );	

		$wp_customize->add_control( 'barletta_slider_cat', array(
			'priority'  => 1,
			'type' => 'select',
			'label' => __('Choose a category.', 'barletta'),
			'choices' => barletta_cats(),
			'section' => 'barletta_slider_options',
		) );

		// checkbox show/hide slider
		$wp_customize->add_setting( 'show_barletta_slider', array(
			'default'        => false,
			'transport'  =>  'refresh',
			'sanitize_callback' => 'barletta_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'show_barletta_slider', array(
			'priority'  => 2,
			'label'     => __('Show Slider?','barletta'),
			'section'   => 'barletta_slider_options',
			'type'      => 'checkbox',
		) );

}

add_action( 'customize_register', 'barletta_customizer' );

/**
 * Adds sanitization callback function: Slider Category
 */
function barletta_sanitize_slidercat( $input ) {
	if ( array_key_exists( $input, barletta_cats()) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Sanitze checkbox for WordPress customizer
 */
function barletta_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Sanitze number for WordPress customizer
 */
function barletta_sanitize_number($input) {
	if ( isset( $input ) && is_numeric( $input ) ) {
		return $input;
	}
}

/**
 * Sanitze blog layout
 */
function barletta_sanitize_layout( $input ) {
	global $barletta_site_layout;
	if ( array_key_exists( $input, $barletta_site_layout ) ) {
		return $input;
	} else {
		return '';
	}
}