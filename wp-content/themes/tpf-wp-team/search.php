<?php get_header(); ?>
<?php
if (!is_front_page()) :
    $title = get_field('custom_title');
    $number_of_comment = get_comments_number();
    if (!$title) $title = get_the_title();
?>
    <div class="page__titWrap">
        <div class="container">
            <h1 class="h1 page__tit"><?php _e('Tìm Kiếm', 'codesea') ?></h1>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row row__padding-xy-1 singlePost">
        <div class="col col-lg-8 singlePost__content">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="mb-1 no-under"><p><strong class="h2 pink"><?php the_title(); ?></strong></p></a>
                    <a href="<?php the_permalink() ?>" class=" no-under"><?php echo excerpt(50); ?></a>
                    <hr class="mb-1 mt-1">
            <?php
                endwhile;
                if (function_exists('wp_paginate')) :
                    wp_paginate();
                endif;
            endif; ?>
        </div>

        <div class="col col-lg-4 singlePost__sidebar">
            <?php dynamic_sidebar('single-sidebar');  ?>
        </div>

    </div>

</div>
<?php get_footer(); ?>