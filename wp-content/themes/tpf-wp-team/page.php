<?php get_header(); ?>
<?php 
    if (!is_front_page()) : 
        $title = get_field('custom_title');
        if(!$title) $title = get_the_title();
?>
    <div class="page__titWrap">
        <div class="container">
            <h1 class="page__tit"><?php echo $title; ?></h1>
        </div>
    </div>
<?php endif; ?>
<?php the_content(); ?>
<?php get_footer(); ?>