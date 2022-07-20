<?php get_header(); ?>
<?php 
    if (!is_front_page()) : 
        $title = get_field('custom_title');
        if(!$title) $title = get_the_title();
?>
    <div class="page__titWrap">
        <div class="container">
            <h1 class="page__tit"><?php _e('Trang Không Tìm Thấy','codesea') ?></h1>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <p><?php _e('Chúng tôi sẽ chuyển hướng bạn về trang chủ trong 3 giây, xin cám ơn!'); ?></p>
    <script>
        setTimeout(function(){
            window.location = '<?php echo BLOG_HOME ?>'
        }, 3500);
    </script>
</div>
<?php get_footer(); ?>