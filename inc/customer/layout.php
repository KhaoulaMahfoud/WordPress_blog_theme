<?php
/**
 * ForBlogs theme customizer: Layout
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.3.0
 * @version 1.3.0
 */


function ForBlogs_customize_layout( $wp_customize ) {

    /**
     * Panel
     */
    $wp_customize->add_panel( 'panel_ForBlogs_layout',
        array(
            'title'    => __( 'Layout', 'ForBlogs' ),
            'priority' => 10,
        )
    );

    /**
     * Section
     */
	$wp_customize->add_section( 'section_ForBlogs_layout_home',
		array(
			'title'      => __( 'Homepage', 'ForBlogs' ),
			'priority'   => 10,
			'panel'      => 'panel_ForBlogs_layout',
		)
	);

	$wp_customize->add_section( 'section_ForBlogs_layout_archive',
		array(
			'title'      => __( 'Archive', 'ForBlogs' ),
			'priority'   => 10,
			'panel'      => 'panel_ForBlogs_layout',
		)
	);

	$wp_customize->add_section( 'section_ForBlogs_layout_post',
		array(
			'title'      => __( 'Post', 'ForBlogs' ),
			'priority'   => 10,
			'panel'      => 'panel_ForBlogs_layout',
		)
	);

	$wp_customize->add_section( 'section_ForBlogs_layout_footer',
		array(
			'title'      => __( 'Footer', 'ForBlogs' ),
			'priority'   => 10,
			'panel'      => 'panel_ForBlogs_layout',
		)
	);
    
    /**
     * Setting
     */
    $wp_customize->add_setting( 'layout_post_sidebar_location_home',
        array( 
            'default'           => 'right', 
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_setting( 'layout_post_sidebar_location_archive',
        array( 
            'default'           => 'right', 
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_setting( 'layout_post_sidebar_location_post',
        array( 
            'default'           => 'right', 
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_setting( 'layout_cols_per_row_home',
        array( 
            'default'           => '3', 
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_setting( 'layout_cols_per_row_archive',
        array( 
            'default'           => '3', 
            'sanitize_callback' => 'sanitize_text_field',
        )
	);

	$wp_customize->add_setting( 'layout_cols_footer_icon_size',
		array( 
			'default'           => 'sm', 
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	
    $wp_customize->add_setting( 'layout_cols_footer_location',
        array( 
            'default'           => '1', 
            'sanitize_callback' => 'sanitize_text_field',
        )
	);

    /**
     * Control
     */
    $wp_customize->add_control(
		new Customize_Image_Radio_Control( $wp_customize, 'layout_sidebar_location_home_control',
			array(
				'label'       => __( 'Sidebar Location', 'ForBlogs' ),
				'section'     => 'section_ForBlogs_layout_home',
				'settings'    => 'layout_post_sidebar_location_home',
				'type'        => 'radio',
				'description' => __( 'Choose a preferred layout for desktop version.', 'ForBlogs' ),
				'choices'     => array(
					'right' => get_template_directory_uri() . '/inc/assets/images/layout_sidebar_right.png',
					'left'  => get_template_directory_uri() . '/inc/assets/images/layout_sidebar_left.png',
				),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Image_Radio_Control( $wp_customize, 'layout_sidebar_location_archive_control',
			array(
				'label'       => __( 'Sidebar Location', 'ForBlogs' ),
				'section'     => 'section_ForBlogs_layout_archive',
				'settings'    => 'layout_post_sidebar_location_archive',
				'type'        => 'radio',
				'description' => __( 'Choose a preferred layout for desktop version.', 'ForBlogs' ),
				'choices'     => array(
					'right' => get_template_directory_uri() . '/inc/assets/images/layout_sidebar_right.png',
					'left'  => get_template_directory_uri() . '/inc/assets/images/layout_sidebar_left.png',
				),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Image_Radio_Control( $wp_customize, 'layout_cols_per_row_home_control',
			array(
				'label'       => __( 'Columns', 'ForBlogs' ),
				'section'     => 'section_ForBlogs_layout_home',
				'settings'    => 'layout_cols_per_row_home',
				'type'        => 'radio',
				'description' => __( 'Adjust the number of columns per row.', 'ForBlogs' ),
				'choices'     => array(
					'3'  => get_template_directory_uri() . '/inc/assets/images/layout_3cols.png',
					'2'  => get_template_directory_uri() . '/inc/assets/images/layout_2cols.png',
					'1'  => get_template_directory_uri() . '/inc/assets/images/layout_1cols.png',
				),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Image_Radio_Control( $wp_customize, 'layout_cols_per_row_archive_control',
			array(
				'label'       => __( 'Columns', 'ForBlogs' ),
				'section'     => 'section_ForBlogs_layout_archive',
				'settings'    => 'layout_cols_per_row_archive',
				'type'        => 'radio',
				'description' => __( 'Adjust the number of columns per row.', 'ForBlogs' ),
				'choices'     => array(
					'3'  => get_template_directory_uri() . '/inc/assets/images/layout_3cols.png',
					'2'  => get_template_directory_uri() . '/inc/assets/images/layout_2cols.png',
					'1'  => get_template_directory_uri() . '/inc/assets/images/layout_1cols.png',
				),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Image_Radio_Control( $wp_customize, 'layout_sidebar_location_post_control',
			array(
				'label'       => __( 'Sidebar Location', 'ForBlogs' ),
				'section'     => 'section_ForBlogs_layout_post',
				'settings'    => 'layout_post_sidebar_location_post',
				'type'        => 'radio',
				'description' => __( 'Choose a preferred layout for desktop version.', 'ForBlogs' ),
				'choices'     => array(
					'right' => get_template_directory_uri() . '/inc/assets/images/layout_sidebar_right.png',
					'left'  => get_template_directory_uri() . '/inc/assets/images/layout_sidebar_left.png',
				),
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control( $wp_customize, 'layout_cols_footer_icon_size_control',
			array(
				'label'       => __( 'Social Icon Size', 'ForBlogs' ),
				'section'     => 'section_ForBlogs_layout_footer',
				'settings'    => 'layout_cols_footer_icon_size',
				'type'        => 'radio',
				'description' => __( 'Choose a preferred icon size.', 'ForBlogs' ),
				'choices'     => array(
					'sm' => __( 'Small - 32 x 32', 'ForBlogs' ),
					'md' => __( 'Medium - 40 x 40', 'ForBlogs' ),
					'lg' => __( 'Large - 48 x 48', 'ForBlogs' ),
					'xl' => __( 'Extra large - 64 x 64', 'ForBlogs' ),
				),
			)
		)
	);

	$wp_customize->add_control(
		new Customize_Image_Radio_Control( $wp_customize, 'layout_footer_location_post_control',
			array(
				'label'       => __( 'Footer Location', 'ForBlogs' ),
				'section'     => 'section_ForBlogs_layout_footer',
				'settings'    => 'layout_cols_footer_location',
				'type'        => 'radio',
				'description' => __( 'Choose a preferred layout for footer section.', 'ForBlogs' ),
				'choices'     => array(
					'1' => get_template_directory_uri() . '/inc/assets/images/layout_footer_1.png',
					'2' => get_template_directory_uri() . '/inc/assets/images/layout_footer_2.png',
					'3' => get_template_directory_uri() . '/inc/assets/images/layout_footer_3.png',
					'4' => get_template_directory_uri() . '/inc/assets/images/layout_footer_4.png',
					'5' => get_template_directory_uri() . '/inc/assets/images/layout_footer_5.png',
					'6' => get_template_directory_uri() . '/inc/assets/images/layout_footer_6.png',
					'7' => get_template_directory_uri() . '/inc/assets/images/layout_footer_7.png',
				),
			)
		)
	);
}
