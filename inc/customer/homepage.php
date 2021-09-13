<?php
/**
 * ForBlogs theme customizer: Homepage
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @version 1.3.0
 * @version 1.3.0
 */

function ForBlogs_customize_homepage( $wp_customize ) {

    /**
     * Setting
     * Add custom setting to bulti-in `static_front_page` section.
     */
	$wp_customize->add_setting( 'is_scroll_down_button', array( 
		'default'           => true,
		'sanitize_callback' => 'sanitize_text_field',
	) );

    /**
     * Control
     */
	$wp_customize->add_control(
		new Customize_Toggle_Control( $wp_customize, 'scroll_down_button_control',
			array(
				'label'       => __( 'Scrolling down button', 'ForBlogs' ),
				'section'     => 'static_front_page',
				'settings'    => 'is_scroll_down_button',
				'description' => __( 'Would you like to display the scrolling down button? (desktop version)', 'ForBlogs' ),
			)
		)
    );
}
