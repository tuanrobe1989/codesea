<?php
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$template = array(
    array('core/columns', array( 'className' => 'contactBlock__wrap'), array(
        array('core/column', array('className' => 'contactBlock__item thumb'), array(
            array('core/image', array('className' => 'contactBlock__item--img')),
        )),
        array('core/column', array( 'className' => 'contactBlock__item info'),array(
            'core/heading', array('className' => 'contactBlock__item--tit') 
        )),
    ))
);

// $allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');
$no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';

?>

<div id="contactBlock-<?php echo $block['id'] ?>" class="contactBlock<?php if($className ) echo ' '. $className ?>">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="all" />
    </div>
</div>