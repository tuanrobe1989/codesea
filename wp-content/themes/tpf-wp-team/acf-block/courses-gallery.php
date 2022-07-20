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
<div id="<?php echo $id?>" class="courseGallery__slider <?php echo esc_attr($classes); ?>">
    <?php
    if (have_rows('course_gallery')) :
    ?>
        <div class="owl-carousel owl-theme courseGallery">
            <?php
            $i = 0;
            while (have_rows('course_gallery')) : the_row(); $i++;
                $image = get_sub_field('image');
                $title = $image['title'];
                $description = $image['description'];;
                $link = get_sub_field('link') ? ' '.get_sub_field('link') : '#';
            ?>
                <div class="courseGallery__item-<?php echo $i ?> courseGallery__item lazy" <?php echo $data ?>>
                    <a href="<?php echo $link ?>">
                        <img src="<?php echo noimage ?>" data-src="<?php echo $image['url'] ?>" title="<?php echo $title ?>" alt="<?php echo $description ?>"  class="owl-lazy">
                    </a>
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