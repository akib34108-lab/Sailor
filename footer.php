<footer id="footer" class="footer dark-background">

    <div class="container footer-top">

        <div class="row gy-4">

            <!-- Footer About -->
            <div class="col-lg-4 col-md-6 footer-about">

                <a href="<?php echo esc_url(home_url('/')); ?>"
                   class="logo d-flex align-items-center fw-bold fs-4 mb-3">

                    
                       
                        <?php bloginfo('title'); ?>

                </a>

                <div class="footer-contact pt-3">

                    <p>
                        <?php echo esc_html(
                            get_theme_mod(
                                'footer_address_1',
                                'A108 Adam Street'
                            )
                        ); ?>
                    </p>

                    <p>
                        <?php echo esc_html(
                            get_theme_mod(
                                'footer_address_2',
                                'New York, NY 535022'
                            )
                        ); ?>
                    </p>

                    <p class="mt-3">
                        <strong>Phone:</strong>
                        <span>
                            <?php echo esc_html(
                                get_theme_mod(
                                    'footer_phone',
                                    '+1 5589 55488 55'
                                )
                            ); ?>
                        </span>
                    </p>

                    <p>
                        <strong>Email:</strong>
                        <span>
                            <?php echo esc_html(
                                get_theme_mod(
                                    'footer_email',
                                    'info@example.com'
                                )
                            ); ?>
                        </span>
                    </p>

                </div>


                <!-- Social Links -->
                <div class="social-links d-flex mt-4">

                    <a href="<?php echo esc_url(
                        get_theme_mod('footer_twitter', '#')
                    ); ?>">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="<?php echo esc_url(
                        get_theme_mod('footer_facebook', '#')
                    ); ?>">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="<?php echo esc_url(
                        get_theme_mod('footer_instagram', '#')
                    ); ?>">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="<?php echo esc_url(
                        get_theme_mod('footer_linkedin', '#')
                    ); ?>">
                        <i class="bi bi-linkedin"></i>
                    </a>

                </div>

            </div>


            <!-- Useful Links -->
            <div class="col-lg-2 col-md-3 footer-links">

                <h4>
                    <?php echo esc_html(
                        get_theme_mod(
                            'footer_useful_links_title',
                            'Useful Links'
                        )
                    ); ?>
                </h4>

                <ul>

                    <?php for ($i = 1; $i <= 5; $i++) : ?>

                        <li>
                            <a href="<?php echo esc_url(
                                get_theme_mod(
                                    'footer_useful_link_' . $i . '_url',
                                    '#'
                                )
                            ); ?>">

                                <?php echo esc_html(
                                    get_theme_mod(
                                        'footer_useful_link_' . $i . '_text',
                                        'Link ' . $i
                                    )
                                ); ?>

                            </a>
                        </li>

                    <?php endfor; ?>

                </ul>

            </div>


            <!-- Services -->
            <div class="col-lg-2 col-md-3 footer-links">

                <h4>
                    <?php echo esc_html(
                        get_theme_mod(
                            'footer_services_title',
                            'Our Services'
                        )
                    ); ?>
                </h4>

                <ul>

                    <?php for ($i = 1; $i <= 5; $i++) : ?>

                        <li>
                            <a href="<?php echo esc_url(
                                get_theme_mod(
                                    'footer_service_' . $i . '_url',
                                    '#'
                                )
                            ); ?>">

                                <?php echo esc_html(
                                    get_theme_mod(
                                        'footer_service_' . $i . '_text',
                                        'Service ' . $i
                                    )
                                ); ?>

                            </a>
                        </li>

                    <?php endfor; ?>

                </ul>

            </div>


            <!-- Newsletter -->
            <div class="col-lg-4 col-md-12 footer-newsletter">

                <h4>
                    <?php echo esc_html(
                        get_theme_mod(
                            'footer_newsletter_title',
                            'Our Newsletter'
                        )
                    ); ?>
                </h4>

                <p>
                    <?php echo esc_html(
                        get_theme_mod(
                            'footer_newsletter_description',
                            'Subscribe to our newsletter and receive the latest news about our books and services!'
                        )
                    ); ?>
                </p>

                <form action="forms/newsletter.php"
                      method="post"
                      class="php-email-form">

                    <div class="newsletter-form">

                        <input type="email" name="email">

                        <input type="submit"
                               value="<?php echo esc_attr(
                                   get_theme_mod(
                                       'footer_newsletter_button',
                                       'Subscribe'
                                   )
                               ); ?>">

                    </div>

                    <div class="loading">Loading</div>

                    <div class="error-message"></div>

                    <div class="sent-message">
                        Your subscription request has been sent. Thank you!
                    </div>

                </form>

            </div>

        </div>

    </div>


    <!-- Copyright -->
    <div class="container copyright text-center mt-4">

        <p>
            ©
            <span><?php echo date('Y'); ?></span>

            <strong class="px-1 sitename">
                <?php bloginfo('title'); ?>
            </strong>

            <span>
                <?php echo esc_html(
                    get_theme_mod(
                        'footer_copyright_text',
                        'All Rights Reserved'
                    )
                ); ?>
            </span>
        </p>

        <div class="credits"></div>

    </div>

</footer>


<!-- Scroll Top -->
<a href="#"
   id="scroll-top"
   class="scroll-top d-flex align-items-center justify-content-center">

    <i class="bi bi-arrow-up-short"></i>

</a>


<!-- Preloader -->
<div id="preloader"></div>


<!-- Vendor JS Files -->
<script src="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/aos/aos.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>


<!-- Main JS File -->
<script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>