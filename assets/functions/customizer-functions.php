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
    'title'         => __( 'Logo' ),
    'priority'      => 30,
    'description'   => 'Upload a logo to replace the default site name in the header',
    'panel'         => 'gensettings_customizer_panel',
    ) );
$wp_customize->add_section( 'typography_section', array(
    'priority'          => 121,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => '',
    'title'             => __( 'Typography' ),
    'panel'             => 'gensettings_customizer_panel',
    ) );
$wp_customize->add_section( 'misc_colors_section', array(
    'priority'          => 121,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => '',
    'title'             => __( 'Misc. Colors' ),
    'panel'             => 'gensettings_customizer_panel',
    ) );
// General Settings
$wp_customize->add_setting( 'themeslug_logo' );
$wp_customize->add_setting( 'typekit_id', array(
    'default'           => '',
    'type'              => 'theme_mod',
    ) );
$wp_customize->add_setting( 'body_text_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'header1_text_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'header2_text_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'header3_text_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'link_text_hover_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'link_text_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'blockquote_text_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'blockquote_border_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'hr_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'button_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'button_hover_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'button_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );

// General Settings Controls
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'oitheme' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
    ) ) );
$wp_customize->add_control( 'typekit_id', array(
        'label'      => __( 'Typekit ID', 'oitheme' ),
        'section'    => 'typography_section',
        'settings'   => 'typekit_id',
        'type'       => 'text',
    ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'body_text_color', array(
        'label'         => __( 'Body', 'oitheme' ),
        'description'   => __( 'Applied to the text inside the &lt;body&gt; text', 'oitheme' ),
        'section'       => 'typography_section',
        'settings'      => 'body_text_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'header1_text_color', array(
        'label'         => __( 'Header 1', 'oitheme' ),
        'description'   => __( 'Applied to the text inside a &lt;h1&gt; tag', 'oitheme' ),
        'section'       => 'typography_section',
        'settings'      => 'header1_text_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'header2_text_color', array(
        'label'         => __( 'Header 2', 'oitheme' ),
        'description'   => __( 'Applied to the text inside a &lt;h2&gt; tag', 'oitheme' ),
        'section'       => 'typography_section',
        'settings'      => 'header2_text_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'header3_text_color', array(
        'label'         => __( 'Header 3', 'oitheme' ),
        'description'   => __( 'Applied to text inside a &lt;h3&gt; tag', 'oitheme' ),
        'section'       => 'typography_section',
        'settings'      => 'header3_text_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'link_text_color', array(
        'label'         => __( 'Link Text', 'oitheme' ),
        'description'   => __( 'Applied the text inside an &lt;a&gt; tag', 'oitheme' ),
        'section'       => 'typography_section',
        'settings'      => 'link_text_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'link_text_hover_color', array(
        'label'         => __( 'Link Text Hover', 'oitheme' ),
        'description'   => __( 'Applied the text inside an &lt;a&gt; tag when the cursor hovers over the link', 'oitheme' ),
        'section'       => 'typography_section',
        'settings'      => 'link_text_hover_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'blockquote_text_color', array(
        'label'         => __( 'Blockquote Text', 'oitheme' ),
        'description'   => __( 'Applied to text inside a &lt;blockquote&gt; tag', 'oitheme' ),
        'section'       => 'typography_section',
        'settings'      => 'blockquote_text_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'blockquote_border_color', array(
        'label'         => __( 'Blockquote Border', 'oitheme' ),
        'description'   => __( 'Applied to the border of a &lt;blockquote&gt; tag', 'oitheme' ),
        'section'       => 'misc_colors_section',
        'settings'      => 'blockquote_border_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'hr_color', array(
        'label'         => __( 'HR Color', 'oitheme' ),
        'description'   => __( 'Applied to the border of a &lt;hr&gt; tag', 'oitheme' ),
        'section'       => 'misc_colors_section',
        'settings'      => 'hr_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'button_bgcolor', array(
        'label'         => __( 'Button Background Color', 'oitheme' ),
        'description'   => __( 'Applied to the background of elements with the button CSS class', 'oitheme' ),
        'section'       => 'misc_colors_section',
        'settings'      => 'button_bgcolor',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'button_hover_bgcolor', array(
        'label'         => __( 'Button Background Hover Color', 'oitheme' ),
        'description'   => __( 'Applied to the background of elements with the button CSS class when the cursor hovers over the button', 'oitheme' ),
        'section'       => 'misc_colors_section',
        'settings'      => 'button_hover_bgcolor',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
        'label'         => __( 'Button Text Color', 'oitheme' ),
        'description'   => __( 'Applied to the text of elements with the button CSS class', 'oitheme' ),
        'section'       => 'misc_colors_section',
        'settings'      => 'button_color',
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
$wp_customize->add_setting( 'header_format', array(
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
$wp_customize->add_setting( 'header_topbar_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'nav_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'nav_links_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'nav_links_hover_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'nav_links_hover_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'subheader_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'subheader_links_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'header_logobar_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
// Header & Navigation Controls
$wp_customize->add_control( 'header_format', array(
    'label'         => __( 'Header Style', 'oitheme' ),
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
    'label'      => __( 'Phone Number', 'oitheme' ),
    'section'    => 'headerels_customizer_section',
    'settings'   => 'headerels_phone',
    'type'       => 'text',
    ) );
$wp_customize->add_control( 'headerels_email', array(
    'label'      => __( 'Email Address', 'oitheme' ),
    'section'    => 'headerels_customizer_section',
    'settings'   => 'headerels_email',
    'type'       => 'text',
    ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'header_topbar_bgcolor', array(
        'label'         => __( 'Header Background Color', 'oitheme' ),
        'description'   => __( 'Applied to the main header bar. When the Boxed Plus format is selected this color is applied to the bar containing the nav', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'header_topbar_bgcolor',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'nav_bgcolor', array(
        'label'         => __( 'Navigation Background Color', 'oitheme' ),
        'description'   => __( 'Applied to the main navigation', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'nav_bgcolor',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'nav_links_color', array(
        'label'         => __( 'Navigation Links Color', 'oitheme' ),
        'description'   => __( 'Applied to the main navigation links text', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'nav_links_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'nav_links_hover_bgcolor', array(
        'label'         => __( 'Navigation Links Hover Color', 'oitheme' ),
        'description'   => __( 'Applied to the background color of main menu items on hover', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'nav_links_hover_bgcolor',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'nav_links_hover_color', array(
        'label'         => __( 'Navigation Text Hover Color', 'oitheme' ),
        'description'   => __( 'Applied to main navigation links text on hover', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'nav_links_hover_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'subheader_bgcolor', array(
        'label'         => __( 'Sub-header Background Color', 'oitheme' ),
        'description'   => __( 'Applied to the sub-header when the Boxed Plus format is selected', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'subheader_bgcolor',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'subheader_links_color', array(
        'label'         => __( 'Sub-header Links Color', 'oitheme' ),
        'description'   => __( 'Applied to the sub-header when the Boxed Plus format is selected', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'subheader_links_color',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'header_logobar_bgcolor', array(
        'label'         => __( 'Logo Bar Background Color', 'oitheme' ),
        'description'   => __( 'Applied to the sub-header when the Boxed Plus format is selected', 'oitheme' ),
        'section'       => 'header_format_section',
        'settings'      => 'header_logobar_bgcolor',
    ) ) );

// Footer Panel
$wp_customize->add_panel( 'footer_customizer_panel', array(
    'title'         => __( 'Footer' ),
    'priority'      => 120,
    ) );

// Footer Sections
$wp_customize->add_section( 'footer_format_section', array(
    'priority'          => 119,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => '',
    'title'             => __( 'Footer Format' ),
    'description'       => 'Select the footer layout',
    'panel'             => 'footer_customizer_panel',
    ) );
$wp_customize->add_section( 'footerels_customizer_section', array(
    'priority'          => 120,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => '',
    'title'             => __( 'Footer Elements' ),
    'description'       => 'Add custom footer copyright information and privacy and/or legal compliance links',
    'panel'             => 'footer_customizer_panel',
    ) );
// Footer Settings
$wp_customize->add_setting( 'footer_format', array(
    'default'   => 'left',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'footer_bgcolor', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'footer_color', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
$wp_customize->add_setting( 'footerels_copyright', array(
    'default'   => '',
    'type'      => 'theme_mod',
    ) );
//Footer Controls
$wp_customize->add_control( 'footer_format', array(
    'label'         => __( 'Footer Style', 'oitheme' ),
    'section'       => 'footer_format_section',
    'settings'      => 'footer_format',
    'type'          => 'select',
    'choices'       => array(
            'left'      => 'Left Aligned',
            'center'    => 'Center Aligned',
            'right'     => 'Right Aligned',
        ),
    ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'footer_bgcolor', array(
        'label'         => __( 'Footer Background Color', 'oitheme' ),
        'description'   => __( 'Applied to the footer', 'oitheme' ),
        'section'       => 'footer_format_section',
        'settings'      => 'footer_bgcolor',
    ) ) );
$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
        'label'         => __( 'Footer Background Color', 'oitheme' ),
        'description'   => __( 'Applied to the footer text', 'oitheme' ),
        'section'       => 'footer_format_section',
        'settings'      => 'footer_color',
    ) ) );
$wp_customize->add_control( 'footels_copyright', array(
    'label'      => __( 'Copyright Info', 'oitheme' ),
    'section'    => 'footerels_customizer_section',
    'settings'   => 'footerels_copyright',
    'type'       => 'text',
    ) );

// Re-organize Customizer Sections
$wp_customize->get_section('title_tagline')->panel = 'gensettings_customizer_panel';
//$wp_customize->remove_section('custom_css');

}

add_action('customize_register', 'register_custom_customizer', 10);

//* Enqueue script to add typekit fonts if you dont use it then comment it our or just add a remove action 
add_action('wp_enqueue_scripts', 'load_typkit_up');
function load_typkit_up() { 
    $typekit_id = get_theme_mod( 'typekit_id' ); ?>

    <script>
      (function(d) {
        var config = {
            // Change the kit id to yours
            kitId: '<?php echo $typekit_id; ?>',
            scriptTimeout: 500,
            async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
<?php }


//Hook Customizer CSS into wp_head
function hook_customizer_css() { ?>
    <?php
    //Create variables from Customer header colors
    //Header color variables
    $header_topbar_bgcolor = get_theme_mod( 'header_topbar_bgcolor' );
    $nav_bgcolor = get_theme_mod( 'nav_bgcolor' );
    $nav_links_color = get_theme_mod( 'nav_links_color' );
    $nav_links_hover_bgcolor = get_theme_mod( 'nav_links_hover_bgcolor' );
    $nav_links_hover_color = get_theme_mod( 'nav_links_hover_color' );
    $subheader_bgcolor = get_theme_mod( 'subheader_bgcolor' );
    $subheader_links_color = get_theme_mod( 'subheader_links_color' );
    $header_logobar_bgcolor = get_theme_mod( 'header_logobar_bgcolor' );
    $header_logobar_bgcolor = get_theme_mod( 'header_logobar_bgcolor' );
    //Footer color variables
    $footer_format = get_theme_mod( 'footer_format' );
    $footer_bgcolor = get_theme_mod( 'footer_bgcolor' );
    $footer_color = get_theme_mod( 'footer_color' );
    $footer_color = get_theme_mod( 'footer_color' );
    //Typography color variables
    $body_text_color = get_theme_mod( 'body_text_color' );
    $header1_text_color = get_theme_mod( 'header1_text_color' );
    $header2_text_color = get_theme_mod( 'header2_text_color' );
    $header3_text_color = get_theme_mod( 'header3_text_color' );
    $link_text_color = get_theme_mod( 'link_text_color' );
    $link_text_hover_color = get_theme_mod( 'link_text_hover_color' );
    //Misc color variables
    $blockquote_text_color = get_theme_mod( 'blockquote_text_color' );
    $blockquote_border_color = get_theme_mod( 'blockquote_border_color' );
    $hr_color = get_theme_mod( 'hr_color' );
    $button_bgcolor = get_theme_mod( 'button_bgcolor' );
    $button_hover_bgcolor = get_theme_mod( 'button_hover_bgcolor' );
    $button_color = get_theme_mod( 'button_color' );
    ?>
    <style>
    /*Customizer CSS*/
    <?php if ( $header_topbar_bgcolor ) : ?>
        .top-bar{ 
            background-color:<?php echo $header_topbar_bgcolor; ?>; 
        }
    <?php endif; ?>
    <?php if ( $nav_bgcolor ) : ?>
        #main-menu .menu {
            background-color:<?php echo $nav_bgcolor; ?>;
        }
    <?php endif; ?>
    <?php if ( $nav_links_color ) : ?>
        #main-menu .menu a {
            color:<?php echo $nav_links_color; ?>;
            transition: all ease-in .2s;
        }
    <?php endif; ?>
    <?php if ( $nav_links_hover_bgcolor ) : ?>
        #main-menu .menu a:hover {
            background-color:<?php echo $nav_links_hover_bgcolor; ?>;
        }
    <?php endif; ?>
    <?php if ( $nav_links_hover_color ) : ?>
        #main-menu .menu a:hover {
            color:<?php echo $nav_links_hover_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $subheader_bgcolor ) : ?>
        .sub-header{ 
            background-color:<?php echo $subheader_bgcolor; ?>; 
        }
    <?php endif; ?>
    <?php if ( $subheader_links_color ) : ?>
        .sub-header a{ 
            color:<?php echo $subheader_links_color; ?>; 
        }
    <?php endif; ?>
    <?php if ( $header_logobar_bgcolor ) : ?>
        .header-logo-bar{ 
            background-color:<?php echo $header_logobar_bgcolor; ?>; 
        }
    <?php endif; ?>
    <?php if ( $footer_format ) : ?>
        .footer{ 
            text-align:<?php echo $footer_format; ?>; 
        }
    <?php endif; ?>
    <?php if ( $footer_bgcolor ) : ?>
        .footer{ 
            background-color:<?php echo $footer_bgcolor; ?>; 
        }
    <?php endif; ?>
    <?php if ( $footer_color ) : ?>
        .footer{ 
            color:<?php echo $footer_color; ?>; 
        }
    <?php endif; ?>
    <?php if( $body_text_color ) : ?>
        body{
            color: <?php echo $body_text_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $header1_text_color ) : ?>
        h1{
            color: <?php echo $header1_text_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $header2_text_color ) : ?>
        h2{
            color: <?php echo $header2_text_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $header3_text_color ) : ?>
        h3{
            color: <?php echo $header3_text_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $link_text_color ) : ?>
        a{
            color: <?php echo $link_text_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $link_text_hover_color ) : ?>
        a:hover{
            color: <?php echo $link_text_hover_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $blockquote_text_color ) : ?>
        blockquote, blockquote p{
            color: <?php echo $blockquote_text_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $blockquote_border_color ) : ?>
        blockquote {
            border-color: <?php echo $blockquote_border_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $hr_color ) : ?>
        hr {
            border-color: <?php echo $hr_color; ?>;
        }
    <?php endif; ?>
    <?php if ( $button_bgcolor ) : ?>
        .button {
            background-color: <?php echo $button_bgcolor; ?>;
        }
    <?php endif; ?>
    <?php if ( $button_hover_bgcolor ) : ?>
        .button:hover {
            background-color: <?php echo $button_hover_bgcolor; ?>;
        }
    <?php endif; ?>
    <?php if ( $button_color ) : ?>
        .button {
            color: <?php echo $button_color; ?>;
        }
    <?php endif; ?>
    </style>
<?php }
add_action('wp_head', 'hook_customizer_css', 10);