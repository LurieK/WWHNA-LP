<?php get_header(); ?>

<body>
  <div class="hero">

    <div class="title" >

      <section class="woman">
        <img class="rosa" src="<?php echo esc_url(get_theme_mod('custom_image_rosa', get_template_directory_uri() . '/images/Rosa_Parks_solo_cropped.png')); ?>" alt="Rosa Parks">

        <img class="greta" src="<?php echo esc_url(get_theme_mod('custom_image_greta', get_template_directory_uri() . '/images/Greta_Thunberg_solo_cropped.png')); ?>" alt="Greta Thunberg">

        <img class="lux" src="<?php echo esc_url(get_theme_mod('custom_image_lux', get_template_directory_uri() . '/images/Rosa_Luxenburg_solo_croped.png')); ?>" alt="Rosa Luxemburg">

        <div class="greta-bubble-container">
          <img class="greta-bubble" src="<?php echo esc_url(get_theme_mod('custom_image_greta_bubble', get_template_directory_uri() . '/images/speech-bubble-2.png')); ?>" alt="Speech Bubble">
          <span class="bubble-text">
            <h5 data-text="<?php echo esc_attr(get_theme_mod('greta_bubble_text', 'Default Greta Text')); ?>"></h5>
          </span>


        </div>

        <div class="rosa-bubble-container">
          <img class="rosa-bubble" src="<?php echo esc_url(get_theme_mod('custom_image_rosa_bubble', get_template_directory_uri() . '/images/speech-bubble.png')); ?>" alt="Speech Bubble">
          <span class="bubble-text">
            <h5 data-text="<?php echo esc_attr(get_theme_mod('rosa_bubble_text', 'Default Rosa Text')); ?>"></h5>
          </span>
        </div>

        <div class="lux-bubble-container">
          <img class="lux-bubble" src="<?php echo esc_url(get_theme_mod('custom_image_rosa_bubble', get_template_directory_uri() . '/images/speech-bubble.png')); ?>" alt="Speech Bubble">
          <span class="bubble-text">
            <h5 data-text="<?php echo esc_attr(get_theme_mod('lux_bubble_text', 'Default Lux Text')); ?>"></h5>
          </span>
        </div>

      </section>

      <section class="title-text">
        <div class="hero-text" id='order'>
          <h1><?php echo esc_html(get_theme_mod('hero_text', 'A Feminist Board Game for you')); ?></h1>
        </div>
        <div class="order-link" >
          <a href="<?php echo esc_url(get_theme_mod('order_cta_link', '#order')); ?>">
            <?php echo esc_html(get_theme_mod('order_cta_text', 'Order Now')); ?>
          </a>
        </div>
      </section>


    </div>
  </div>
  </div>

  <div class="about" id="about-container">
    <section class="about-text" id="about">
      <h1 class="about-heading">
        <?php echo esc_html(get_theme_mod('about_heading_text', 'Default heading text')); ?>
      </h1>
      <h4>
        <?php echo esc_html(get_theme_mod('about_paragraph_text', 'Default paragraph text')); ?>
      </h4>
    </section>


    <section class="cards">
        <?php for ($i = 0; $i < get_theme_mod('number_of_card_sections', 4); $i++) : ?>
        <?php $section_title = get_theme_mod("card_section_{$i}_title", 'Default Title'); ?>
          <div class="card-section <?php echo sanitize_title($section_title); ?>"style="background-color: <?php echo esc_attr(get_theme_mod("card_section_{$i}_bg_color", '#ff69b4')); ?>;">
            <h3><?php echo esc_html($section_title); ?></h3>
            <div class='card-examples'>
              <div class="card-1">
                <div class="card-face front">
                  <img src="<?php echo esc_url(get_theme_mod("custom_image_card_{$i}_blue", get_template_directory_uri() . '/images/wwhna-logo-grid-card-dummy-blue.png')); ?>" alt="Card Blue">
                </div>
                <div class="card-face back">
                  <img src="<?php echo esc_url(get_theme_mod("custom_image_card_{$i}_orange", get_template_directory_uri() . '/images/wwhna-logo-grid-card-2-dummy-orange.png')); ?>" alt="Card Orange">
                </div>
              </div>
              <div class="card-2">
                <div class="card-face front">
                 <img src="<?php echo esc_url(get_theme_mod("custom_image_card_{$i}_blue", get_template_directory_uri() . '/images/wwhna-logo-grid-card-dummy-blue.png')); ?>" alt="Card Blue">
                </div>
                <div class="card-face back">
                  <img src="<?php echo esc_url(get_theme_mod("custom_image_card_{$i}_orange", get_template_directory_uri() . '/images/wwhna-logo-grid-card-2-dummy-orange.png')); ?>" alt="Card Orange">
                </div>
              </div>
            </div>
          </div>
        
        <?php endfor; ?>
    </section>
  </div>

  </div>
<div class="artist" id="artist">
  <div class="artist-text">
    <h1><?php echo get_theme_mod('artist_title', 'Meet the Jasmin'); ?></h1>
    <!-- desktop image -->
    <img class='Jasmin-mobile' src="<?php echo esc_url(get_theme_mod('custom_image_Jasmin', get_template_directory_uri() . '/images/jasmin_mittag.jpg')); ?>" alt="Jasmin">
    <h4><?php echo get_theme_mod('artist_description', 'Default artist description...'); ?></h4>
  </div>
  <!-- mobile image -->
  <img class="Jasmin" src="<?php echo esc_url(get_theme_mod('custom_image_Jasmin', get_template_directory_uri() . '/images/jasmin_mittag.jpg')); ?>" alt="Jasmin">
</div>

  <div class="donate">
    <div class="donate-text" id="donate">
        <h1><?php echo esc_html(get_theme_mod('donate_header_text', 'Lorem ipsum dolor sit amet')); ?></h1>
        <h3><?php echo esc_html(get_theme_mod('donate_subheader_text', 'Consectetur Adipiscing Elit')); ?></h3>
        <a href="<?php echo esc_url(get_theme_mod('donate_button_url')); ?>" class="donate-btn">
            <?php echo esc_html(get_theme_mod('donate_button_text', 'Donate')); ?>
        </a>
    </div>
</div>


  <?php get_footer(); ?>