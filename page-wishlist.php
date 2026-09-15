<?php
/**
 * Template for the WooCommerce wishlist page
 * (Automatically used by WordPress because the page slug is "wishlist")
 */

get_header();
?>

<main id="main">

    <section class="book-details section">

        <div class="container">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </section>

</main>

<?php
get_footer();
?>