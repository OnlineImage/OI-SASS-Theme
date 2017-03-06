<?php
// Customizer functions
function register_custom_customizer( $wp_customize ) {
// General Settings Panel
$wp_customize->add_panel( 'gensettings_customizer_panel', array(
    'title'         => __( 'General Settings' ),
    'priority'      => 20,
    ) );
// General Settings Sections
$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
    'panel'         => 'gensettings_customizer_panel',
    ) );
// General Settings
$wp_customize->add_setting( 'themeslug_logo' );
// General Settings Controls
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
    ) ) );

// Header & Navigation Panel
$wp_customize->add_panel( 'header_customizer_panel', array(
    'title'         => __( 'Header' ),
    'priority'      => 21,
    ) );
// Header & Navigation Sections
$wp_customize->add_section( 'header_format_section', array(
    'priority'          => 119,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => '',
    'title'             => __( 'Header Format' ),
    'description'       => 'Select the header layout',
    'panel'             => 'header_customizer_panel',
    ) );
$wp_customize->add_section( 'headerels_customizer_section', array(
    'priority'          => 120,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => '',
    'title'             => __( 'Header Elements' ),
    'description'       => 'Add phone and/or email here to be displayed in the header',
    'panel'             => 'header_customizer_panel',
    ) );
// Header & Navigation Settings
$wp_customize->add_setting( 'header_format', array (
    'default'   => 'topbar',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'headerels_phone', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'headerels_email', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
// Header & Navigation Controls
$wp_customize->add_control( 'header_format', array(
    'label'         => __( 'Header Style' ),
    'section'       => 'header_format_section',
    'settings'      => 'header_format',
    'type'          => 'select',
    'choices'       => array(
            'topbar'            => 'Top Bar',
            'title-bar'         => 'Title Bar',
            'offcanvas'         => 'Off Canvas',
            'offcanvas-topbar'  => 'Off Canvas Top Bar',
            'boxed-plus'        => 'Boxed Plus',
        ),
    ) );
$wp_customize->add_control( 'headerels_phone', array(
    'label'      => __( 'Phone Number' ),
    'section'    => 'headerels_customizer_section',
    'settings'   => 'headerels_phone',
    'type'       => 'text',
    ) );
$wp_customize->add_control( 'headerels_email', array(
    'label'      => __( 'Email Address' ),
    'section'    => 'headerels_customizer_section',
    'settings'   => 'headerels_email',
    'type'       => 'text',
    ) );

// Footer Panel
$wp_customize->add_panel( 'footer_customizer_panel', array(
    'title'         => __( 'Footer' ),
    'priority'      => 120,
    ) );

// Footer Sections
$wp_customize->add_section( 'footerels_customizer_section', array(
    'priority'          => 120,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => '',
    'title'             => __( 'Footer Elements' ),
    'description'       => 'Add custom footer copyright information and privacy and/or legal compliance links',
    'panel'             => 'footer_customizer_panel',
    ) );
// Footer Settings
$wp_customize->add_setting( 'footerels_copyright', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
//Footer Controls
$wp_customize->add_control( 'footels_copyright', array(
    'label'      => __( 'Copyright Info', 'customizer_footels' ),
    'section'    => 'footerels_customizer_section',
    'settings'   => 'footerels_copyright',
    'type'       => 'text',
    ) );


//Custom CSS Section
$wp_customize->add_section( 'wp_custom_css_section', array(
    'priority' => 10,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __( 'Custom CSS', 'customizer-custom-css' ),
    'description' => '',
    ) );
//Custom CSS Setting
$wp_customize->add_setting( 'wp_custom_css', array(
    'default' => '',
    'type' => 'theme_mod',
    'transport' => 'postMessage',
    'sanitize_callback'    => 'wp_kses',
    ) );
//Custom CSS Control
$wp_customize->add_control(
    'wp_custom_css', array(
        'label'      => __( 'Add your custom CSS', 'customizer-custom-css' ),
        'section'    => 'wp_custom_css_section',
        'settings'   => 'wp_custom_css',
        'type'       => 'textarea',
    ) );

// Re-organize Customizer Sections
$wp_customize->get_section('title_tagline')->panel = 'gensettings_customizer_panel';
$wp_customize->remove_section('custom_css');

}

add_action('customize_register', 'register_custom_customizer', 10);