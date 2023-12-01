<?php 

function about_customize_register( $wp_customize ) {
    //section for 'about' block
    $wp_customize->add_section('about_section', array(
        'title' => __('About Section', 'WWHNA-LP'),
        'priority' => 31,
    ));

    // Add setting and control for 'About' section heading
    $wp_customize->add_setting('about_heading_text', array(
        'default' => 'Discover lives of women that have shaped our world',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_heading_text', array(
        'label' => __('About Section Heading', 'WWHNA-LP'),
        'section' => 'about_section', 
        'type' => 'text',
    ));

    // Add setting and control for 'About' section paragraph
    $wp_customize->add_setting('about_paragraph_text', array(
        'default' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_paragraph_text', array(
        'label' => __('About Section Paragraph', 'WWHNA-LP'),
        'section' => 'about_section', 
        'type' => 'textarea',
    ));
    
    //font settings

        // Setting and control for .about h1 font color
    $wp_customize->add_setting('about_h1_color', array(
        'default' => 'black',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_h1_color', array(
        'label'    => __('About h1 Color', 'WWHNA-LP'),
        'section'  => 'about_section',
        'settings' => 'about_h1_color',
    )));
        //setting for h1 font family 
    $wp_customize->add_setting('about_h1_font', array(
        'default' => 'Philly Sans', // Default font
        'sanitize_callback' => 'sanitize_text_field', // Sanitize input
    ));

    // Control for About h1 font family
    $wp_customize->add_control('about_h1_font', array(
        'label'    => __('About H1 Font', 'WWHNA-LP'),
        'section'  => 'about_section', 
        'settings' => 'about_h1_font',
        'type'     => 'select',
        'choices'  => array(
            'Arial' => 'Arial',
            'Courier Prime' => 'Courier Prime',
            'Comic Neue' => 'Comic Neue',
            'Georgia' => 'Georgia',
            'Helvetica' => 'Helvetica',
            'Hind' => 'Hind',
            'Nunito' => 'Nunito',
            'Open Sans' => 'Open Sans',
            'Philly Sans' => 'Philly Sans',
            'Rubik Mono One' => 'Rubik Mono One',
            'Times New Roman' => 'Times New Roman',
            
        ),
    ));


    // Setting for about H1 font size
    $wp_customize->add_setting('about_h1_font_size', array(
        'default' => '64', 
        'sanitize_callback' => 'absint', 
    ));

    // çontrol for About H1 font size
    $wp_customize->add_control('about_h1_font_size', array(
        'label'    => __('About H1 Font Size (px)', 'WWHNA-LP'),
        'section'  => 'about_section', 
        'settings' => 'about_h1_font_size',
        'type'     => 'number', 
        'input_attrs' => array(
            'min' => 10,  // Minimum value for font size
            'max' => 200, // Maximum value for font size
            'step' => 1,  // Step for each font size change
        ),
    ));
    //about h1 weight
     $wp_customize->add_setting('about_h1_font_weight', array(
    'default' => '400', // Default font weight
    'sanitize_callback' => 'sanitize_text_field',
));

     $wp_customize->add_control('about_h1_font_weight', array(
        'label'    => __('About H4 Font Weight', 'WWHNA-LP'),
        'section'  => 'about_section', 
        'settings' => 'about_h1_font_weight',
        'type'     => 'select',
        'choices'  => array(
            '300' => 'Light (300)',
            '400' => 'Regular (400)',
            '500' => 'Medium (500)',
            '600' => 'Semi-Bold (600)',
            '700' => 'Bold (700)',
        ),
    ));

          // Setting and control for .about h4 font color
    $wp_customize->add_setting('about_h4_color', array(
        'default' => 'black',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_h4_color', array(
        'label'    => __('About h4 Color', 'WWHNA-LP'),
        'section'  => 'about_section',
        'settings' => 'about_h4_color',
    )));
        //setting for h4 font family 
    $wp_customize->add_setting('about_h4_font', array(
        'default' => 'Courier Prime', // Default font
        'sanitize_callback' => 'sanitize_text_field', // Sanitize input
    ));

    // Control for About h4 font
    $wp_customize->add_control('about_h4_font', array(
        'label'    => __('About H4 Font', 'WWHNA-LP'),
        'section'  => 'about_section', 
        'settings' => 'about_h4_font',
        'type'     => 'select',
        'choices'  => array(
            'Arial' => 'Arial',
            'Courier Prime' => 'Courier Prime',
            'Comic Neue' => 'Comic Neue',
            'Georgia' => 'Georgia',
            'Helvetica' => 'Helvetica',
            'Hind' => 'Hind',
            'Nunito' => 'Nunito',
            'Open Sans' => 'Open Sans',
            'Philly Sans' => 'Philly Sans',
            'Rubik Mono One' => 'Rubik Mono One',
            'Times New Roman' => 'Times New Roman',
            
        ),
    ));


    // Setting for about H4 font size
    $wp_customize->add_setting('about_h4_font_size', array(
        'default' => '20', 
        'sanitize_callback' => 'absint', 
    ));

    // çontrol for About H4 font size
    $wp_customize->add_control('about_h4_font_size', array(
        'label'    => __('About H4 Font Size (px)', 'WWHNA-LP'),
        'section'  => 'about_section', 
        'settings' => 'about_h4_font_size',
        'type'     => 'number', 
        'input_attrs' => array(
            'min' => 10,  // Minimum value for font size
            'max' => 200, // Maximum value for font size
            'step' => 1,  // Step for each font size change
        ),
    ));

    $wp_customize->add_setting('about_h4_font_weight', array(
    'default' => '400', // Default font weight
    'sanitize_callback' => 'sanitize_text_field',
));

     $wp_customize->add_control('about_h4_font_weight', array(
        'label'    => __('About H4 Font Weight', 'WWHNA-LP'),
        'section'  => 'about_section', 
        'settings' => 'about_h4_font_weight',
        'type'     => 'select',
        'choices'  => array(
            '300' => 'Light (300)',
            '400' => 'Regular (400)',
            '500' => 'Medium (500)',
            '600' => 'Semi-Bold (600)',
            '700' => 'Bold (700)',
        ),
    ));
}

add_action('customize_register', 'about_customize_register');

function about_customize_css() {
    ?>
    <style type="text/css">
        .about-text h1 {
            color: <?php echo get_theme_mod('about_h1_color', 'black'); ?>;
            font-family: <?php echo get_theme_mod('about_h1_font', 'Philly Sans'); ?>;
            font-size: <?php echo get_theme_mod('about_h1_font_size', '64'); ?>px;
            font-weight: <?php echo get_theme_mod('about_h1_weight', '400'); ?>;
        }

        .about-text h4{
            color: <?php echo get_theme_mod('about_h4_color', 'black'); ?>;
            font-family: <?php echo get_theme_mod('about_h4_font', 'Courier Prime'); ?>;
            font-size: <?php echo get_theme_mod('about_h4_font_size', '20'); ?>px;
            font-weight: <?php echo get_theme_mod('about_h4_weight', '400'); ?>;
        }

       
    </style>
    <?php
}
add_action('wp_head', 'about_customize_css');
?>
