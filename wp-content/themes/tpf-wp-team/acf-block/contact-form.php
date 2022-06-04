<?php
$className = 'contactForm';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$template = array(
    array('core/columns', array(
            'className' => 'mainbannerWrap',
        ), array(
        array('core/column', array(
            'className' => 'mainbanner__content'
        ), array(
            array('core/image', array(
                'className' => 'mainbanner__content--tit'
            )),
            array(
                'core/group', array(
                    'className' => 'mainbanner__content__des'
                ),
                array(
                    array('core/paragraph', array(
                        'placeholder' => __('Nội dung của bạn', 'codesea'),
                    )),
                )
            ),
        )),
        array('core/column', array(
            'className' => ' '
        ), array(
            array('core/image', array()),
        )),
    ))
);

$allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');

$background_image = get_field('background_image');
$no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';


?>
<div id="contactForm-<?php echo $block['id'] ?>" class="contactForm<?php if($className ) echo ' '. $className ?>">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>" />
    </div>
</div>