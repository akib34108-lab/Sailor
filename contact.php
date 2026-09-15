<?php
/*
 template name: Contact
*/
    get_header();
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">

        <div class="container d-lg-flex justify-content-between align-items-center">

            <h1 class="mb-2 mb-lg-0">
                <?php echo esc_html(
                    get_theme_mod(
                        'contact_page_title',
                        'Contact'
                    )
                ); ?>
            </h1>

            <nav class="breadcrumbs">

                <ol>

                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo esc_html(
                                get_theme_mod(
                                    'contact_breadcrumb_home',
                                    'Home'
                                )
                            ); ?>
                        </a>
                    </li>

                    <li class="current">
                        <?php echo esc_html(
                            get_theme_mod(
                                'contact_breadcrumb_current',
                                'Contact'
                            )
                        ); ?>
                    </li>

                </ol>

            </nav>

        </div>

    </div>
    <!-- End Page Title -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container"
             data-aos="fade-up"
             data-aos-delay="100">


            <!-- Google Map -->
            <div class="mb-4"
                 data-aos="fade-up"
                 data-aos-delay="200">

                <iframe
                    style="border:0; width:100%; height:270px;"
                    src="<?php echo esc_url(
                        get_theme_mod(
                            'contact_map_url',
                            'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus'
                        )
                    ); ?>"
                    frameborder="0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>
            <!-- End Google Maps -->


            <div class="row gy-4">


                <!-- Contact Information -->
                <div class="col-lg-4">


                    <!-- Address -->
                    <div class="info-item d-flex"
                         data-aos="fade-up"
                         data-aos-delay="300">

                        <i class="bi bi-geo-alt flex-shrink-0"></i>

                        <div>

                            <h3>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'contact_address_title',
                                        'Address'
                                    )
                                ); ?>
                            </h3>

                            <p>
                                <?php echo nl2br(
                                    esc_html(
                                        get_theme_mod(
                                            'contact_address',
                                            'Chattogram, Bangladesh'
                                        )
                                    )
                                ); ?>
                            </p>

                        </div>

                    </div>
                    <!-- End Address -->


                    <!-- Phone -->
                    <div class="info-item d-flex"
                         data-aos="fade-up"
                         data-aos-delay="400">

                        <i class="bi bi-telephone flex-shrink-0"></i>

                        <div>

                            <h3>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'contact_phone_title',
                                        'Call Us'
                                    )
                                ); ?>
                            </h3>

                            <p>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'contact_phone',
                                        '+880 1XXX-XXXXXX'
                                    )
                                ); ?>
                            </p>

                        </div>

                    </div>
                    <!-- End Phone -->


                    <!-- Email -->
                    <div class="info-item d-flex"
                         data-aos="fade-up"
                         data-aos-delay="500">

                        <i class="bi bi-envelope flex-shrink-0"></i>

                        <div>

                            <h3>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'contact_email_title',
                                        'Email Us'
                                    )
                                ); ?>
                            </h3>

                            <p>
                                <?php echo esc_html(
                                    get_theme_mod(
                                        'contact_email',
                                        'info@pagineo.com'
                                    )
                                ); ?>
                            </p>

                        </div>

                    </div>
                    <!-- End Email -->


                </div>
                <!-- End Contact Information -->


                <!-- Contact Form -->
                <div class="col-lg-8">

                    <form
                        action=""
                        method="post"
                        class="php-email-form"
                        data-aos="fade-up"
                        data-aos-delay="200">

                        <div class="row gy-4">


                            <!-- Name -->
                            <div class="col-md-6">

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="<?php echo esc_attr(
                                        get_theme_mod(
                                            'contact_name_placeholder',
                                            'Your Name'
                                        )
                                    ); ?>"
                                    required>

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="<?php echo esc_attr(
                                        get_theme_mod(
                                            'contact_email_placeholder',
                                            'Your Email'
                                        )
                                    ); ?>"
                                    required>

                            </div>


                            <!-- Subject -->
                            <div class="col-md-12">

                                <input
                                    type="text"
                                    class="form-control"
                                    name="subject"
                                    placeholder="<?php echo esc_attr(
                                        get_theme_mod(
                                            'contact_subject_placeholder',
                                            'Subject'
                                        )
                                    ); ?>"
                                    required>

                            </div>


                            <!-- Message -->
                            <div class="col-md-12">

                                <textarea
                                    class="form-control"
                                    name="message"
                                    rows="6"
                                    placeholder="<?php echo esc_attr(
                                        get_theme_mod(
                                            'contact_message_placeholder',
                                            'Message'
                                        )
                                    ); ?>"
                                    required></textarea>

                            </div>


                            <!-- Submit -->
                            <div class="col-md-12 text-center">


                                <div class="loading">

                                    <?php echo esc_html(
                                        get_theme_mod(
                                            'contact_loading_text',
                                            'Loading'
                                        )
                                    ); ?>

                                </div>


                                <div class="error-message">

                                    <?php echo esc_html(
                                        get_theme_mod(
                                            'contact_error_text',
                                            'Something went wrong. Please try again.'
                                        )
                                    ); ?>

                                </div>


                                <div class="sent-message">

                                    <?php echo esc_html(
                                        get_theme_mod(
                                            'contact_success_text',
                                            'Your message has been sent. Thank you for contacting Pagineo!'
                                        )
                                    ); ?>

                                </div>


                                <button type="submit">

                                    <?php echo esc_html(
                                        get_theme_mod(
                                            'contact_button_text',
                                            'Send Message'
                                        )
                                    ); ?>

                                </button>


                            </div>

                        </div>

                    </form>

                </div>
                <!-- End Contact Form -->


            </div>

        </div>

    </section>
    <!-- /Contact Section -->

</main>
  <?php get_footer(); ?>