<?php
//Require Blocks
require_once('acf-block/acf-blocks.php');
define('THEME_URL', get_stylesheet_directory_uri());
define('SOURCE_URL', get_stylesheet_directory_uri().'/sources');
define('BLOG_NAME', get_bloginfo('name'));
define('BLOG_HOME', get_bloginfo('home'));
add_filter('upload_mimes', 'my_myme_types', 1, 1);
add_filter('mine_types', 'my_myme_types', 1, 1);
function my_myme_types($mime_types)
{
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}

//ADD SCRIPTS
function add_theme_scripts()
{
    $my_theme = wp_get_theme();
    //REGISTER STYLES
    wp_enqueue_style('styles', THEME_URL . '/dist/css/styles.css', array(), $my_theme->get('Version'), 'all');
    //REGISTER SCRIPTS
    wp_register_script('script', THEME_URL . '/dist/js/scripts.js', array('jquery'), $my_theme->get('Version'), true);
    $global_params = array(
        'themes_url' => get_template_directory_uri(),
        'ajaxurl' => admin_url('admin-ajax.php')
    );    
    wp_localize_script('script', 'global_params', $global_params);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

//SETTINGS THEME
add_action('after_setup_theme', 'after_setup_theme_func');
function after_setup_theme_func()
{
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    set_post_thumbnail_size('blog-thumbnails', 367, 410, true);

}

//REGISTER MENU
function register_menu_func()
{
    register_nav_menu('tpf-header-nav', __('Header Menu'));
    register_nav_menu('tpf-footer-nav', __('Footer Menu'));
}
add_action('init', 'register_menu_func');

function excerpt($limit)
{
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
	return $excerpt;
}

?>
