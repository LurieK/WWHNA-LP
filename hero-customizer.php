<?php

/**
 * Summary of hero_customize_register
 * @param mixed $wp_customize
 * @return void
 */
function hero_customize_register($wp_customize)
{
    // Add a section for 'hero'
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'WWHNA-LP'),
        'priority' => 31,
    ));

    // Add settings and controls for bubble texts
    $bubble_texts = array(
        'greta_bubble_text' => '',
        'rosa_bubble_text' => '',
        'lux_bubble_text' => '',
        // Add more bubble texts as needed
    );

    foreach ($bubble_texts as $key => $default_text) {
        $wp_customize->add_setting($key, array(
            'default' => $default_text,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control($key, array(
            'label' => __(str_replace('_', ' ', ucfirst($key)), 'WWHNA-LP'),
            'section' => 'hero_section', 
            'type' => 'text',
        ));
    }

    // Add setting and control for the h1 text
    $wp_customize->add_setting('hero_text', array(
        'default' => 'A Feminist Board Game for Everyone',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('hero_text', array(
        'label' => __('Hero Text', 'WWHNA-LP'),
        'section' => 'hero_section', 
        'type' => 'text',
    ));

    // Setting and control for the a tag text
    $wp_customize->add_setting('order_cta_text', array(
        'default' => 'Order Today',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('order_cta_text', array(
        'label' => __('Order CTA Text', 'WWHNA-LP'),
        'section' => 'hero_section', 
        'type' => 'text',
    ));

    // Setting and control for the a tag href attribute
    $wp_customize->add_setting('order_cta_link', array(
        'default' => '#order',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('order_cta_link', array(
        'label' => __('Order CTA Link', 'WWHNA-LP'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    // Setting and control for .hero h1 font color
    $wp_customize->add_setting('hero_h1_color', array(
        'default' => '#ffd52d',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_h1_color', array(
        'label'    => __('Hero h1 Color', 'WWHNA-LP'),
        'section'  => 'hero_section',
        'settings' => 'hero_h1_color',
    )));
    //setting for h1 font family 
    $wp_customize->add_setting('hero_h1_font', array(
        'default' => 'Philly Sans', // Default font
        'sanitize_callback' => 'sanitize_text_field', // Sanitize input
    ));

    // Control for Hero h1 font
    $wp_customize->add_control('hero_h1_font', array(
        'label'    => __('Hero H1 Font', 'WWHNA-LP'),
        'section'  => 'hero_section', 
        'settings' => 'hero_h1_font',
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



    // Setting for Hero H1 font size
    $wp_customize->add_setting('hero_h1_font_size', array(
        'default' => '93', // Default font size (in pixels)
        'sanitize_callback' => 'absint', 
    ));

    // çontrol for Hero H1 font size
    $wp_customize->add_control('hero_h1_font_size', array(
        'label'    => __('Hero H1 Font Size (px)', 'WWHNA-LP'),
        'section'  => 'hero_section', 
        'settings' => 'hero_h1_font_size',
        'type'     => 'number', 
        'input_attrs' => array(
            'min' => 10,  // Minimum value for font size
            'max' => 200, // Maximum value for font size
            'step' => 1,  // Step for each font size change
        ),
    ));

    $wp_customize->add_setting('hero_h1_font_weight', array(
    'default' => '400', // Default font weight
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('hero_h1_font_weight', array(
        'label'    => __('Hero Text H1 Font Weight', 'WWHNA-LP'),
        'section'  => 'hero_section', 
        'settings' => 'hero_h1_font_weight',
        'type'     => 'select',
        'choices'  => array(
            '300' => 'Light (300)',
            '400' => 'Regular (400)',
            '500' => 'Medium (500)',
            '600' => 'Semi-Bold (600)',
            '700' => 'Bold (700)',
        ),
    ));
        //  setting for bubble-text h5 color
    $wp_customize->add_setting('bubble_text_h5_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //  control for bubble-text h5 color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bubble_text_h5_color', array(
        'label'    => __('Bubble Text H5 Color', 'WWHNA-LP'),
        'section'  => 'hero_section',
        'settings' => 'bubble_text_h5_color',
    )));
    
    //customizer for bubble-text family
   $wp_customize->add_setting('bubble_text_h5_font_family', array(
        'default' => 'Courier Prime',
        'sanitize_callback' => 'sanitize_text_field', 
    ));

    // bubble-text font family
    $wp_customize->add_control('bubble_text_h5_font_family', array(
        'label'    => __('Bubble Text H5 Font Family', 'WWHNA-LP'),
        'section'  => 'hero_section', 
        'settings' => 'bubble_text_h5_font_family',
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

     //setting for bubble-text h5 font size
    $wp_customize->add_setting('bubble_text_h5_font_size', array(
        'default' => '16',
        'sanitize_callback' => 'absint',
    ));

    // control for bubble-text h5 font size
    $wp_customize->add_control('bubble_text_h5_font_size', array(
        'label'    => __('Bubble Text H5 Font Size (px)', 'WWHNA-LP'),
        'section'  => 'hero_section',
        'settings' => 'bubble_text_h5_font_size',
        'type'     => 'number',
        'input_attrs' => array(
            'min' => 10,
            'max' => 50,
            'step' => 1,
        ),
    ));

    //bubble text font weight
    $wp_customize->add_setting('bubble_text_h5_font_weight', array(
    'default' => '400', // Default font weight
    'sanitize_callback' => 'sanitize_text_field',
));

     $wp_customize->add_control('bubble_text_h5_font_weight', array(
        'label'    => __('Bubble Text H5 Font Weight', 'WWHNA-LP'),
        'section'  => 'hero_section', 
        'settings' => 'bubble_text_h5_font_weight',
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

add_action('customize_register', 'hero_customize_register');





function hero_customize_css() {
    ?>
    <style type="text/css">
        .hero h1 {
            color: <?php echo get_theme_mod('hero_h1_color', '#ffd52d'); ?>;
            font-family: <?php echo get_theme_mod('hero_h1_font', 'Philly Sans'); ?>;
            font-size: <?php echo get_theme_mod('hero_h1_font_size', '93'); ?>px;
            font-weight: <?php echo get_theme_mod('hero_h1_font_weight', '400'); ?>
        }

        .bubble-text h5 {
            font-family: <?php echo get_theme_mod('bubble_text_h5_font_family', 'Courier Prime'); ?>;
            font-size: <?php echo get_theme_mod('bubble_text_h5_font_size', '16'); ?>px;
            color: <?php echo get_theme_mod('bubble_text_h5_color', '#000000'); ?>;
            font-weight: <?php echo get_theme_mod('bubble_text_h5_font_weight', '400'); ?>
        }



       
    </style>
    <?php
}
add_action('wp_head', 'hero_customize_css');

?>
