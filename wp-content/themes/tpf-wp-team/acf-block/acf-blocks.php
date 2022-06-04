<?php
add_action('admin_enqueue_scripts', 'admin_style');
function admin_style()
{
    $editor_style_file_time = filemtime( get_template_directory() . '/dist/css/editor.css' );
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/dist/css/editor.css?' . $editor_style_file_time);
}

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    if (function_exists('acf_register_block_type')) {
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'courseSlider',
            'title'             => __('Courses Gallery', 'codesea'),
            'description'       => __('Courses Gallery Blocks Develop By KenLuu.'),
            'render_template'   => './acf-block/courses-gallery.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('slider', 'images'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}

add_action('acf/init', 'register_experts_slider_block');
function register_experts_slider_block()
{
    if (function_exists('acf_register_block_type')) {        
        acf_register_block_type(array(
            'name'              => 'experts',
            'title'             => __('Experts Gallery', 'codesea'),
            'description'       => __('Experts Gallery Blocks Develop By Vegeta.'),
            'render_template'   => './acf-block/expert-gallery.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('slider', 'images'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}

add_action('acf/init', 'register_courses_boxes_block');
function register_courses_boxes_block()
{
    if (function_exists('acf_register_block_type')) {        
        acf_register_block_type(array(
            'name'              => 'courses',
            'title'             => __('Courses Boxes', 'codesea'),
            'description'       => __('Courses Blocks Develop By Vegeta.'),
            'render_template'   => './acf-block/courses.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('courses'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}

add_action('acf/init', 'mainbanner');
function mainbanner()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'mainbanner',
            'title'             => __('Mainbanner', 'codesea'),
            'description'       => __('Mainbanner Blocks Develop By KenLuu.'),
            'render_template'   => './acf-block/mainbanner.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('mainbanner'),
            // 'mode'              => 'preview',
            // 'parent'            => array('tabs_group','quote'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}

add_action('acf/init', 'boxesContent');
function boxesContent()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'boxesContent',
            'title'             => __('Boxes Content', 'codesea'),
            'description'       => __('Boxes Content Blocks Develop By KenLuu.'),
            'render_template'   => './acf-block/boxes-content.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('boxesContent'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}

add_action('acf/init', 'register_values_block');
function register_values_block()
{
    if (function_exists('acf_register_block_type')) {        
        acf_register_block_type(array(
            'name'              => 'values',
            'title'             => __('Values', 'codesea'),
            'description'       => __('Values Block Develop By Vegeta.'),
            'render_template'   => './acf-block/values.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('values', 'introduced'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}

add_action('acf/init', 'whyBlock');
function whyBlock()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'whyBlock',
            'title'             => __('Why Block', 'codesea'),
            'description'       => __('Why Block Develop By KenLuu.'),
            'render_template'   => './acf-block/why.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('whyBlock'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}

add_action('acf/init', 'typeLearn');
function typeLearn()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'typeLearn',
            'title'             => __('Type Learn Block', 'codesea'),
            'description'       => __('Type Learn Block Develop By KenLuu.'),
            'render_template'   => './acf-block/typeLearn.php',
            'category'          => 'formatting',
            'icon'              => 'tickets-alt',
            'keywords'          => array('typeLearn'),
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true,
                'multiple' => true,
            ),
        ));
    }
}