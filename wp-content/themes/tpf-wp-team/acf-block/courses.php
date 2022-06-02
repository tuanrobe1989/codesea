<?php
$className = 'courses';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


$image = array('core/image', array('className' => 'courses__item__itemImg'), array('url' => 'www.google.com.vn'));
$column = array('core/column', array('className' => 'courses__item'), array($image));
$columns = array('core/columns', array('className' => 'courses__list mw__950'), array($column, $column, $column, $column));
$title = array('core/heading', array('className' => 'courses__title h2'));
$main_column = array('core/columns', array('className' => 'courses__container'), array($title, $columns));
$template = array($main_column);



$allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');

$background_image = get_field('background_image');
$background_color = get_field('background_color');
$no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';



?>
<div id="courses-<?php echo $block['id'] ?>" class="<?php if($className ) echo ' '. $className ?>" style="background-image: url(<?php echo $background_image ?>)">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>" />
    </div>
</div>