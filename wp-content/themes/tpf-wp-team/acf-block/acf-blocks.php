<?php
function admin_style()
{
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/dist/css/editor.css?' . wp_get_theme()->get('Version'));
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
        // register a testimonial block.
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

add_action('acf/init', 'mainbanner');
function mainbanner()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'mainbanner',
            'title'             => __('Mainbanner', 'infinit'),
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