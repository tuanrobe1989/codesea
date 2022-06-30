<?php get_header(); ?>
<?php
if (!is_front_page()) :
    global $post;
    $title = get_field('custom_title');
    $number_of_comment = get_comments_number();
    if (!$title) $title = get_the_title();
?>
    <div class="page__titWrap">
        <div class="container">
            <strong class="h1 page__tit"><?php _e('Blog Detail', 'codesea') ?></strong>
            <?php
            if (function_exists('yoast_breadcrumb')) :
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            endif;
            ?>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <?php if (have_posts()) : ?>
        <div class="row row__padding-xy-1 singlePost">
            <?php while (have_posts()) : the_post();  ?>
                <h1 class="col col-12 pink singlePost__tit"><?php the_title(); ?></h1>
                <div class="col col-12 singlePost__date">
                    <time datetime="<?php echo get_the_date('Y-m-d') ?>"><?php echo get_the_date('d/m/Y') ?></time> | <?php echo __('Bình Luận', 'codesea') . ': '; ?><?php echo $number_of_comment; ?>
                </div>
                <div class="col col-lg-8 singlePost__content">
                    <?php the_content(); ?>
                    <div class="singlePost__comment">
                        <?php
                        $comments_args = array(
                            'label_submit' => __('Gửi', 'codesea'),
                            'title_reply' => __('Câu hỏi của bạn', 'codesea'),
                            'comment_notes_after' => '',
                            'comment_field' => '<p class="comment-form-comment"><label class="comment" for="comment">' . _x('Comment', 'noun') . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
                        );
                        comment_form($comments_args);
                        ?>
                    </div>
                </div>

            <?php endwhile; ?>

            <div class="col col-lg-4 singlePost__sidebar">
                <?php dynamic_sidebar('single-sidebar');  ?>
            </div>

            <?php
            $comments = get_comments($post);
            if ($comments) :
            ?>
                <div class="col singlePost__commentAppWrap">
                    <strong class="h3 comment-reply-title"><?php echo __("Bình Luận", 'codesea') . "($number_of_comment)" ?></strong>
                    <?php
                    echo '<ul class="singlePost__commentApp">';
                    wp_list_comments(array(
                        'avatar_size' => 60,
                        // 'per_page' => 1,
                    ), $comments);
                    echo '</ul>';


                    $comments_per_page = 24;
                    $total_comments_pages = (($number_of_comment - 1) / $comments_per_page) + 1;
                    $current_comment_page = (get_query_var('cpage')) ? get_query_var('cpage') : 1 ;
                    ?>
                    <ol class="navigation">
                    <?php
                    $comment_pagination = paginate_comments_links(
                        array(
                            'base' => add_query_arg( 'cpage', '%#%' ),
                            'format' => '',
                            'total' => $total_comments_pages,
                            'current' => $current_comment_page,
                            'echo' => true,
                            'add_fragment' => '#comments'
                        )
                    );

                    ?>
                    </ol>
                </div>

            <?php endif; ?>
            
        </div>
    <?php
    endif; ?>
</div>
<?php get_footer(); ?>