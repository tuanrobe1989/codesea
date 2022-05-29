<?php
// Create class attribute allowing for custom "className" and "align" values.
$className = 'experts';

$id = 'experts-' . $block['id'];

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


?>
<div id="<?php echo $id?>" class="experts__slider <?php echo esc_attr($classes); ?>">
    <?php
    if (have_rows('expert_list')) :
    ?>
        <div id="experts" class="owl-carousel owl-theme">
            <?php
            $i = 0;
            while (have_rows('expert_list')) : the_row(); $i++;
                $image = get_sub_field('image');
                $title = $image['title'];
                $description = $image['description'];;
                $link = get_sub_field('link') ? ' '.get_sub_field('link') : '#';
            ?>
                <div class="experts__item-<?php echo $i ?> experts__item lazy" <?php echo $data ?>>
                    <a href="<?php echo $link ?>">
                        <img src="<?php echo $image['url'] ?>" title="<?php echo $title ?>" alt="<?php echo $description ?>">
                    </a>
                </div>
            <?php
                if(is_admin()):
                ?>
                <style>
                    #<?php echo $id ?> .experts__item-<?php echo $i ?>{
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