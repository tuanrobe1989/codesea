<?php
$className = 'values';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$list = array('core/list', array('className' => 'values__content__itemList'));
$heading = array('core/heading', array('className' => 'values__content__itemTitle'));
$image = array('core/image', array('className' => 'values__content__itemIcon'));
$column = array('core/column', array('className' => 'values__content__item'), array($image, $heading, $list));
$columns = array('core/columns', array('className' => 'values__contentWrapper'), array($column, $column, $column, $column));
$title = array('core/heading', array('className' => 'values__title'));
$main_column = array('core/columns', array('className' => 'values__container'), array($title, $columns));
$template = array($main_column);



$allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');

$background_image = get_field('background_image');
$background_color = get_field('background_color');
$no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';



?>
<div id="values-<?php echo $block['id'] ?>" class="<?php if($className ) echo ' '. $className ?>" style="background-image: url(<?php echo $background_image ?>)">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>" />
    </div>
</div>