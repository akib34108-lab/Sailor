<?php get_header(); ?>
<main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel"
         class="carousel slide carousel-fade"
         data-bs-ride="carousel"
         data-bs-interval="5000">

        <!-- Slide 1 -->
        <div class="carousel-item active">

            <img 
                src="<?php echo esc_url(get_theme_mod(
                    'hero_slide_1_image',
                    get_template_directory_uri() . '/assets/img/hero-carousel/carousel-1.jpg'
                )); ?>"
                alt="Book Store"
            >

            <div class="carousel-container">

                <h2>
                    <?php echo esc_html(
                        get_theme_mod(
                            'hero_slide_1_title',
                            'WELCOME TO OUR BOOK STORE'
                        )
                    ); ?>
                </h2>

                <p>
                    <?php echo esc_html(
                        get_theme_mod(
                            'hero_slide_1_description',
                            'Discover amazing books and explore your next favorite story.'
                        )
                    ); ?>
                </p>

                <a 
                    href="<?php echo esc_url(
                        get_theme_mod('hero_slide_1_button_url', '#books')
                    ); ?>"
                    class="btn-get-started"
                >
                    <?php echo esc_html(
                        get_theme_mod('hero_slide_1_button', 'Explore Books')
                    ); ?>
                </a>

            </div>
        </div>


        <!-- Slide 2 -->
        <div class="carousel-item">

            <img 
                src="<?php echo esc_url(get_theme_mod(
                    'hero_slide_2_image',
                    get_template_directory_uri() . '/assets/img/hero-carousel/carousel-3.jpg'
                )); ?>"
                alt="Discover Books"
            >

            <div class="carousel-container">

                <h2>
                    <?php echo esc_html(
                        get_theme_mod(
                            'hero_slide_2_title',
                            'DISCOVER'
                        )
                    ); ?>
                </h2>

                <p>
                    <?php echo esc_html(
                        get_theme_mod(
                            'hero_slide_2_description',
                            'Explore books from different authors and genres.'
                        )
                    ); ?>
                </p>

                <a 
                    href="<?php echo esc_url(
                        get_theme_mod('hero_slide_2_button_url', '#books')
                    ); ?>"
                    class="btn-get-started"
                >
                    <?php echo esc_html(
                        get_theme_mod('hero_slide_2_button', 'Discover Books')
                    ); ?>
                </a>

            </div>
        </div>


        <!-- Slide 3 -->
        <div class="carousel-item">

            <img 
                src="<?php echo esc_url(get_theme_mod(
                    'hero_slide_3_image',
                    get_template_directory_uri() . '/assets/img/hero-carousel/carousel-2.jpg'
                )); ?>"
                alt="Read and Explore"
            >

            <div class="carousel-container">

                <h2>
                    <?php echo esc_html(
                        get_theme_mod(
                            'hero_slide_3_title',
                            'READ & EXPLORE'
                        )
                    ); ?>
                </h2>

                <p>
                    <?php echo esc_html(
                        get_theme_mod(
                            'hero_slide_3_description',
                            'Find your next favorite book and start a new journey.'
                        )
                    ); ?>
                </p>

                <a 
                    href="<?php echo esc_url(
                        get_theme_mod('hero_slide_3_button_url', '#books')
                    ); ?>"
                    class="btn-get-started"
                >
                    <?php echo esc_html(
                        get_theme_mod('hero_slide_3_button', 'Shop Now')
                    ); ?>
                </a>

            </div>
        </div>


        <!-- Previous -->
        <a 
            class="carousel-control-prev"
            href="#hero-carousel"
            role="button"
            data-bs-slide="prev"
        >
            <span 
                class="carousel-control-prev-icon bi bi-chevron-left"
                aria-hidden="true"
            ></span>
        </a>


        <!-- Next -->
        <a 
            class="carousel-control-next"
            href="#hero-carousel"
            role="button"
            data-bs-slide="next"
        >
            <span 
                class="carousel-control-next-icon bi bi-chevron-right"
                aria-hidden="true"
            ></span>
        </a>


        <!-- Indicators -->
        <ol class="carousel-indicators"></ol>

    </div>

</section>
<!-- /Hero Section -->
    <!-- Books Section -->
<section id="books" class="books section">

    <div class="container section-title">

        <h2>
            <?php echo esc_html(
                get_theme_mod(
                    'book_section_title',
                    'Our Books'
                )
            ); ?>
        </h2>

        <p>
            <?php echo esc_html(
                get_theme_mod(
                    'book_section_subtitle',
                    'Explore Our Latest Books'
                )
            ); ?>
        </p>
            <a
                href="<?php echo esc_url( home_url( '/wishlist/' ) ); ?>"
                class="wishlist-link"
            >
                ❤️ View Wishlist
            </a>
        </div>

    <div class="container">

        <div class="row gy-4">

            <?php

            $products = new WP_Query( array(

                'post_type'      => 'product',
                'posts_per_page' => 8,
                'post_status'    => 'publish'

            ) );

            if ( $products->have_posts() ) :

                while ( $products->have_posts() ) :

                    $products->the_post();

                    global $product;

            ?>

                <div class="col-lg-3 col-md-4 col-sm-6">

                    <div class="book-card">

                        <!-- Book Image -->
                        <div class="book-image">

                            <a href="<?php the_permalink(); ?>">

                                <?php

                                if ( has_post_thumbnail() ) :

                                    the_post_thumbnail(
                                        'medium',
                                        array(
                                            'class' => 'img-fluid'
                                        )
                                    );

                                endif;

                                ?>

                            </a>

                        </div>


                        <!-- Book Info -->
                        <div class="book-info">

                            <h4>

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                                </a>

                            </h4>
                            <?php
$author = get_post_meta(
    get_the_ID(),
    '_book_author',
    true
);

if ( $author ) :
?>

    <p>
        By <?php echo esc_html( $author ); ?>
    </p>

<?php endif; ?>
<!-- Price -->
                            <div class="book-price">

                                <?php

                                if ( $product->is_on_sale() ) :

                                ?>

                                    <span class="old-price">

                                        <?php
                                        echo wp_kses_post(
                                            wc_price(
                                                $product->get_regular_price()
                                            )
                                        );
                                        ?>

                                    </span>


                                    <span class="sale-price">

                                        <?php
                                        echo wp_kses_post(
                                            wc_price(
                                                $product->get_sale_price()
                                            )
                                        );
                                        ?>

                                    </span>

                                <?php

                                else :

                                ?>

                                    <span class="sale-price">

                                        <?php
                                        echo wp_kses_post(
                                            wc_price(
                                                $product->get_price()
                                            )
                                        );
                                        ?>

                                    </span>

                                <?php endif; ?>

                            </div>


                            <!-- View Book -->
                            <a
                                href="<?php the_permalink(); ?>"
                                class="btn-get-started"
                            >
                                View Book
                            </a>

                        </div>

                    </div>

                </div>

            <?php

                endwhile;

                wp_reset_postdata();

            else :

            ?>

                <div class="col-12">

                    <p>No books available yet.</p>

                </div>

            <?php endif; ?>

        </div>
<div class="text-center mt-4">

    <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="more-books-btn">
        More Books
        <i class="bi bi-arrow-right"></i>
    </a>

</div>
    </div>

</section>
<!-- /Books Section -->

    <!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">

    <h2>
      <?php echo esc_html(
          get_theme_mod(
              'about_section_title',
              'About Us'
          )
      ); ?>
    </h2>

    <p>
      <?php echo esc_html(
          get_theme_mod(
              'about_section_description',
              'Learn more about our book store and what we offer.'
          )
      ); ?>
    </p>

  </div>
  <!-- End Section Title -->


  <div class="container">

    <div class="row gy-4">


      <!-- Left Content -->
      <div class="col-lg-6 content"
           data-aos="fade-up"
           data-aos-delay="100">

        <p>
          <?php echo esc_html(
              get_theme_mod(
                  'about_left_paragraph',
                  'We are passionate about books and believe that every book opens the door to a new world.'
              )
          ); ?>
        </p>


        <ul>

          <li>
            <i class="bi bi-check2-circle"></i>
            <span>
              <?php echo esc_html(
                  get_theme_mod(
                      'about_bullet_1',
                      'Wide collection of books'
                  )
              ); ?>
            </span>
          </li>


          <li>
            <i class="bi bi-check2-circle"></i>
            <span>
              <?php echo esc_html(
                  get_theme_mod(
                      'about_bullet_2',
                      'Books from different genres'
                  )
              ); ?>
            </span>
          </li>


          <li>
            <i class="bi bi-check2-circle"></i>
            <span>
              <?php echo esc_html(
                  get_theme_mod(
                      'about_bullet_3',
                      'Easy and convenient shopping'
                  )
              ); ?>
            </span>
          </li>

        </ul>

      </div>
      <!-- End Left Content -->


      <!-- Right Content -->
      <div class="col-lg-6"
           data-aos="fade-up"
           data-aos-delay="200">

        <p>
          <?php echo esc_html(
              get_theme_mod(
                  'about_right_paragraph',
                  'Explore our collection and discover books that inspire, educate, and entertain readers of all ages.'
              )
          ); ?>
        </p>


        <a
          href="<?php echo esc_url(
              get_theme_mod(
                  'about_read_more_url',
                  'http://localhost/monthly_project/about/'
              )
          ); ?>"
          class="read-more"
        >

          <span>
            <?php echo esc_html(
                get_theme_mod(
                    'about_read_more_text',
                    'Read More'
                )
            ); ?>
          </span>

          <i class="bi bi-arrow-right"></i>

        </a>

      </div>
      <!-- End Right Content -->

    </div>

  </div>

</section>
<!-- /About Section -->


<!-- Services Section -->
<section id="services" class="services section">

    <div class="container section-title" data-aos="fade-up">

        <h2>
            <?php echo esc_html(
                get_theme_mod(
                    'services_section_title',
                    'Our Services'
                )
            ); ?>
        </h2>

        <p>
            <?php echo esc_html(
                get_theme_mod(
                    'services_section_description',
                    'Explore our services and discover what we offer'
                )
            ); ?>
        </p>

        <div class="row gy-4">

            <!-- Service 1 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex position-relative h-100">

                    <i class="<?php echo esc_attr(
                        get_theme_mod(
                            'service_1_icon',
                            'bi bi-briefcase'
                        )
                    ); ?> icon flex-shrink-0"></i>

                    <div>
                        <h4 class="title">
                            <a href="<?php echo esc_url(
                                get_theme_mod('service_1_url', '#')
                            ); ?>" class="stretched-link">
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'service_1_title',
                                        'Wide Collection'
                                    )
                                ); ?>
                            </a>
                        </h4>

                        <p class="description">
                            <?php echo esc_html(
                                get_theme_mod(
                                    'service_1_description',
                                    'Explore a wide collection of books from different genres and authors.'
                                )
                            ); ?>
                        </p>
                    </div>

                </div>
            </div>


            <!-- Service 2 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item d-flex position-relative h-100">

                    <i class="<?php echo esc_attr(
                        get_theme_mod(
                            'service_2_icon',
                            'bi bi-card-checklist'
                        )
                    ); ?> icon flex-shrink-0"></i>

                    <div>
                        <h4 class="title">
                            <a href="<?php echo esc_url(
                                get_theme_mod('service_2_url', '#')
                            ); ?>" class="stretched-link">
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'service_2_title',
                                        'Easy Shopping'
                                    )
                                ); ?>
                            </a>
                        </h4>

                        <p class="description">
                            <?php echo esc_html(
                                get_theme_mod(
                                    'service_2_description',
                                    'Enjoy a simple and convenient way to find and purchase your favorite books.'
                                )
                            ); ?>
                        </p>
                    </div>

                </div>
            </div>


            <!-- Service 3 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item d-flex position-relative h-100">

                    <i class="<?php echo esc_attr(
                        get_theme_mod(
                            'service_3_icon',
                            'bi bi-bar-chart'
                        )
                    ); ?> icon flex-shrink-0"></i>

                    <div>
                        <h4 class="title">
                            <a href="<?php echo esc_url(
                                get_theme_mod('service_3_url', '#')
                            ); ?>" class="stretched-link">
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'service_3_title',
                                        'Best Selling Books'
                                    )
                                ); ?>
                            </a>
                        </h4>

                        <p class="description">
                            <?php echo esc_html(
                                get_theme_mod(
                                    'service_3_description',
                                    'Discover popular and best-selling books loved by readers.'
                                )
                            ); ?>
                        </p>
                    </div>

                </div>
            </div>


            <!-- Service 4 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item d-flex position-relative h-100">

                    <i class="<?php echo esc_attr(
                        get_theme_mod(
                            'service_4_icon',
                            'bi bi-binoculars'
                        )
                    ); ?> icon flex-shrink-0"></i>

                    <div>
                        <h4 class="title">
                            <a href="<?php echo esc_url(
                                get_theme_mod('service_4_url', '#')
                            ); ?>" class="stretched-link">
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'service_4_title',
                                        'Discover New Books'
                                    )
                                ); ?>
                            </a>
                        </h4>

                        <p class="description">
                            <?php echo esc_html(
                                get_theme_mod(
                                    'service_4_description',
                                    'Find new books and discover exciting stories and ideas.'
                                )
                            ); ?>
                        </p>
                    </div>

                </div>
            </div>


            <!-- Service 5 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item d-flex position-relative h-100">

                    <i class="<?php echo esc_attr(
                        get_theme_mod(
                            'service_5_icon',
                            'bi bi-brightness-high'
                        )
                    ); ?> icon flex-shrink-0"></i>

                    <div>
                        <h4 class="title">
                            <a href="<?php echo esc_url(
                                get_theme_mod('service_5_url', '#')
                            ); ?>" class="stretched-link">
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'service_5_title',
                                        'Quality Books'
                                    )
                                ); ?>
                            </a>
                        </h4>

                        <p class="description">
                            <?php echo esc_html(
                                get_theme_mod(
                                    'service_5_description',
                                    'We provide quality books selected for readers of different interests.'
                                )
                            ); ?>
                        </p>
                    </div>

                </div>
            </div>


            <!-- Service 6 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item d-flex position-relative h-100">

                    <i class="<?php echo esc_attr(
                        get_theme_mod(
                            'service_6_icon',
                            'bi bi-calendar4-week'
                        )
                    ); ?> icon flex-shrink-0"></i>

                    <div>
                        <h4 class="title">
                            <a href="<?php echo esc_url(
                                get_theme_mod('service_6_url', '#')
                            ); ?>" class="stretched-link">
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'service_6_title',
                                        'Regular Updates'
                                    )
                                ); ?>
                            </a>
                        </h4>

                        <p class="description">
                            <?php echo esc_html(
                                get_theme_mod(
                                    'service_6_description',
                                    'Stay updated with new arrivals, popular books, and exciting collections.'
                                )
                            ); ?>
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>
<!-- /Services Section -->

  </main>
<?php get_footer(); ?>