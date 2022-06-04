<?php
$className = 'tuition';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

$item_desc3 = array('core/paragraph', array('className' => 'tuition__column__desc tuition__column__desc--3 '));
$item_desc2 = array('core/paragraph', array('className' => 'tuition__column__desc tuition__column__desc--2 '));
$item_desc1 = array('core/paragraph', array('className' => 'tuition__column__desc tuition__column__desc--1 '));
$column = array('core/column', array('className' => 'tuition__column'), array($item_desc1, $item_desc2, $item_desc3));
$columns = array('core/columns', array('className' => 'tuition__columns'), array($column, $column));
$paragraph = array('core/paragraph', array('className' => 'tuition__heading'));
$title = array('core/heading', array('className' => 'tuition__title'));

$template = array($title, $paragraph, $columns);

$allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');

?>
<div id="tuition-<?php echo $block['id'] ?>" class="<?php if ($className) echo ' ' . $className ?>">
  <div class="container tuition__container">
    <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>" />
  </div>
</div>