<?php
/*
 template name: About
*/
    get_header();
?>

  <main class="main">

    <!-- Page Title -->
   <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">

        <h1 class="mb-2 mb-lg-0">
    <?php echo esc_html(get_theme_mod('about_page_title', 'About')); ?>
</h1>

        <nav class="breadcrumbs">
            <ol>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo esc_html(get_theme_mod('about_breadcrumb_home', 'Home')); ?>
                    </a>
                </li>

                <li class="current">
                    <?php echo esc_html(get_theme_mod('about_breadcrumb_current', 'About')); ?>
                </li>
            </ol>
        </nav>

    </div>
</div><!-- End Page Title -->

    <!-- About 2 Section -->
<section id="about-2" class="about-2 section">

    <div class="container" data-aos="fade-up">

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <!-- Image -->
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="<?php echo esc_url(
    get_theme_mod(
        'about2_image',
        get_theme_file_uri('/assets/img/about-portrait.jpg')
    )
); ?>"
class="img-fluid"
alt="Pagineo Book Store">
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-7">

                <h3 class="pt-0 pt-lg-5">
                    <?php echo esc_html(
                        get_theme_mod(
                            'about2_heading',
                            'Discover Your Next Favorite Book'
                        )
                    ); ?>
                </h3>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">

                    <?php for ($i = 1; $i <= 3; $i++) : ?>

                        <li>
                            <a class="nav-link <?php echo ($i === 1) ? 'active' : ''; ?>"
                               data-bs-toggle="pill"
                               href="#about-2-tab<?php echo $i; ?>">

                                <?php echo esc_html(
                                    get_theme_mod(
                                        "about2_tab{$i}_title",
                                        "Tab {$i}"
                                    )
                                ); ?>

                            </a>
                        </li>

                    <?php endfor; ?>

                </ul>
                <!-- End Tabs -->


                <!-- Tab Content -->
                <div class="tab-content">

                    <?php for ($i = 1; $i <= 3; $i++) : ?>

                        <div class="tab-pane fade <?php echo ($i === 1) ? 'show active' : ''; ?>"
                             id="about-2-tab<?php echo $i; ?>">

                            <!-- Introduction -->
                            <p class="fst-italic">
                                <?php echo esc_html(
                                    get_theme_mod(
                                        "about2_tab{$i}_intro",
                                        'Explore our collection and find books you will love.'
                                    )
                                ); ?>
                            </p>


                            <!-- Features -->
                            <?php for ($j = 1; $j <= 3; $j++) : ?>

                                <div class="d-flex align-items-center mt-4">

                                    <i class="bi bi-check2"></i>

                                    <h4>
                                        <?php echo esc_html(
                                            get_theme_mod(
                                                "about2_tab{$i}_feature{$j}_title",
                                                "Book Store Feature {$j}"
                                            )
                                        ); ?>
                                    </h4>

                                </div>

                                <p>
                                    <?php echo esc_html(
                                        get_theme_mod(
                                            "about2_tab{$i}_feature{$j}_text",
                                            'We provide a convenient way to discover and purchase quality books.'
                                        )
                                    ); ?>
                                </p>

                            <?php endfor; ?>

                        </div>

                    <?php endfor; ?>

                </div>
                <!-- End Tab Content -->

            </div>

        </div>

    </div>

</section>
<!-- /About 2 Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

    <div class="container">

        <!-- Team Section Title -->
        <div class="section-title text-center mb-5">
            <h2>
                <?php echo esc_html(
                    get_theme_mod('team_section_title', 'Our Team')
                ); ?>
            </h2>
        </div>

        <div class="row gy-4">

            <?php for ($i = 1; $i <= 4; $i++) : ?>

                <div class="col-lg-6"
                     data-aos="fade-up"
                     data-aos-delay="<?php echo $i * 100; ?>">

                    <div class="team-member d-flex align-items-start">

                        <!-- Image -->
                        <div class="pic">

                            <img
                                src="<?php echo esc_url(
                                    get_theme_mod(
                                        "team_{$i}_image",
                                        get_theme_file_uri(
                                            "/assets/img/team/team-{$i}.jpg"
                                        )
                                    )
                                ); ?>"
                                class="img-fluid"
                                alt="<?php echo esc_attr(
                                    get_theme_mod(
                                        "team_{$i}_name",
                                        "Team Member {$i}"
                                    )
                                ); ?>"
                            >

                        </div>


                        <!-- Member Info -->
                        <div class="member-info">

                            <h4>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        "team_{$i}_name",
                                        "Team Member {$i}"
                                    )
                                ); ?>
                            </h4>


                            <span>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        "team_{$i}_role",
                                        "Book Store Team"
                                    )
                                ); ?>
                            </span>


                            <p>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        "team_{$i}_description",
                                        "Helping readers discover great books at Pagineo."
                                    )
                                ); ?>
                            </p>


                            <!-- Social Links -->
                            <div class="social">

                                <a href="<?php echo esc_url(
                                    get_theme_mod(
                                        "team_{$i}_twitter",
                                        '#'
                                    )
                                ); ?>">
                                    <i class="bi bi-twitter-x"></i>
                                </a>


                                <a href="<?php echo esc_url(
                                    get_theme_mod(
                                        "team_{$i}_facebook",
                                        '#'
                                    )
                                ); ?>">
                                    <i class="bi bi-facebook"></i>
                                </a>


                                <a href="<?php echo esc_url(
                                    get_theme_mod(
                                        "team_{$i}_instagram",
                                        '#'
                                    )
                                ); ?>">
                                    <i class="bi bi-instagram"></i>
                                </a>


                                <a href="<?php echo esc_url(
                                    get_theme_mod(
                                        "team_{$i}_linkedin",
                                        '#'
                                    )
                                ); ?>">
                                    <i class="bi bi-linkedin"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endfor; ?>

        </div>

    </div>

</section><!-- /Team Section -->

  </main>
  <?php get_footer(); ?>