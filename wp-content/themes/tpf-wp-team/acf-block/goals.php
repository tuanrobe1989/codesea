<?php
$className = 'goals';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


$image = array('core/image', array('className' => 'goals__scheduleColumn__imgBg'));
$column_left = array('core/column', array('className' => 'goals__scheduleColumn'), array($image));

$paragraph_schedule = array('core/paragraph', array('className' => 'goals__scheduleColumn__desc'));
$heading = array('core/heading', array('className' => 'goals__scheduleColumn__itemTitle'));
$column_right = array('core/column', array('className' => 'goals__scheduleColumn goals__scheduleColumn__detail'), array($heading, $paragraph_schedule, $paragraph_schedule, $paragraph_schedule));
$columns = array('core/columns', array('className' => 'goals__scheduledColumns'), array($column_left, $column_right));
$item_desc = array('core/paragraph', array('className' => 'goals__item__desc'));
$item_img = array('core/image', array('className' => 'goals__item__img'));
$item = array('core/column', array('className' => 'goals__item'), array($item_img, $item_desc));
$list = array('core/columns', array('className' => 'goals__itemList'), array($item, $item, $item));
$title = array('core/heading', array('className' => 'goals__title'));
$paragraph = array('core/paragraph', array('className' => 'goals__heading'));

$main_column = array('core/columns', array('className' => 'goals__container'), array($paragraph, $title, $list,$columns));
$template = array($main_column);

$allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');


?>
<div id="goals-<?php echo $block['id'] ?>" class="<?php if($className ) echo ' '. $className ?>">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>" />
    </div>
</div>