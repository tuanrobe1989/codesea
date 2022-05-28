<?php
// Create class attribute allowing for custom "className" and "align" values.
$className = 'courseGallery';

$id = 'courseGallery-' . $block['id'];

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


?>
<div id="<?php echo $id?>" class="courseGallery <?php echo esc_attr($classes); ?>">
    <?php
    if (have_rows('course_gallery')) :
    ?>
        <div class="owl-carousel owl-theme" data-dots="false">
            <?php
            $i = 0;
            while (have_rows('course_gallery')) : the_row(); $i++;
                $image = get_sub_field('image');
                $title = $image['title'];
                $description = $image['description'];;
                $link = get_sub_field('link') ? ' '.get_sub_field('link') : '#';
            ?>
                <div class="courseGallery__item-<?php echo $i ?> courseGallery__item lazy" <?php echo $data ?>>
                    <div class="container courseGallery__item__content">
                        <div class="mw_888">
                            <?php echo $title ?>
                            <?php echo $description ?>
                            <?php if ($button_text) : ?>
                                <a href="<?php echo $link ?>" class="wp-block-button__link sg-popup-custom-01"><?php echo $button_text ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                if(is_admin()):
                ?>
                <style>
                    #<?php echo $id ?> .courseGallery__item-<?php echo $i ?>{
                        background-image: url(<?php echo $image ?>);
                    }
                </style>
                <?php
                endif;
            endwhile;
            ?>
        </div>
    <?php
    endif;
    ?>
</div>