<?php 

function artist_customize_register($wp_customize) {


    $wp_customize->add_section("artist_section", array(
    "title"=> __("Artist Section", "WWHNA-LP"),
    "priority"=> 31,
    ));

    // Artist Title
    $wp_customize->add_setting('artist_title', array(
        'default' => 'Meet the Artist',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('artist_title_control', array(
        'label' => __('Artist Section Title', 'textdomain'),
        'section' => 'artist_section',
        'settings' => 'artist_title',
        'type' => 'text',
    ));


    $font_choices = array(
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
    );

    // Artist-Text H1 Color
    $wp_customize->add_setting('artist_text_h1_color', array(
        'default' => '#FFD52D',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'artist_text_h1_color', array(
        'label' => __('Artist Text H1 Color', 'WWHNA-LP'),
        'section' => 'artist_section',
        'settings' => 'artist_text_h1_color',
    )));

    // Artist-Text H1 Font Family
    $wp_customize->add_setting('artist_text_h1_font', array(
        'default' => 'Philly Sans',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('artist_text_h1_font', array(
        'label' => __('Artist Text H1 Font Family', 'WWHNA-LP'),
        'section' => 'artist_section',
        'settings' => 'artist_text_h1_font',
        'type' => 'select',
        'choices' => $font_choices,
    ));

    // Artist-Text H1 Font Size
    $wp_customize->add_setting('artist_text_h1_size', array(
        'default' => '60',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('artist_text_h1_size', array(
        'label' => __('Artist Text H1 Font Size (px)', 'WWHNA-LP'),
        'section' => 'artist_section',
        'settings' => 'artist_text_h1_size',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 10,
            'max' => 100,
            'step' => 1,
        ),
    ));

    // Artist-Text H1 Font Weight
    $wp_customize->add_setting('artist_text_h1_weight', array(
        'default' => '400',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('artist_text_h1_weight', array(
        'label' => __('Artist Text H1 Font Weight', 'WWHNA-LP'),
        'section' => 'artist_section',
        'settings' => 'artist_text_h1_weight',
        'type' => 'select',
        'choices' => array(
            '300' => 'Light (300)',
            '400' => 'Regular (400)',
            '500' => 'Medium (500)',
            '600' => 'Semi-Bold (600)',
            '700' => 'Bold (700)',
        ),
    ));

    // Artist Description
    $wp_customize->add_setting('artist_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('artist_description_control', array(
        'label' => __('Artist Description', 'textdomain'),
        'section' => 'artist_section',
        'settings' => 'artist_description',
        'type' => 'textarea',
    ));

    // Artist-Text H4 Color
$wp_customize->add_setting('artist_text_h4_color', array(
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'artist_text_h4_color', array(
    'label' => __('Artist Text H4 Color', 'WWHNA-LP'),
    'section' => 'artist_section',
    'settings' => 'artist_text_h4_color',
)));

// Artist-Text H4 Font Family
$wp_customize->add_setting('artist_text_h4_font', array(
    'default' => 'Courier Prime',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('artist_text_h4_font', array(
    'label' => __('Artist Text H4 Font Family', 'WWHNA-LP'),
    'section' => 'artist_section',
    'settings' => 'artist_text_h4_font',
    'type' => 'select',
    'choices' => $font_choices,
));

// Artist-Text H4 Font Size
$wp_customize->add_setting('artist_text_h4_size', array(
    'default' => '20',
    'sanitize_callback' => 'absint',
));
$wp_customize->add_control('artist_text_h4_size', array(
    'label' => __('Artist Text H4 Font Size (px)', 'WWHNA-LP'),
    'section' => 'artist_section',
    'settings' => 'artist_text_h4_size',
    'type' => 'number',
    'input_attrs' => array(
        'min' => 10,
        'max' => 50,
        'step' => 1,
    ),
));

// Artist-Text H4 Font Weight
$wp_customize->add_setting('artist_text_h4_weight', array(
    'default' => '600',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('artist_text_h4_weight', array(
    'label' => __('Artist Text H4 Font Weight', 'WWHNA-LP'),
    'section' => 'artist_section',
    'settings' => 'artist_text_h4_weight',
    'type' => 'select',
    'choices' => array(
        '300' => 'Light (300)',
        '400' => 'Regular (400)',
        '500' => 'Medium (500)',
        '600' => 'Semi-Bold (600)',
        '700' => 'Bold (700)',
    ),
));



}

add_action('customize_register', 'artist_customize_register');

function artist_customize_css() {
    ?>
    <style type="text/css">
        .artist-text h1 {
            color: <?php echo get_theme_mod('artist_text_h1_color', '#FFD52D'); ?>;
            font-family: <?php echo get_theme_mod('artist_text_h1_font', 'Philly Sans'); ?>;
            font-size: <?php echo get_theme_mod('artist_text_h1_size', '60');?>px;
            font-weight: <?php echo get_theme_mod('artist_text_h1_font_weight', '400'); ?>  
        }

        .artist-text h4 {
            color: <?php echo get_theme_mod('artist_text_h4_color', '#FFFFFF'); ?>;
            font-family: <?php echo get_theme_mod('artist_text_h4_font', 'Courier Prime'); ?>;
            font-size: <?php echo get_theme_mod('artist_text_h4_size', '20'); ?>px;
            font-weight: <?php echo get_theme_mod('artist_text_h4_weight', '600'); ?>;
        }





       
    </style>
    <?php
}
add_action('wp_head', 'artist_customize_css');

