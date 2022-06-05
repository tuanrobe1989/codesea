<?php get_header(); ?>
<?php if (!is_front_page()) : ?>
    <div class="page__titWrap">
        <div class="container">
            <h1 class="page__tit"><?php the_title() ?></h1>
        </div>
    </div>
<?php endif; ?>
<?php the_content(); ?>
<?php get_footer(); ?>