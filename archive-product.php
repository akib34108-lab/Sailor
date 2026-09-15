<?php
get_header();
?>

<main id="main">

    <section class="shop section">

        <div class="container">

            <div class="section-title">
                <h2>Shop</h2>
                <p>Explore Our Books</p>
            </div>

            <?php
            if ( woocommerce_product_loop() ) :

                woocommerce_product_loop_start();

                while ( have_posts() ) :
                    the_post();

                    wc_get_template_part( 'content', 'product' );

                endwhile;

                woocommerce_product_loop_end();

                do_action( 'woocommerce_after_shop_loop' );

            else :

                do_action( 'woocommerce_no_products_found' );

            endif;
            ?>

        </div>

    </section>

</main>

<?php
get_footer();
?>