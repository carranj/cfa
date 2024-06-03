<?php get_header(); ?>

    <div class="container">
    
    <?php 
      $args = array( 'post_type' => 'success-stories', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          the_title();
          echo '<div class="entry-content">';
          the_content();
          echo '</div>';
        endwhile;
    ?>
      </div>

   <?php get_footer(); ?> 