<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php bloginfo( 'title' ); ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?= get_template_directory_uri() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= get_template_directory_uri() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= get_template_directory_uri() ?>/assets/css/main.css" rel="stylesheet">
  <style>
    
:root {
    --background-color: <?php echo esc_html(get_theme_mod('theme_background_color', '#ffffff')); ?>;
    --default-color: <?php echo esc_html(get_theme_mod('theme_default_color', '#444444')); ?>;
    --heading-color: <?php echo esc_html(get_theme_mod('theme_heading_color', '#556270')); ?>;
    --accent-color: <?php echo esc_html(get_theme_mod('theme_accent_color', '#d9232d')); ?>;
    --surface-color: <?php echo esc_html(get_theme_mod('theme_surface_color', '#ffffff')); ?>;
    --contrast-color: <?php echo esc_html(get_theme_mod('theme_contrast_color', '#ffffff')); ?>;

    --nav-color: <?php echo esc_html(get_theme_mod('theme_nav_color', '#556270')); ?>;
    --nav-hover-color: <?php echo esc_html(get_theme_mod('theme_nav_hover_color', '#d9232d')); ?>;
    --nav-mobile-background-color: <?php echo esc_html(get_theme_mod('theme_nav_mobile_bg', '#ffffff')); ?>;
    --nav-dropdown-background-color: <?php echo esc_html(get_theme_mod('theme_nav_dropdown_bg', '#ffffff')); ?>;
    --nav-dropdown-color: <?php echo esc_html(get_theme_mod('theme_nav_dropdown_color', '#556270')); ?>;
    --nav-dropdown-hover-color: <?php echo esc_html(get_theme_mod('theme_nav_dropdown_hover', '#d9232d')); ?>;
}
    </style>

  <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php wp_head();?>
</head>

<body <?php body_class();?>>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?= home_url(); ?>" class="logo d-flex align-items-center me-auto fw-bold fs-4">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt=""> -->
    <?php bloginfo( 'title' ); ?>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class' => '',
                'add_li_class'  => '',
                'container'=>'' ) );
            ?>
          <!-- <li><a href="#hero" class="active">Home</a></li>
          <li class="dropdown"><a href="about.html"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
