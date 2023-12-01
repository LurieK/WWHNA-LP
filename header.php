<!DOCTYPE html>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>


</head>

<header class="header">
  <h3 class="heading-title">What's Her Name Again?</h3>

  <!-- Primary Navigation Menu -->
  <nav class="navigation">
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
  </nav>

  <!-- Mobile Navigation Menu -->
  <div class='mobile-menu'>
    <img class="menu" src="<?php echo get_template_directory_uri(); ?>/images/menu-custom.png" alt="Menu">

    <nav id="mobile-nav" class="mobile-nav" style="display: none;">
      <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
    </nav>
  </div>
</header>

<!-- <header class="header">

  <h3 class="heading-title">    
    What's Her Name Again?
    </h3>

  <ul class="navigation">
    <li> <a href="#order">Order</a></li>
    <li> <a href="#about">About</a></li>
    <li> <a href="#artist">Meet Jasmin</a></li>
    <li> <a href="#donate">Support</a></li>
  </ul>

  <div class='mobile-menu'>
  <img class="menu" src="/images/menu-custom.png">

  <nav id="mobile-nav" class="mobile-nav">
    <ul class="navigation">
      <li> <a href="#order">Order</a></li>
      <li> <a href="#about">About</a></li>
      <li> <a href="#artist">Meet Jasmin</a></li>
      <li> <a href="#donate">Support</a></li>
    </ul>
  </nav>
  </div>
  
</header> -->