<?php

/* =========================================================
   THEME SETUP
========================================================= */

function pagineo_theme_setup() {

    // Navigation Menus
    register_nav_menus(array(
        'primary'   => __('Top Primary Menu', 'pagineo'),
        'secondary' => __('Secondary Menu', 'pagineo'),
    ));

    // Featured Images
    add_theme_support('post-thumbnails');

    // WooCommerce
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'pagineo_theme_setup');


/* =========================================================
   BOOK SECTION CUSTOMIZER
========================================================= */

function customize_book_section($wp_customize) {

    $wp_customize->add_section('book_section', array(
        'title'    => __('Book Section', 'pagineo'),
        'priority' => 30,
    ));

    // Section Title
    $wp_customize->add_setting('book_section_title', array(
        'default'           => 'Our Books',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('book_section_title', array(
        'label'   => __('Section Title', 'pagineo'),
        'section' => 'book_section',
        'type'    => 'text',
    ));

    // Section Subtitle
    $wp_customize->add_setting('book_section_subtitle', array(
        'default'           => 'Explore Our Latest Books',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('book_section_subtitle', array(
        'label'   => __('Section Subtitle', 'pagineo'),
        'section' => 'book_section',
        'type'    => 'text',
    ));
}

add_action('customize_register', 'customize_book_section');


/* =========================================================
   HERO CAROUSEL CUSTOMIZER
========================================================= */

function pagineo_customize_hero($wp_customize) {

    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Carousel', 'pagineo'),
        'priority' => 31,
    ));

    $slides = array(
        1 => array(
            'image'       => get_theme_file_uri('/assets/img/hero-carousel/carousel-1.jpg'),
            'title'       => 'WELCOME TO OUR BOOK STORE',
            'description' => 'Discover amazing books and explore your next favorite story.',
            'button'      => 'Explore Books',
            'url'         => '#books',
        ),

        2 => array(
            'image'       => get_theme_file_uri('/assets/img/hero-carousel/carousel-3.jpg'),
            'title'       => 'DISCOVER',
            'description' => 'Explore books from different authors and genres.',
            'button'      => 'Discover Books',
            'url'         => '#books',
        ),

        3 => array(
            'image'       => get_theme_file_uri('/assets/img/hero-carousel/carousel-2.jpg'),
            'title'       => 'READ & EXPLORE',
            'description' => 'Find your next favorite book and start a new journey.',
            'button'      => 'Shop Now',
            'url'         => '#books',
        ),
    );

    foreach ($slides as $i => $slide) {

        // Image
        $wp_customize->add_setting("hero_slide_{$i}_image", array(
            'default'           => $slide['image'],
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                "hero_slide_{$i}_image",
                array(
                    'label'   => __("Slide {$i} Image", 'pagineo'),
                    'section' => 'hero_section',
                )
            )
        );

        // Title
        $wp_customize->add_setting("hero_slide_{$i}_title", array(
            'default'           => $slide['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("hero_slide_{$i}_title", array(
            'label'   => __("Slide {$i} Title", 'pagineo'),
            'section' => 'hero_section',
            'type'    => 'text',
        ));

        // Description
        $wp_customize->add_setting("hero_slide_{$i}_description", array(
            'default'           => $slide['description'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control("hero_slide_{$i}_description", array(
            'label'   => __("Slide {$i} Description", 'pagineo'),
            'section' => 'hero_section',
            'type'    => 'textarea',
        ));

        // Button Text
        $wp_customize->add_setting("hero_slide_{$i}_button", array(
            'default'           => $slide['button'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("hero_slide_{$i}_button", array(
            'label'   => __("Slide {$i} Button Text", 'pagineo'),
            'section' => 'hero_section',
            'type'    => 'text',
        ));

        // Button URL
        $wp_customize->add_setting("hero_slide_{$i}_button_url", array(
            'default'           => $slide['url'],
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("hero_slide_{$i}_button_url", array(
            'label'   => __("Slide {$i} Button URL", 'pagineo'),
            'section' => 'hero_section',
            'type'    => 'url',
        ));
    }
}

add_action('customize_register', 'pagineo_customize_hero');


/* =========================================================
   ABOUT SECTION CUSTOMIZER
========================================================= */

function customize_about_section($wp_customize) {

    $wp_customize->add_section('about_section', array(
        'title'    => __('About Section', 'pagineo'),
        'priority' => 32,
    ));

    // Title
    $wp_customize->add_setting('about_section_title', array(
        'default'           => 'About Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_section_title', array(
        'label'   => __('Section Title', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'text',
    ));

    // Description
    $wp_customize->add_setting('about_section_description', array(
        'default'           => 'Learn more about our book store and what we offer.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('about_section_description', array(
        'label'   => __('Section Description', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'textarea',
    ));

    // Left Paragraph
    $wp_customize->add_setting('about_left_paragraph', array(
        'default'           => 'We are passionate about books and believe that every book opens the door to a new world.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('about_left_paragraph', array(
        'label'   => __('Left Paragraph', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'textarea',
    ));

    // Bullet 1
    $wp_customize->add_setting('about_bullet_1', array(
        'default'           => 'Wide collection of books',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_bullet_1', array(
        'label'   => __('Bullet Point 1', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'text',
    ));

    // Bullet 2
    $wp_customize->add_setting('about_bullet_2', array(
        'default'           => 'Books from different genres',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_bullet_2', array(
        'label'   => __('Bullet Point 2', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'text',
    ));

    // Bullet 3
    $wp_customize->add_setting('about_bullet_3', array(
        'default'           => 'Easy and convenient shopping',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_bullet_3', array(
        'label'   => __('Bullet Point 3', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'text',
    ));

    // Right Paragraph
    $wp_customize->add_setting('about_right_paragraph', array(
        'default'           => 'Explore our collection and discover books that inspire, educate, and entertain readers of all ages.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('about_right_paragraph', array(
        'label'   => __('Right Paragraph', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'textarea',
    ));

    // Read More Text
    $wp_customize->add_setting('about_read_more_text', array(
        'default'           => 'Read More',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_read_more_text', array(
        'label'   => __('Read More Button Text', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'text',
    ));

    // Read More URL
    $wp_customize->add_setting('about_read_more_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('about_read_more_url', array(
        'label'   => __('Read More Button URL', 'pagineo'),
        'section' => 'about_section',
        'type'    => 'url',
    ));
}

add_action('customize_register', 'customize_about_section');


/* =========================================================
   SERVICES SECTION CUSTOMIZER
========================================================= */

function customize_services_section($wp_customize) {

    $wp_customize->add_section('services_section', array(
        'title'    => __('Services Section', 'pagineo'),
        'priority' => 33,
    ));

    // Section Title
    $wp_customize->add_setting('services_section_title', array(
        'default'           => 'Our Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('services_section_title', array(
        'label'   => __('Section Title', 'pagineo'),
        'section' => 'services_section',
        'type'    => 'text',
    ));

    // Section Description
    $wp_customize->add_setting('services_section_description', array(
        'default'           => 'Explore our services and discover what we offer.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('services_section_description', array(
        'label'   => __('Section Description', 'pagineo'),
        'section' => 'services_section',
        'type'    => 'textarea',
    ));

    $services = array(
        1 => array(
            'icon'        => 'bi bi-briefcase',
            'title'       => 'Wide Collection',
            'description' => 'Explore a wide collection of books from different genres and authors.',
        ),
        2 => array(
            'icon'        => 'bi bi-card-checklist',
            'title'       => 'Easy Shopping',
            'description' => 'Enjoy a simple and convenient way to find and purchase your favorite books.',
        ),
        3 => array(
            'icon'        => 'bi bi-bar-chart',
            'title'       => 'Best Selling Books',
            'description' => 'Discover popular and best-selling books loved by readers.',
        ),
        4 => array(
            'icon'        => 'bi bi-binoculars',
            'title'       => 'Discover New Books',
            'description' => 'Find new books and discover exciting stories and ideas.',
        ),
        5 => array(
            'icon'        => 'bi bi-brightness-high',
            'title'       => 'Quality Books',
            'description' => 'We provide quality books selected for readers of different interests.',
        ),
        6 => array(
            'icon'        => 'bi bi-calendar4-week',
            'title'       => 'Regular Updates',
            'description' => 'Stay updated with new arrivals, popular books, and exciting collections.',
        ),
    );

    foreach ($services as $i => $service) {

        // Icon
        $wp_customize->add_setting("service_{$i}_icon", array(
            'default'           => $service['icon'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("service_{$i}_icon", array(
            'label'   => __("Service {$i} Icon", 'pagineo'),
            'section' => 'services_section',
            'type'    => 'text',
        ));

        // Title
        $wp_customize->add_setting("service_{$i}_title", array(
            'default'           => $service['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("service_{$i}_title", array(
            'label'   => __("Service {$i} Title", 'pagineo'),
            'section' => 'services_section',
            'type'    => 'text',
        ));

        // Description
        $wp_customize->add_setting("service_{$i}_description", array(
            'default'           => $service['description'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control("service_{$i}_description", array(
            'label'   => __("Service {$i} Description", 'pagineo'),
            'section' => 'services_section',
            'type'    => 'textarea',
        ));

        // URL
        $wp_customize->add_setting("service_{$i}_url", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("service_{$i}_url", array(
            'label'   => __("Service {$i} URL", 'pagineo'),
            'section' => 'services_section',
            'type'    => 'url',
        ));
    }
}

add_action('customize_register', 'customize_services_section');


/* =========================================================
   ABOUT PAGE - SECOND SECTION
========================================================= */

function customize_about_page_content($wp_customize) {

    $wp_customize->add_section('about_page_content', array(
        'title'    => __('About Page Content', 'pagineo'),
        'priority' => 36,
    ));

        /* =====================================================
       ABOUT PAGE TITLE & BREADCRUMB
    ===================================================== */

    // Page Title
    $wp_customize->add_setting('about_page_title', array(
        'default'           => 'About',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_page_title', array(
        'label'   => __('Page Title', 'pagineo'),
        'section' => 'about_page_content',
        'type'    => 'text',
    ));


    // Breadcrumb Home Text
    $wp_customize->add_setting('about_breadcrumb_home', array(
        'default'           => 'Home',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_breadcrumb_home', array(
        'label'   => __('Breadcrumb Home Text', 'pagineo'),
        'section' => 'about_page_content',
        'type'    => 'text',
    ));


    // Breadcrumb Current Text
    $wp_customize->add_setting('about_breadcrumb_current', array(
        'default'           => 'About',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_breadcrumb_current', array(
        'label'   => __('Breadcrumb Current Text', 'pagineo'),
        'section' => 'about_page_content',
        'type'    => 'text',
    ));

    // Image
    $wp_customize->add_setting('about2_image', array(
        'default'           => get_theme_file_uri('/assets/img/about-portrait.jpg'),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'about2_image',
            array(
                'label'    => __('About Section Image', 'pagineo'),
                'section'  => 'about_page_content',
                'settings' => 'about2_image',
            )
        )
    );

    // Main Heading
    $wp_customize->add_setting('about2_heading', array(
        'default'           => 'Discover Your Next Favorite Book',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about2_heading', array(
        'label'   => __('Main Heading', 'pagineo'),
        'section' => 'about_page_content',
        'type'    => 'text',
    ));

    $tabs = array(
        1 => array(
            'title' => 'Our Collection',
        ),
        2 => array(
            'title' => 'Why Choose Us',
        ),
        3 => array(
            'title' => 'Book Lovers',
        ),
    );

    $features = array(
        1 => array(
            'title' => 'Wide Collection of Books',
            'text'  => 'Find books from different genres, authors, and categories in one convenient place.',
        ),
        2 => array(
            'title' => 'Books for Every Reader',
            'text'  => 'Discover books for students, professionals, casual readers, and book lovers.',
        ),
        3 => array(
            'title' => 'Quality Books at Great Prices',
            'text'  => 'Enjoy quality books and great value while building your personal collection.',
        ),
    );

    foreach ($tabs as $i => $tab) {

        // Tab Title
        $wp_customize->add_setting("about2_tab{$i}_title", array(
            'default'           => $tab['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("about2_tab{$i}_title", array(
            'label'   => __("Tab {$i} Title", 'pagineo'),
            'section' => 'about_page_content',
            'type'    => 'text',
        ));

        // Tab Introduction
        $wp_customize->add_setting("about2_tab{$i}_intro", array(
            'default'           => 'Explore a carefully selected collection of books for readers of every interest and age.',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control("about2_tab{$i}_intro", array(
            'label'   => __("Tab {$i} Introduction", 'pagineo'),
            'section' => 'about_page_content',
            'type'    => 'textarea',
        ));

        // Features
        for ($j = 1; $j <= 3; $j++) {

            $wp_customize->add_setting("about2_tab{$i}_feature{$j}_title", array(
                'default'           => $features[$j]['title'],
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control("about2_tab{$i}_feature{$j}_title", array(
                'label'   => __("Tab {$i} Feature {$j} Title", 'pagineo'),
                'section' => 'about_page_content',
                'type'    => 'text',
            ));

            $wp_customize->add_setting("about2_tab{$i}_feature{$j}_text", array(
                'default'           => $features[$j]['text'],
                'sanitize_callback' => 'sanitize_textarea_field',
            ));

            $wp_customize->add_control("about2_tab{$i}_feature{$j}_text", array(
                'label'   => __("Tab {$i} Feature {$j} Description", 'pagineo'),
                'section' => 'about_page_content',
                'type'    => 'textarea',
            ));
        }
    }
}

add_action('customize_register', 'customize_about_page_content');


/* =========================================================
   TEAM SECTION
========================================================= */

function customize_team_section($wp_customize) {

    $wp_customize->add_section('team_section', array(
        'title'    => __('Team Section', 'pagineo'),
        'priority' => 37,
    ));

    // Section Title
    $wp_customize->add_setting('team_section_title', array(
        'default'           => 'Our Team',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('team_section_title', array(
        'label'   => __('Section Title', 'pagineo'),
        'section' => 'team_section',
        'type'    => 'text',
    ));

    $team = array(
        1 => array(
            'name'        => 'Rahim Ahmed',
            'role'        => 'Founder & CEO',
            'description' => 'Passionate about building Pagineo into a trusted destination for book lovers.',
        ),
        2 => array(
            'name'        => 'Nusrat Jahan',
            'role'        => 'Book Curator',
            'description' => 'Helps readers discover interesting books from different genres and authors.',
        ),
        3 => array(
            'name'        => 'Sakib Hasan',
            'role'        => 'Store Manager',
            'description' => 'Manages our book collection and ensures a smooth shopping experience.',
        ),
        4 => array(
            'name'        => 'Mim Akter',
            'role'        => 'Customer Support',
            'description' => 'Always ready to help customers find the right book and answer their questions.',
        ),
    );

    foreach ($team as $i => $member) {

        // Image
        $wp_customize->add_setting("team_{$i}_image", array(
            'default'           => get_theme_file_uri("/assets/img/team/team-{$i}.jpg"),
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                "team_{$i}_image",
                array(
                    'label'   => __("Team Member {$i} Image", 'pagineo'),
                    'section' => 'team_section',
                )
            )
        );

        // Name
        $wp_customize->add_setting("team_{$i}_name", array(
            'default'           => $member['name'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("team_{$i}_name", array(
            'label'   => __("Team Member {$i} Name", 'pagineo'),
            'section' => 'team_section',
            'type'    => 'text',
        ));

        // Role
        $wp_customize->add_setting("team_{$i}_role", array(
            'default'           => $member['role'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("team_{$i}_role", array(
            'label'   => __("Team Member {$i} Role", 'pagineo'),
            'section' => 'team_section',
            'type'    => 'text',
        ));

        // Description
        $wp_customize->add_setting("team_{$i}_description", array(
            'default'           => $member['description'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control("team_{$i}_description", array(
            'label'   => __("Team Member {$i} Description", 'pagineo'),
            'section' => 'team_section',
            'type'    => 'textarea',
        ));

        // Social Links
        $socials = array(
            'twitter'   => 'Twitter / X',
            'facebook'  => 'Facebook',
            'instagram' => 'Instagram',
            'linkedin'  => 'LinkedIn',
        );

        foreach ($socials as $key => $label) {

            $wp_customize->add_setting("team_{$i}_{$key}", array(
                'default'           => '#',
                'sanitize_callback' => 'esc_url_raw',
            ));

            $wp_customize->add_control("team_{$i}_{$key}", array(
                'label'   => __("Member {$i} {$label} URL", 'pagineo'),
                'section' => 'team_section',
                'type'    => 'url',
            ));
        }
    }
}

add_action('customize_register', 'customize_team_section');


/* =========================================================
   CONTACT PAGE
========================================================= */

function customize_contact_page($wp_customize) {

    $wp_customize->add_section('contact_page', array(
        'title'    => __('Contact Page', 'pagineo'),
        'priority' => 38,
    ));

    /* PAGE TITLE */

    $wp_customize->add_setting('contact_page_title', array(
        'default'           => 'Contact',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_page_title', array(
        'label'   => __('Page Title', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));


    /* BREADCRUMB HOME */

    $wp_customize->add_setting('contact_breadcrumb_home', array(
        'default'           => 'Home',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_breadcrumb_home', array(
        'label'   => __('Breadcrumb Home Text', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));


    /* BREADCRUMB CURRENT */

    $wp_customize->add_setting('contact_breadcrumb_current', array(
        'default'           => 'Contact',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_breadcrumb_current', array(
        'label'   => __('Breadcrumb Current Text', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));


    /* GOOGLE MAP */

    $wp_customize->add_setting('contact_map_url', array(
        'default'           => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.135026983!2d91.83556!3d22.33778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adf45795b0d2f5%3A0x6f5d7670dd6b4164!2sNew%20Market%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1750000000000!5m2!1sen!2sbd',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('contact_map_url', array(
        'label'       => __('Google Map Embed URL', 'pagineo'),
        'description' => __('Paste your Google Maps Embed URL here.', 'pagineo'),
        'section'     => 'contact_page',
        'type'        => 'url',
    ));


    /* ADDRESS */

    $wp_customize->add_setting('contact_address_title', array(
        'default'           => 'Address',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_address_title', array(
        'label'   => __('Address Title', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_address', array(
        'default'           => 'New Market, Jubilee Road, Chattogram, Bangladesh',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('contact_address', array(
        'label'   => __('Address', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'textarea',
    ));


    /* PHONE */

    $wp_customize->add_setting('contact_phone_title', array(
        'default'           => 'Call Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_phone_title', array(
        'label'   => __('Phone Title', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_phone', array(
        'default'           => '+880 1XXX-XXXXXX',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Phone Number', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));


    /* EMAIL */

    $wp_customize->add_setting('contact_email_title', array(
        'default'           => 'Email Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_email_title', array(
        'label'   => __('Email Title', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_email', array(
        'default'           => 'info@pagineo.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contact_email', array(
        'label'   => __('Email Address', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'email',
    ));


    /* FORM PLACEHOLDERS */

    $placeholders = array(
        'name'    => 'Your Name',
        'email'   => 'Your Email',
        'subject' => 'Subject',
        'message' => 'Message',
    );

    foreach ($placeholders as $key => $value) {

        $wp_customize->add_setting("contact_{$key}_placeholder", array(
            'default'           => $value,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("contact_{$key}_placeholder", array(
            'label'   => __(ucwords($key) . ' Placeholder', 'pagineo'),
            'section' => 'contact_page',
            'type'    => 'text',
        ));
    }


    /* FORM MESSAGES */

    $messages = array(
        'loading' => 'Loading',
        'error'   => 'Something went wrong. Please try again.',
        'success' => 'Your message has been sent. Thank you for contacting Pagineo!',
    );

    foreach ($messages as $key => $value) {

        $wp_customize->add_setting("contact_{$key}_text", array(
            'default'           => $value,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("contact_{$key}_text", array(
            'label'   => __(ucwords($key) . ' Text', 'pagineo'),
            'section' => 'contact_page',
            'type'    => 'text',
        ));
    }


    /* BUTTON */

    $wp_customize->add_setting('contact_button_text', array(
        'default'           => 'Send Message',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_button_text', array(
        'label'   => __('Button Text', 'pagineo'),
        'section' => 'contact_page',
        'type'    => 'text',
    ));
}

add_action('customize_register', 'customize_contact_page');


/* =========================================================
   FOOTER SECTION
========================================================= */

function customize_footer_section($wp_customize) {

    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Section', 'pagineo'),
        'priority' => 40,
    ));


    /* CONTACT INFORMATION */

    $footer_contact = array(
        'address_1' => array(
            'label'   => 'Address Line 1',
            'default' => 'New Market',
            'type'    => 'text',
        ),
        'address_2' => array(
            'label'   => 'Address Line 2',
            'default' => 'Jubilee Road, Chattogram, Bangladesh',
            'type'    => 'text',
        ),
        'phone' => array(
            'label'   => 'Phone',
            'default' => '+880 1XXX-XXXXXX',
            'type'    => 'text',
        ),
        'email' => array(
            'label'   => 'Email',
            'default' => 'info@pagineo.com',
            'type'    => 'email',
        ),
    );

    foreach ($footer_contact as $key => $data) {

        $sanitize = ($data['type'] === 'email')
            ? 'sanitize_email'
            : 'sanitize_text_field';

        $wp_customize->add_setting("footer_{$key}", array(
            'default'           => $data['default'],
            'sanitize_callback' => $sanitize,
        ));

        $wp_customize->add_control("footer_{$key}", array(
            'label'   => __($data['label'], 'pagineo'),
            'section' => 'footer_section',
            'type'    => $data['type'],
        ));
    }


    /* SOCIAL LINKS */

    $socials = array(
        'twitter'   => 'Twitter / X',
        'facebook'  => 'Facebook',
        'instagram' => 'Instagram',
        'linkedin'  => 'LinkedIn',
    );

    foreach ($socials as $key => $label) {

        $wp_customize->add_setting("footer_{$key}", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("footer_{$key}", array(
            'label'   => __($label . ' URL', 'pagineo'),
            'section' => 'footer_section',
            'type'    => 'url',
        ));
    }


    /* USEFUL LINKS */

    $wp_customize->add_setting('footer_useful_links_title', array(
        'default'           => 'Useful Links',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_useful_links_title', array(
        'label'   => __('Useful Links Title', 'pagineo'),
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    for ($i = 1; $i <= 5; $i++) {

        $wp_customize->add_setting("footer_useful_link_{$i}_text", array(
            'default'           => 'Link ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("footer_useful_link_{$i}_text", array(
            'label'   => __("Useful Link {$i} Text", 'pagineo'),
            'section' => 'footer_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("footer_useful_link_{$i}_url", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("footer_useful_link_{$i}_url", array(
            'label'   => __("Useful Link {$i} URL", 'pagineo'),
            'section' => 'footer_section',
            'type'    => 'url',
        ));
    }


    /* SERVICES */

    $wp_customize->add_setting('footer_services_title', array(
        'default'           => 'Our Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_services_title', array(
        'label'   => __('Services Title', 'pagineo'),
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    for ($i = 1; $i <= 5; $i++) {

        $wp_customize->add_setting("footer_service_{$i}_text", array(
            'default'           => 'Service ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("footer_service_{$i}_text", array(
            'label'   => __("Service {$i} Text", 'pagineo'),
            'section' => 'footer_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("footer_service_{$i}_url", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("footer_service_{$i}_url", array(
            'label'   => __("Service {$i} URL", 'pagineo'),
            'section' => 'footer_section',
            'type'    => 'url',
        ));
    }


    /* NEWSLETTER */

    $wp_customize->add_setting('footer_newsletter_title', array(
        'default'           => 'Our Newsletter',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_newsletter_title', array(
        'label'   => __('Newsletter Title', 'pagineo'),
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_newsletter_description', array(
        'default'           => 'Subscribe to our newsletter and receive the latest news about our books and services!',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('footer_newsletter_description', array(
        'label'   => __('Newsletter Description', 'pagineo'),
        'section' => 'footer_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('footer_newsletter_button', array(
        'default'           => 'Subscribe',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_newsletter_button', array(
        'label'   => __('Newsletter Button Text', 'pagineo'),
        'section' => 'footer_section',
        'type'    => 'text',
    ));


    /* COPYRIGHT */

    $wp_customize->add_setting('footer_copyright_text', array(
        'default'           => 'All Rights Reserved',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_copyright_text', array(
        'label'   => __('Copyright Text', 'pagineo'),
        'section' => 'footer_section',
        'type'    => 'text',
    ));
}

add_action('customize_register', 'customize_footer_section');


/* =========================================================
   THEME COLORS
========================================================= */

function customize_theme_colors($wp_customize) {

    $wp_customize->add_section('theme_colors', array(
        'title'    => __('Theme Colors', 'pagineo'),
        'priority' => 20,
    ));

    $colors = array(
        'theme_background_color' => array(
            'label'   => 'Background Color',
            'default' => '#ffffff',
        ),

        'theme_default_color' => array(
            'label'   => 'Default Text Color',
            'default' => '#444444',
        ),

        'theme_heading_color' => array(
            'label'   => 'Heading Color',
            'default' => '#556270',
        ),

        'theme_accent_color' => array(
            'label'   => 'Accent / Brand Color',
            'default' => '#d9232d',
        ),

        'theme_surface_color' => array(
            'label'   => 'Surface Color',
            'default' => '#ffffff',
        ),

        'theme_contrast_color' => array(
            'label'   => 'Contrast Color',
            'default' => '#ffffff',
        ),

        'theme_nav_color' => array(
            'label'   => 'Navigation Color',
            'default' => '#556270',
        ),

        'theme_nav_hover_color' => array(
            'label'   => 'Navigation Hover Color',
            'default' => '#d9232d',
        ),

        'theme_nav_mobile_bg' => array(
            'label'   => 'Mobile Navigation Background',
            'default' => '#ffffff',
        ),

        'theme_nav_dropdown_bg' => array(
            'label'   => 'Dropdown Background',
            'default' => '#ffffff',
        ),

        'theme_nav_dropdown_color' => array(
            'label'   => 'Dropdown Text Color',
            'default' => '#556270',
        ),

        'theme_nav_dropdown_hover' => array(
            'label'   => 'Dropdown Hover Color',
            'default' => '#d9232d',
        ),
    );

    foreach ($colors as $id => $data) {

        $wp_customize->add_setting($id, array(
            'default'           => $data['default'],
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $id,
                array(
                    'label'   => __($data['label'], 'pagineo'),
                    'section' => 'theme_colors',
                )
            )
        );
    }
}

add_action('customize_register', 'customize_theme_colors');


/* =========================================================
   WOOCOMMERCE BOOK AUTHOR
========================================================= */

function pagineo_book_author_meta_box() {

    add_meta_box(
        'book_author_details',
        'Book Author',
        'pagineo_book_author_meta_box_callback',
        'product',
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'pagineo_book_author_meta_box');


function pagineo_book_author_meta_box_callback($post) {

    wp_nonce_field(
        'save_pagineo_book_author',
        'pagineo_book_author_nonce'
    );

    $author = get_post_meta(
        $post->ID,
        '_book_author',
        true
    );
    ?>

    <p>
        <label><strong>Author</strong></label>
    </p>

    <input
        type="text"
        name="pagineo_book_author"
        value="<?php echo esc_attr($author); ?>"
        style="width:100%;"
        placeholder="Enter book author"
    >

    <?php
}


function pagineo_save_book_author($post_id) {

    if (!isset($_POST['pagineo_book_author_nonce'])) {
        return;
    }

    if (
        !wp_verify_nonce(
            $_POST['pagineo_book_author_nonce'],
            'save_pagineo_book_author'
        )
    ) {
        return;
    }

    if (
        defined('DOING_AUTOSAVE')
        && DOING_AUTOSAVE
    ) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['pagineo_book_author'])) {

        update_post_meta(
            $post_id,
            '_book_author',
            sanitize_text_field(
                $_POST['pagineo_book_author']
            )
        );
    }
}

add_action(
    'save_post_product',
    'pagineo_save_book_author'
);


/* =========================================================
   WOOCOMMERCE BOOK DETAILS
========================================================= */

function pagineo_book_details_meta_box() {

    add_meta_box(
        'book_extra_details',
        'Book Details',
        'pagineo_book_details_callback',
        'product',
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'pagineo_book_details_meta_box');


function pagineo_book_details_callback($post) {

    wp_nonce_field(
        'save_pagineo_book_details',
        'pagineo_book_details_nonce'
    );

    $publisher = get_post_meta(
        $post->ID,
        '_book_publisher',
        true
    );

    $isbn = get_post_meta(
        $post->ID,
        '_book_isbn',
        true
    );
    ?>

    <p>
        <label><strong>Publisher</strong></label>
        <input
            type="text"
            name="pagineo_book_publisher"
            value="<?php echo esc_attr($publisher); ?>"
            style="width:100%;"
            placeholder="Enter publisher"
        >
    </p>

    <p>
        <label><strong>ISBN</strong></label>
        <input
            type="text"
            name="pagineo_book_isbn"
            value="<?php echo esc_attr($isbn); ?>"
            style="width:100%;"
            placeholder="Enter ISBN"
        >
    </p>

    <?php
}


function pagineo_save_book_details($post_id) {

    if (!isset($_POST['pagineo_book_details_nonce'])) {
        return;
    }

    if (
        !wp_verify_nonce(
            $_POST['pagineo_book_details_nonce'],
            'save_pagineo_book_details'
        )
    ) {
        return;
    }

    if (
        defined('DOING_AUTOSAVE')
        && DOING_AUTOSAVE
    ) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['pagineo_book_publisher'])) {

        update_post_meta(
            $post_id,
            '_book_publisher',
            sanitize_text_field(
                $_POST['pagineo_book_publisher']
            )
        );
    }

    if (isset($_POST['pagineo_book_isbn'])) {

        update_post_meta(
            $post_id,
            '_book_isbn',
            sanitize_text_field(
                $_POST['pagineo_book_isbn']
            )
        );
    }
}

add_action(
    'save_post_product',
    'pagineo_save_book_details'
);


/* =========================================================
   SHOW BOOK DETAILS ON SINGLE PRODUCT
========================================================= */

function pagineo_show_book_details() {

    global $product;

    if (!$product) {
        return;
    }

    $author = get_post_meta(
        $product->get_id(),
        '_book_author',
        true
    );

    $publisher = get_post_meta(
        $product->get_id(),
        '_book_publisher',
        true
    );

    $isbn = get_post_meta(
        $product->get_id(),
        '_book_isbn',
        true
    );

    if (!$author && !$publisher && !$isbn) {
        return;
    }
    ?>

    <div class="book-extra-details">

        <?php if ($author) : ?>

            <p>
                <strong>Author:</strong>
                <?php echo esc_html($author); ?>
            </p>

        <?php endif; ?>


        <?php if ($publisher) : ?>

            <p>
                <strong>Publisher:</strong>
                <?php echo esc_html($publisher); ?>
            </p>

        <?php endif; ?>


        <?php if ($isbn) : ?>

            <p>
                <strong>ISBN:</strong>
                <?php echo esc_html($isbn); ?>
            </p>

        <?php endif; ?>

    </div>

    <?php
}

add_action(
    'woocommerce_single_product_summary',
    'pagineo_show_book_details',
    21
);


/* =========================================================
   ADMIN STYLE FOR WOOCOMMERCE BOOK FIELDS
========================================================= */

function pagineo_book_admin_style() {

    $screen = get_current_screen();

    if (!$screen || $screen->post_type !== 'product') {
        return;
    }
    ?>

    <style>

        #book_author_details,
        #book_extra_details {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        #book_author_details .postbox-header,
        #book_extra_details .postbox-header {
            background: #f8fafc;
            padding: 12px 15px;
        }

        #book_author_details .hndle,
        #book_extra_details .hndle {
            font-size: 16px;
            font-weight: 600;
            color: #1e293b;
        }

        #book_author_details .inside,
        #book_extra_details .inside {
            padding: 25px;
            background: #ffffff;
        }

        #book_author_details label,
        #book_extra_details label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: 600;
            color: #334155;
        }

        #book_author_details input[type="text"],
        #book_extra_details input[type="text"] {
            width: 100%;
            min-height: 42px;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        #book_author_details input:focus,
        #book_extra_details input:focus {
            border-color: #2271b1;
            box-shadow: 0 0 0 1px #2271b1;
            outline: none;
        }

    </style>

    <?php
}

add_action('admin_head', 'pagineo_book_admin_style');


/* =========================================================
   DYNAMIC THEME COLORS CSS
========================================================= */

function pagineo_dynamic_theme_colors() {

    $background = get_theme_mod(
        'theme_background_color',
        '#ffffff'
    );

    $text = get_theme_mod(
        'theme_default_color',
        '#444444'
    );

    $heading = get_theme_mod(
        'theme_heading_color',
        '#556270'
    );

    $accent = get_theme_mod(
        'theme_accent_color',
        '#d9232d'
    );

    $surface = get_theme_mod(
        'theme_surface_color',
        '#ffffff'
    );

    $contrast = get_theme_mod(
        'theme_contrast_color',
        '#ffffff'
    );

    $nav = get_theme_mod(
        'theme_nav_color',
        '#556270'
    );

    $nav_hover = get_theme_mod(
        'theme_nav_hover_color',
        '#d9232d'
    );

    $mobile_bg = get_theme_mod(
        'theme_nav_mobile_bg',
        '#ffffff'
    );

    $dropdown_bg = get_theme_mod(
        'theme_nav_dropdown_bg',
        '#ffffff'
    );

    $dropdown_color = get_theme_mod(
        'theme_nav_dropdown_color',
        '#556270'
    );

    $dropdown_hover = get_theme_mod(
        'theme_nav_dropdown_hover',
        '#d9232d'
    );

    $css = "
        :root {
            --background-color: {$background};
            --default-color: {$text};
            --heading-color: {$heading};
            --accent-color: {$accent};
            --surface-color: {$surface};
            --contrast-color: {$contrast};
            --nav-color: {$nav};
            --nav-hover-color: {$nav_hover};
        }

        .mobile-nav-active {
            background-color: {$mobile_bg};
        }

        .navmenu ul ul {
            background-color: {$dropdown_bg};
        }

        .navmenu ul ul a {
            color: {$dropdown_color};
        }

        .navmenu ul ul a:hover {
            color: {$dropdown_hover};
        }
    ";

    wp_add_inline_style(
        'main-css',
        $css
    );
}

add_action(
    'wp_enqueue_scripts',
    'pagineo_dynamic_theme_colors',
    20
);

add_action( 'woocommerce_before_shop_loop', 'pagineo_wishlist_link', 5 );

function pagineo_wishlist_link() {
    ?>

    <div class="shop-wishlist">
        <a
            href="<?php echo esc_url( home_url( '/wishlist/' ) ); ?>"
            class="wishlist-link"
        >
            ❤️ View Wishlist
        </a>
    </div>

    <?php
}