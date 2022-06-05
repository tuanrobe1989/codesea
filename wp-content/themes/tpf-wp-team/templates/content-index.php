<?php
/**
 * The template for displaying content in the index.php template
 */
$test = 'test';

?>

<div class="col-md-4 col-lg-3">
	<article class="post-item mb-5" id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink() ?>">
      <?php
        if ( has_post_thumbnail() ) :
          echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'blog-thumbnails') . '</div>';
        else :
          echo '<div class="post-thumbnail"><img src="' . get_template_directory() . '/sources/images/placeholder.jpg"/></div>';
        endif;
      ?>
    </a>
    <h3><?php the_title(); ?></h3>
    <p class="text-excerpt">
      <?php echo has_excerpt() ? excerpt(36) : wp_trim_words(do_shortcode(get_the_content()), 36, '...' ); ?>
    </p>
    <p class="text-readmore"><a href="<?php echo get_the_permalink();?>">Read more</a></p>

	</article><!-- /#post-<?php the_ID(); ?> -->
</div>