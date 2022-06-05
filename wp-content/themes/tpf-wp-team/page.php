<?php get_header(); ?>
<?php if (!is_front_page()) : ?>
    <div class="page__tit">
        <h1><?php the_title() ?></h1>
    </div>
<?php endif; ?>
<?php the_content(); ?>
<?php get_footer(); ?>