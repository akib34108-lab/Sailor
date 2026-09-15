<?php get_header(); ?>

<main id="main">

    <!-- Book Details Section -->
    <section class="book-details section">

        <div class="container">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    $author = get_post_meta(
                        get_the_ID(),
                        '_book_author',
                        true
                    );

                    $price = get_post_meta(
                        get_the_ID(),
                        '_book_price',
                        true
                    );

                    $discount_price = get_post_meta(
                        get_the_ID(),
                        '_book_discount_price',
                        true
                    );

                    $isbn = get_post_meta(
                        get_the_ID(),
                        '_book_isbn',
                        true
                    );

                    $publisher = get_post_meta(
                        get_the_ID(),
                        '_book_publisher',
                        true
                    );
                    ?>

                    <div class="row gy-5">

                        <!-- Book Image -->
                        <div class="col-lg-5">

                            <div class="book-single-image">

                                <?php if ( has_post_thumbnail() ) : ?>

                                    <?php the_post_thumbnail(
                                        'large',
                                        array(
                                            'class' => 'img-fluid'
                                        )
                                    ); ?>

                                <?php endif; ?>

                            </div>

                        </div>


                        <!-- Book Information -->
                        <div class="col-lg-7">

                            <div class="book-single-info">

                                <h1><?php the_title(); ?></h1>

                                <?php if ( $author ) : ?>

                                    <p>
                                        <strong>Author:</strong>
                                        <?php echo esc_html( $author ); ?>
                                    </p>

                                <?php endif; ?>


                                <?php if ( $publisher ) : ?>

                                    <p>
                                        <strong>Publisher:</strong>
                                        <?php echo esc_html( $publisher ); ?>
                                    </p>

                                <?php endif; ?>


                                <?php if ( $isbn ) : ?>

                                    <p>
                                        <strong>ISBN:</strong>
                                        <?php echo esc_html( $isbn ); ?>
                                    </p>

                                <?php endif; ?>


                                <div class="book-single-price">

                                    <?php if ( $discount_price ) : ?>

                                        <span class="old-price">
                                            ৳<?php echo esc_html( $price ); ?>
                                        </span>

                                        <span class="sale-price">
                                            ৳<?php echo esc_html( $discount_price ); ?>
                                        </span>

                                    <?php elseif ( $price ) : ?>

                                        <span class="sale-price">
                                            ৳<?php echo esc_html( $price ); ?>
                                        </span>

                                    <?php endif; ?>

                                </div>


                                <!-- Description -->
                                <div class="book-description">

                                    <h3>Book Description</h3>

                                    <?php the_content(); ?>

                                </div>


                                <a
                                    href="#"
                                    class="btn-get-started"
                                >
                                    Add to Cart
                                </a>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </section>

</main>

<?php get_footer(); ?>