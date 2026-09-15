<?php

get_header();

?>
<style>
    .shop-wishlist {
    margin-bottom: 25px;
}

.wishlist-link {
    display: inline-block;
    text-decoration: none;
    font-weight: 600;
}
</style>
<main id="main">

    <section class="book-details section">

        <div class="container">

            <?php

            if ( function_exists( 'woocommerce_content' ) ) {

                woocommerce_content();

            }

            ?>

        </div>

    </section>

</main>

<?php

get_footer();

?>