<?php

require get_template_directory() . '/about-customizer.php';
require get_template_directory() . '/cards-customizer.php';
require get_template_directory() . '/hero-customizer.php';
require get_template_directory() . '/artist-customizer.php';
require get_template_directory() . '/donate-customizer.php';
require get_template_directory() . '/contact-customizer.php';

function wwhna_enqueue_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/custom-script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'wwhna_enqueue_scripts');

  // Enqueue Google Fonts
function wwhna_fonts_enqueue_styles() {
    wp_enqueue_style('WWHNA-LP-google-fonts', "https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;400;700&family=Courier+Prime&family=Hind:wght@400;600;700&family=Nunito:wght@500;800;900&family=Open+Sans:wght@300;400;500&family=Rubik+Mono+One&display=swap", array(), null);
}

add_action('wp_enqueue_scripts', 'wwhna_fonts_enqueue_styles');


function wwhna_enqueue_styles() {
   
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), 1.0, 'all');

}
add_action('wp_enqueue_scripts', 'wwhna_enqueue_styles');

    function wwhna_dynamic_card_styles() {
    $custom_css = "";
    for ($i = 0; $i < get_theme_mod('number_of_card_sections', 4); $i++) :
        $section_class = sanitize_title(get_theme_mod("card_section_{$i}_title", "Default Title"));
        $custom_css .= "
            .$section_class .card-1:hover .front {
                transform: rotateY(180deg);
            }
            .$section_class .card-1:hover .back {
                transform: rotateY(360deg);
            }
            .$section_class .card-2:hover .front {
                transform: rotateY(-180deg);
            }
            .$section_class .card-2:hover .back {
                transform: rotateY(360deg);
            }
        ";
    endfor;

    wp_add_inline_style('style', $custom_css);
}

add_action('wp_enqueue_scripts', 'wwhna_dynamic_card_styles', 20);
function mytheme_customize_register($wp_customize)
{

    // Add a section for 'Images'
    $wp_customize->add_section('images', array(
        'title' => __('Images', 'WWHNA-LP'),
        'priority' => 30,
    ));

    //Image options
    $images = array(
        'rosa' => '/images/Rosa_Parks_solo_cropped.png',
        'greta' => '/images/Greta_Thunberg_solo_cropped.png',
        'lux' => '/images/Rosa_Luxenburg_solo_croped.png',
        'greta_bubble' => '/images/speech-bubble-2.png',
        'rosa_bubble' => '/images/speech-bubble.png',
        // 'card_blue' => '/images/wwhna-logo-grid-card-dummy-blue.png',
        // 'card_orange' => '/images/wwhna-logo-grid-card-2-dummy-orange.png',
        'Jasmin' => '/images/jasmin_mittag.jpg',
        // Add more images as needed
    );

    // Loop through the images array to add settings and controls
    foreach ($images as $key => $value) {
        $wp_customize->add_setting("custom_image_{$key}", array(
            'default' => get_template_directory_uri() . $value,
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "custom_image_{$key}_control", array(
            'label' => __(ucfirst($key) . ' Image', 'WWHNA-LP'),
            'section' => 'images',
            'settings' => "custom_image_{$key}",
            'priority' => 1,
        )));
    }

    
}

add_action('customize_register', 'mytheme_customize_register');

//register menus (mobile and desktop)
function wwhna_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'WWHNA-LP'),
        'mobile' => __('Mobile Menu', 'WWHNA-LP'), // if you want a separate mobile menu
    ));
}
add_action('after_setup_theme', 'wwhna_register_menus');
