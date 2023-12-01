<?php

function cards_customize_register($wp_customize) {
    // Add a section for 'Custom Cards'
    $wp_customize->add_section('custom_cards_section', array(
        'title' => __('Custom Cards Section', 'WWHNA-LP'),
        'priority' => 35,
    ));

    // Setting for the number of card sections
    $wp_customize->add_setting('number_of_card_sections', array(
        'default' => 4,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('number_of_card_sections', array(
        'label' => __('Number of Card Sections', 'WWHNA-LP'),
        'section' => 'custom_cards_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 10,
        ),
    ));

            // Setting and control for .card-section h3 font color
$wp_customize->add_setting('card_section_h3_color', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'card_section_h3_color', array(
    'label'    => __('Card Section H3 Color', 'WWHNA-LP'),
    'section'  => 'custom_cards_section',
    'settings' => 'card_section_h3_color',
)));

// Setting for .card-section h3 font family
$wp_customize->add_setting('card_section_h3_font', array(
    'default' => 'Hind',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('card_section_h3_font', array(
    'label'    => __('Card Section H3 Font', 'WWHNA-LP'),
    'section'  => 'custom_cards_section', 
    'settings' => 'card_section_h3_font',
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

// Setting for .card-section h3 font size (in pixels)
$wp_customize->add_setting('card_section_h3_font_size', array(
    'default' => '48', // Default font size in pixels
    'sanitize_callback' => 'absint', // Ensures the input is an absolute integer
));

// Control for .card-section h3 font size
$wp_customize->add_control('card_section_h3_font_size', array(
    'label'    => __('Card Section H3 Font Size (px)', 'textdomain'),
    'section'  => 'card_section', 
    'settings' => 'card_section_h3_font_size',
    'type'     => 'number', // Number input for pixel value
    'input_attrs' => array(
        'min' => 10,  // Minimum value for font size
        'max' => 100, // Maximum value for font size
        'step' => 1,  // Step for each font size change
    ),
));


// Setting for .card-section h3 font weight
$wp_customize->add_setting('card_section_h3_font_weight', array(
    'default' => '600',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('card_section_h3_font_weight', array(
    'label'    => __('Card Section H3 Font Weight', 'WWHNA-LP'),
    'section'  => 'custom_cards_section', 
    'settings' => 'card_section_h3_font_weight',
    'type'     => 'select',
    'choices'  => array(
        '300' => 'Light (300)',
        '400' => 'Regular (400)',
        '500' => 'Medium (500)',
        '600' => 'Semi-Bold (600)',
        '700' => 'Bold (700)',
    ),
));

    // Dynamically add settings and controls for each card section
    for ($i = 0; $i < get_theme_mod('number_of_card_sections', 4); $i++) {
        // Title setting
        $wp_customize->add_setting("card_section_{$i}_title", array(
            'default' => "Section {$i}",
            'transport' => 'refresh',
        ));

        // Title control
        $wp_customize->add_control("card_section_{$i}_title", array(
            'label' => __("Section {$i} Title", 'WWHNA-LP'),
            'section' => 'custom_cards_section',
            'type' => 'text',
        ));




        // Image for the front of the card
        $wp_customize->add_setting("custom_image_card_{$i}_blue", array(
            'default' => get_template_directory_uri() . '/images/wwhna-logo-grid-card-dummy-blue.png',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "custom_image_card_{$i}_blue_control", array(
            'label' => __("Section {$i} Card Front Image", 'WWHNA-LP'),
            'section' => 'custom_cards_section',
            'settings' => "custom_image_card_{$i}_blue",
        )));

        // Image for the back of the card
        $wp_customize->add_setting("custom_image_card_{$i}_orange", array(
            'default' => get_template_directory_uri() . '/images/wwhna-logo-grid-card-2-dummy-orange.png',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "custom_image_card_{$i}_orange_control", array(
            'label' => __("Section {$i} Card Back Image", 'WWHNA-LP'),
            'section' => 'custom_cards_section',
            'settings' => "custom_image_card_{$i}_orange",
        )));


        // Background color setting
        $wp_customize->add_setting("card_section_{$i}_bg_color", array(
            'default' => '#df9ac1',
            'transport' => 'refresh',
        ));

        // Background color control
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "card_section_{$i}_bg_color_control", array(
            'label' => __("Section {$i} Background Color", 'WWHNA-LP'),
            'section' => 'custom_cards_section',
            'settings' => "card_section_{$i}_bg_color",
        )));


    }
}

add_action('customize_register', 'cards_customize_register');

function card_customize_css() {
    ?>
    <style type="text/css">
        .card-section h3 {
            color: <?php echo get_theme_mod('card_section_h3_color', '#000000'); ?>;
            font-family: <?php echo get_theme_mod('card_section_h3_font', 'Hind'); ?>;
            font-size: <?php echo get_theme_mod('card_section_h3_font_size', '48'); ?>px;
            font-weight: <?php echo get_theme_mod('card_section_h3_font_weight', '600'); ?>;
}


    </style>
    <?php
}
add_action('wp_head', 'card_customize_css');
