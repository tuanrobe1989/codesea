<?php

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<div class="category__item">
			<article class="category__itemWrapper" id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" class="category__item__thumbnailWrapper">
					<?php
						if ( has_post_thumbnail() ) :
							echo '<div class="category__item__thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'blog-thumbnails') . '</div>';
						else :
							echo '<div class="category__item__thumbnail"><img src="' . get_template_directory() . '/sources/images/placeholder.jpg"/></div>';
						endif;
					?>
				</a>
				<div class="category__item__contentWrapper">
					<h3 class="category__item__title"><?php the_title(); ?></h3>
					<p class="category__item__excerpt">
						<?php echo has_excerpt() ? excerpt(36) : wp_trim_words(do_shortcode(get_the_content()), 36, '...' ); ?>
					</p>
					<p class="category__item__moreBtn"><a href="<?php echo get_the_permalink();?>">Read more</a></p>
				</div>
			</article>
		</div>
		<?php
	endwhile;
endif;

wp_reset_postdata();

