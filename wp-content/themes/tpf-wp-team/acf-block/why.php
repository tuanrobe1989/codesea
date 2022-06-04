<?php
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$template = array(
    array('core/columns', array( 'className' => 'whyBlock__wrap'), array(
        array('core/column', array('className' => 'whyBlock__item thumb'), array(
            array('core/image', array('className' => 'whyBlock__item--img')),
        )),
        array('core/column', array( 'className' => 'whyBlock__item info'), array(
            array('core/heading', array('className' => 'pink whyBlock__item--tit')),
            array('core/group', array('className' => 'whyBlock__item__des'), array(
                array('core/paragraph')
            )),
        )),
    ))
);

// $allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');
$no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';

?>

<div id="whyBlock-<?php echo $block['id'] ?>" class="whyBlock<?php if($className ) echo ' '. $className ?>">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="all" />
    </div>
</div>