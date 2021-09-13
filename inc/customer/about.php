<?php
/**
 * ForBlogs theme customizer: About
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @version 1.3.0
 * @version 1.3.0
 */

function ForBlogs_customize_about( $wp_customize ) {

	$wp_customize->add_section( 'section_about_ForBlogs_theme', 
		array(
			'title'      => __( 'About ForBlogs Theme', 'ForBlogs' ),
			'priority'   => 1,
			'capability' => 'edit_theme_options',
		)
	);

	$about  =  __( 'ForBlogs is an open source project on GitHub, any suggestions to improve this theme are welcome. Please visit:', 'ForBlogs' );
	$about .= '<br /><br /><a href="' . esc_url( 'https://github.com/terrylinooo/ForBlogs' ) . '">https://github.com/terrylinooo/ForBlogs</a>';

	/**
     * Setting
     */
	$wp_customize->add_setting( 'setting_about_ForBlogs_theme',
		array( 
			'default'           => 'no',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

    $wp_customize->add_setting( 'is_responsive_website',
        array( 
            'default'           => true,
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    /**
     * Control
     */
	$wp_customize->add_control(
		new Customize_Content_Control( $wp_customize, 'control_about_ForBlogs_theme',
			array(
				'label'       => __( 'About', 'ForBlogs' ),
				'section'     => 'section_about_ForBlogs_theme',
				'settings'    => 'setting_about_ForBlogs_theme',
				'description' => $about,
			)
		)
	);

    $wp_customize->add_control(
		new Customize_Toggle_Control( $wp_customize, 'is_responsive_control',
			array(
				'label'       => __( 'RWD', 'ForBlogs' ),
				'section'     => 'section_about_ForBlogs_theme',
				'settings'    => 'is_responsive_website',
				'description' => __( 'ForBlogs is a responsive theme (RWD, responsive web design). However, if you would like to disable RWD, here it is.', 'ForBlogs' ),
			)
		)
	);
}
