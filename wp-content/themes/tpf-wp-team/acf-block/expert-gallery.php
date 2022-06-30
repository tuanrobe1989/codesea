<?php
// Create class attribute allowing for custom "className" and "align" values.
$className = '';

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
        <div class="owl-carousel owl-theme experts">
            <?php
            $i = 0;
            while (have_rows('expert_list')) : the_row(); $i++;
                $image = get_sub_field('image');
                $title = $image['title'];
                $description = $image['description'];;
                $name = get_sub_field('name');
                $position = get_sub_field('position');
                $link = get_sub_field('link') ? ' '.get_sub_field('link') : '#';
            ?>
                <div class="experts__item-<?php echo $i ?> experts__item lazy" <?php echo $data ?>>
                    <a href="<?php echo $link ?>" class="experts__item__link">
                        <span class="experts__item__infoWrapper">
                            <div>
                                <strong class="experts__item__name"><?php echo $name ?></strong>
                                <span class="experts__item__position"><?php echo $position ?></span>
                            </div>                            
                        </span>
                        <img src="<?php echo noimage ?>" data-src="<?php echo $image['url'] ?>" title="<?php echo $title ?>" alt="<?php echo $description ?>" class="owl-lazy">
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