<?php
get_header();

if ( have_posts() ) :
  ?>
  <div class="category">
    <div class="container category__container">
      <?php get_template_part( 'templates/archive-loop' ); ?>
    </div>
  </div>
  <?php
else :
	// 404
	get_template_part( 'templates/content-none' );
endif;
wp_reset_postdata();
get_footer();
