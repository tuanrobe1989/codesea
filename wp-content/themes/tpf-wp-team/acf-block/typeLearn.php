<?php
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$template = array(
    array('core/columns', array( 'className' => 'typeLearn__wrap'), array(
        array('core/column', array( 'className' => 'typeLearn__item info'), array(
            array('core/paragraph'),
            array('core/heading', array('className' => 'blue typeLearn__item--tit')),
            array('core/columns',array('className' => 'typeLearn__item__thumbs'), array(
                array('core/column',array('className' => ''), array(
                    array('core/image')
                )),
                array('core/column',array('className' => ''), array(
                    array('core/image')
                ))
            )),
            array('core/group', array('className' => 'typeLearn__item__des'), array(
                array('core/paragraph')
            )),
        )),
        array('core/column', array('className' => 'typeLearn__item thumb'), array(
            array('core/image', array('className' => 'typeLearn__item--img')),
        )),
    ))
);

// $allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');
$no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';

?>

<div id="typeLearn-<?php echo $block['id'] ?>" class="typeLearn<?php if($className ) echo ' '. $className ?>">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="all" />
    </div>
</div>