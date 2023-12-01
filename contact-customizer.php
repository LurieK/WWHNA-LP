<?php  
function contact_customize_register($wp_customize) {
    // Add a new section in the WordPress customizer
    $wp_customize->add_section('contact_section', array(
        'title' => __('Contact Information', 'WWHNA-LP'),
        'priority' => 40,
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

    // .contact h1 Font Color
    $wp_customize->add_setting('contact_h1_color', array(
        'default' => '#FFFFFF', // White
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'contact_h1_color', array(
        'label' => __('Contact H1 Color', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_h1_color',
    )));

    // .contact h1 Font Family
    $wp_customize->add_setting('contact_h1_font_family', array(
        'default' => 'Philly Sans',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_h1_font_family', array(
        'label' => __('Contact H1 Font Family', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_h1_font_family',
        'type' => 'select',
        'choices' => $font_choices, // Make sure $font_choices array is defined
    ));

    // .contact h1 Font Size
    $wp_customize->add_setting('contact_h1_font_size', array(
        'default' => '32',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('contact_h1_font_size', array(
        'label' => __('Contact H1 Font Size (px)', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_h1_font_size',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 10,
            'max' => 100,
            'step' => 1,
        ),
    ));

    // .contact h1 Font Weight
    $wp_customize->add_setting('contact_h1_font_weight', array(
        'default' => '700',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_h1_font_weight', array(
        'label' => __('Contact H1 Font Weight', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_h1_font_weight',
        'type' => 'select',
        'choices' => array(
            '300' => 'Light (300)',
            '400' => 'Regular (400)',
            '500' => 'Medium (500)',
            '600' => 'Semi-Bold (600)',
            '700' => 'Bold (700)',
            // Add other weights if needed
        ),
    ));


    // Add a setting for the email address
    $wp_customize->add_setting('contact_email', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_email',
    ));

    // Add a control for the email address
    $wp_customize->add_control('contact_email', array(
        'label' => __('Email Address', 'WWHNA-LP'),
        'section' => 'contact_section',
        'type' => 'email',
    ));

    // Add a setting for the additional website
    $wp_customize->add_setting('contact_website', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add a control for the additional website
    $wp_customize->add_control('contact_website', array(
        'label' => __('Other Website', 'WWHNA-LP'),
        'section' => 'contact_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('contact_email_text', array(
        'default' => 'Email me',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the email link text
    $wp_customize->add_control('contact_email_text', array(
        'label' => __('Email Link Text', 'WWHNA-LP'),
        'section' => 'contact_section',
        'type' => 'text',
    ));

    // Add a setting for the website link text
    $wp_customize->add_setting('contact_website_text', array(
        'default' => 'Visit my website',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the website link text
    $wp_customize->add_control('contact_website_text', array(
        'label' => __('Website Link Text', 'WWHNA-LP'),
        'section' => 'contact_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_info_p_color', array(
        'default' => '#FFFFFF', // White
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'contact_info_p_color', array(
        'label' => __('Contact Info Paragraph Color', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_info_p_color',
    )));

    // .contact-info p Font Family
    $wp_customize->add_setting('contact_info_p_font_family', array(
        'default' => 'Hind',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_info_p_font_family', array(
        'label' => __('Contact Info Paragraph Font Family', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_info_p_font_family',
        'type' => 'select',
        'choices' => $font_choices, // Ensure $font_choices array is defined
    ));

    // .contact-info p Font Size
    $wp_customize->add_setting('contact_info_p_font_size', array(
        'default' => '20',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('contact_info_p_font_size', array(
        'label' => __('Contact Info Paragraph Font Size (px)', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_info_p_font_size',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 10,
            'max' => 50,
            'step' => 1,
        ),
    ));

    // .contact-info p Font Weight
    $wp_customize->add_setting('contact_info_p_font_weight', array(
        'default' => '400',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_info_p_font_weight', array(
        'label' => __('Contact Info Paragraph Font Weight', 'WWHNA-LP'),
        'section' => 'contact_section',
        'settings' => 'contact_info_p_font_weight',
        'type' => 'select',
        'choices' => array(
            '300' => 'Light (300)',
            '400' => 'Regular (400)',
            '500' => 'Medium (500)',
            '600' => 'Semi-Bold (600)',
            '700' => 'Bold (700)',
            // Add other weights if needed
        ),
    ));

    // Add settings and controls for social media profiles dynamically
    $socials = array('instagram', 'facebook', 'twitter', 'linkedin'); // Add more as needed
    foreach ($socials as $social) {
        // Setting for social media URL
        $wp_customize->add_setting("contact_{$social}_url", array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Control for social media URL
        $wp_customize->add_control("contact_{$social}_url", array(
            'label' => ucfirst($social) . ' URL',
            'section' => 'contact_section',
            'type' => 'url',
        ));

        // Setting for social media image
        $wp_customize->add_setting("contact_{$social}_image", array(
            'default' => '',
            'transport' => 'refresh',
            // Add a sanitize callback if necessary
        ));

        // Control for social media image
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "contact_{$social}_image", array(
            'label' => ucfirst($social) . ' Image',
            'section' => 'contact_section',
            'settings' => "contact_{$social}_image",
        )));
    }
}

add_action('customize_register', 'contact_customize_register');

function contact_customize_css(){
    ?>
    <style type="text/css">
        .contact h1 {
            color: <?php echo get_theme_mod('contact_h1_color', '#FFFFFF'); ?>;
            font-family: <?php echo get_theme_mod('contact_h1_font_family', 'Philly Sans'); ?>;
            font-size: <?php echo get_theme_mod('contact_h1_font_size', '32'); ?>px;
            font-weight: <?php echo get_theme_mod('contact_h1_font_weight', '700'); ?>;
        }

        .contact-info p {
            color: <?php echo get_theme_mod('contact_info_p_color', '#FFFFFF'); ?>;
            font-family: <?php echo get_theme_mod('contact_info_p_font_family', 'Hind'); ?>;
            font-size: <?php echo get_theme_mod('contact_info_p_font_size', '20'); ?>px;
            font-weight: <?php echo get_theme_mod('contact_info_p_font_weight', '400'); ?>;
}


    </style>
    <?php
}

add_action('wp_head', 'contact_customize_css');
?>