<?php
/**
 * ForBlogs theme customizer: Post Page
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.3.0
 * @version 1.3.0
 */


function ForBlogs_customize_post_card( $wp_customize ) {

    /**
     * Panel
     */

    /**
     * Section
     */
	$wp_customize->add_section( 'section_post_card', 
		array(
			'title'      => __( 'Post Card', 'ForBlogs' ),
			'priority'   => 10,
		)
	);
    
    /**
     * Setting
     */
    $wp_customize->add_setting( 'post_card_show_footer',
        array( 
            'default'           => true,
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_setting( 'post_card_show_header',
        array( 
            'default'           => true,
            'sanitize_callback' => 'sanitize_text_field',
        )
	);
	
    $wp_customize->add_setting( 'post_card_show_border',
        array( 
            'default'           => true,
            'sanitize_callback' => 'sanitize_text_field',
        )
	);
	
	$wp_customize->add_setting( 'post_card_show_gradient_mask',
		array( 
			'default'           => true,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_setting( 'post_card_show_body_footer',
		array( 
			'default'           => true,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

    /**
     * Control
     */
    $wp_customize->add_control(
		new Customize_Toggle_Control( $wp_customize, 'post_card_header_control',
			array(
				'label'       => __( 'Header', 'ForBlogs' ),
				'section'     => 'section_post_card',
				'settings'    => 'post_card_show_header',
				'description' => __( 'Would you like to display the header of the post card? (Post thumbnail is located on this section. Choosing `No` will hide it.)', 'ForBlogs' ),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Toggle_Control( $wp_customize, 'post_card_footer_control',
			array(
				'label'       => __( 'Footer', 'ForBlogs' ),
				'section'     => 'section_post_card',
				'settings'    => 'post_card_show_footer',
				'description' => __( 'Would you like to display the footer of the post card?', 'ForBlogs' ),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Toggle_Control( $wp_customize, 'post_card_border_control',
			array(
				'label'       => __( 'Border', 'ForBlogs' ),
				'section'     => 'section_post_card',
				'settings'    => 'post_card_show_border',
				'description' => __( 'Would you like to display the border of the post card?', 'ForBlogs' ),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Toggle_Control( $wp_customize, 'post_card_gradient_mask_control',
			array(
				'label'       => __( 'Gradient Mask', 'ForBlogs' ),
				'section'     => 'section_post_card',
				'settings'    => 'post_card_show_gradient_mask',
				'description' => __( 'Would you like to display the gradient mask on the text?', 'ForBlogs' ),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Toggle_Control( $wp_customize, 'post_card_body_footer_control',
			array(
				'label'       => __( 'Buttons', 'ForBlogs' ),
				'section'     => 'section_post_card',
				'settings'    => 'post_card_show_body_footer',
				'description' => __( 'Would you like to display the buttons in the post body?', 'ForBlogs' ),
			)
		)
	);
}
