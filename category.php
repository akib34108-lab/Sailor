<?php 
if ( have_posts() ) :
   while ( have_posts() ) : 
      the_post(); 
?>
      <a href="<?php the_permalink(); ?>"><?php the_title( '<h1>', '</h1>' ); ?></a> 
      <br 
      <?php
      the_content();
   endwhile;
endif; 
?>