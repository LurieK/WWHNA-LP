<?php
function donate_customize_register($wp_customize) {

    $wp_customize->add_section("Donations", array(
        "title"=> __("Donations","WWHNA-LP"),
        "priority"=> 31,
        ));

$wp_customize->add_setting('donate_button_url', array(
    'default' => '',
    'transport' => 'refresh',
));

$wp_customize->add_control('donate_button_url_control', array(
    'label' => __('Donate Button URL', 'WWHNA-LP'),
    'section' => 'Donations', 
    'settings' => 'donate_button_url',
    'type' => 'url',
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
$wp_customize->add_setting('donate_header_text', array(
        'default' => 'Lorem ipsum dolor sit amet',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    // Add control for the header text
    $wp_customize->add_control('donate_header_text_control', array(
        'label' => __('Header Text', 'WWHNA-LP'),
        'section' => 'Donations',
        'settings' => 'donate_header_text',
        'type' => 'text',
    ));


// Donate-Text H1 Font Color
$wp_customize->add_setting('donate_text_h1_color', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'donate_text_h1_color', array(
    'label' => __('Donate Text H1 Color', 'WWHNA-LP'),
    'section' => 'Donations',
    'settings' => 'donate_text_h1_color',
)));

    // Donate-Text H1 Font Family
$wp_customize->add_setting('donate_text_h1_font', array(
    'default' => 'Philly Sans',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('donate_text_h1_font', array(
    'label' => __('Donate Text H1 Font Family', 'WWHNA-LP'),
    'section' => 'Donations', // Make sure to use the appropriate section
    'settings' => 'donate_text_h1_font',
    'type' => 'select',
    'choices' => $font_choices,
));


// Donate-Text H1 Font Size
$wp_customize->add_setting('donate_text_h1_size', array(
    'default' => '32',
    'sanitize_callback' => 'absint',
));
$wp_customize->add_control('donate_text_h1_size', array(
    'label' => __('Donate Text H1 Font Size (px)', 'WWHNA-LP'),
    'section' => 'Donations',
    'settings' => 'donate_text_h1_size',
    'type' => 'number',
    'input_attrs' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1,
    ),
));

// Donate-Text H1 Font Weight
$wp_customize->add_setting('donate_text_h1_weight', array(
    'default' => '600',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('donate_text_h1_weight', array(
    'label' => __('Donate Text H1 Font Weight', 'WWHNA-LP'),
    'section' => 'Donations',
    'settings' => 'donate_text_h1_weight',
    'type' => 'select',
    'choices' => array(
        '300' => 'Light (300)',
        '400' => 'Regular (400)',
        '500' => 'Medium (500)',
        '600' => 'Semi-Bold (600)',
        '700' => 'Bold (700)',
    ),
));


    // Add setting for the sub-header text
    $wp_customize->add_setting('donate_subheader_text', array(
        'default' => 'Consectetur Adipiscing Elit',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    // Add control for the sub-header text
    $wp_customize->add_control('donate_subheader_text_control', array(
        'label' => __('Sub-Header Text', 'WWHNA-LP'),
        'section' => 'Donations',
        'settings' => 'donate_subheader_text',
        'type' => 'text',
    ));

// Donate-Text H3 Font Color
$wp_customize->add_setting('donate_text_h3_color', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'donate_text_h3_color', array(
    'label' => __('Donate Text H3 Color', 'WWHNA-LP'),
    'section' => 'Donations',
    'settings' => 'donate_text_h3_color',
)));

    // Donate-Text H3 Font Family
$wp_customize->add_setting('donate_text_h3_font', array(
    'default' => 'Hind',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('donate_text_h3_font', array(
    'label' => __('Donate Text H3 Font Family', 'WWHNA-LP'),
    'section' => 'Donations',
    'settings' => 'donate_text_h3_font',
    'type' => 'select',
    'choices' => $font_choices,
));

// Donate-Text H3 Font Size
$wp_customize->add_setting('donate_text_h3_size', array(
    'default' => '48',
    'sanitize_callback' => 'absint',
));
$wp_customize->add_control('donate_text_h3_size', array(
    'label' => __('Donate Text H3 Font Size (px)', 'WWHNA-LP'),
    'section' => 'Donations',
    'settings' => 'donate_text_h3_size',
    'type' => 'number',
    'input_attrs' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1,
    ),
));


// Donate-Text H3 Font Weight
$wp_customize->add_setting('donate_text_h3_weight', array(
    'default' => '700',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('donate_text_h3_weight', array(
    'label' => __('Donate Text H3 Font Weight', 'WWHNA-LP'),
    'section' => 'Donations',
    'settings' => 'donate_text_h3_weight',
    'type' => 'select',
    'choices' => array(
        '300' => 'Light (300)',
        '400' => 'Regular (400)',
        '500' => 'Medium (500)',
        '600' => 'Semi-Bold (600)',
        '700' => 'Bold (700)',
    ),
));


    // Add setting for the button text
    $wp_customize->add_setting('donate_button_text', array(
        'default' => 'Donate',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for the button text
    $wp_customize->add_control('donate_button_text_control', array(
        'label' => __('Button Text', 'WWHNA-LP'),
        'section' => 'Donations',
        'settings' => 'donate_button_text',
        'type' => 'text',
    ));
    
}
add_action('customize_register', 'donate_customize_register');


function donate_customize_css() {
    ?>
    <style type="text/css">
        .donate-text h1 {
            font-family: <?php echo get_theme_mod('donate_text_h1_font', 'Philly Sans'); ?>;
            font-size: <?php echo get_theme_mod('donate_text_h1_size', '32'); ?>px;
            font-weight: <?php echo get_theme_mod('donate_text_h1_weight', '600'); ?>;
            color: <?php echo get_theme_mod('donate_text_h1_color', '#000000'); ?>;
        }

        .donate-text h3 {
            font-family: <?php echo get_theme_mod('donate_text_h3_font', 'Hind'); ?>;
            font-size: <?php echo get_theme_mod('donate_text_h3_size', '48'); ?>px;
            font-weight: <?php echo get_theme_mod('donate_text_h3_weight', '700'); ?>;
            color: <?php echo get_theme_mod('donate_text_h3_color', '#000000'); ?>;
        }




       
    </style>
    <?php
}
add_action('wp_head', 'donate_customize_css');

?>