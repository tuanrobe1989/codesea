<?php
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$template = array(
    array('core/columns', array(
            'className' => 'boxesContentWrap',
        ), array(
        array('core/column', array(
            'className' => 'boxesContent__content'
        ), array(
            array(
                'core/group', array(
                    'className' => 'boxesContent__content__des'
                ),
                array(
                    array('core/paragraph', array(
                        'placeholder' => __('Nội dung của bạn', 'codesea'),
                    )),
                )
            ),
            array('core/image', array(
                'className' => 'boxesContent__content--img'
            )),
        )),
        array('core/column', array(
            'className' => 'boxesContent__items'
        ), array(
            array('core/columns', array(
                'className' => 'boxesContent__itemsWrap'
            ),
                array(
                    array('core/column', array(
                        'className' => 'boxesContent__item'
                    ),array(
                        array('core/image')
                    )),
                    array('core/column', array(
                        'className' => 'boxesContent__item'
                    ),array(
                        array('core/image')
                    )),
                    array('core/column', array(
                        'className' => 'boxesContent__item'
                    ),array(
                        array('core/image')
                    )),
                    array('core/column', array(
                        'className' => 'boxesContent__item'
                    ),array(
                        array('core/image')
                    )),
                )
            ),
        )),
    ))
);

$allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');

$background_image = get_field('background_image');
$no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';


?>
<div id="boxesContent-<?php echo $block['id'] ?>" class="boxesContent<?php if($className ) echo ' '. $className ?>">
    <div class="container">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>" />
    </div>
</div>