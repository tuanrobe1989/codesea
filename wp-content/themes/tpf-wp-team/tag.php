<?php get_header(); ?>
<?php
$category = get_queried_object();
if (!is_front_page()) :
    $title = get_field('custom_title', $category);
    if (!$title) $title = $category->name;
?>
    <div class="page__titWrap">
        <div class="container">
            <h1 class="page__tit"><?php echo $title; ?></h1>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <?php if (have_posts()) : ?>
        <div class="row row__padding-xy-1 blogsWrap">
            <?php
            while (have_posts()) : the_post();
                $post_id = get_the_id();
                $title = get_the_title();
                $no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
                $thumb_pc = get_the_post_thumbnail_url($post_id, 'blog-thumbnails-pc');
                $thumb_mb = get_the_post_thumbnail_url($post_id, 'blog-thumbnail-mb');
            ?>

                <div class="col col-md-4 blog__item">
                    <a href="<?php the_permalink() ?>" class="blog__item__thumbWrap">
                        <figure class="blog__item__thumb">
                            <img src="<?php echo $no_image ?>" data-src="<?php echo $thumb_pc ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>" class="lazy blog__item__thumb--pc" />
                            <img src="<?php echo $no_image ?>" data-src="<?php echo $thumb_mb ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>" class="lazy blog__item__thumb--mb" />
                        </figure>
                    </a>
                    <div class="blog__item__des">
                        <a href="<?php the_permalink() ?>">
                            <strong class="h4 pink blog__item__des--tit"><?php the_title() ?></strong>
                        </a>
                        <p class="blog__item__des--ex"><?php echo excerpt(30) ?></p>
                        <a href="<?php the_permalink() ?>" class="button blog__item__des--button"><?php _e('Xem Thêm', 'codesea') ?></a>
                    </div>
                </div>

            <?php endwhile; ?>
            <div class="col">
                <?php  if (function_exists('wp_paginate')) :
                    wp_paginate();
                endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>