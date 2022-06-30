<?php
//Require Blocks
require_once('acf-block/acf-blocks.php');
define('THEME_URL', get_stylesheet_directory_uri());
define('SOURCE_URL', get_stylesheet_directory_uri() . '/sources');
define('BLOG_NAME', get_bloginfo('name'));
define('BLOG_HOME', get_bloginfo('home'));
define('noimage', 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==');
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
    add_image_size('blog-thumbnails-pc', 520, 580, true);
    add_image_size('blog-thumbnail-mb', 520, 332, true);
}

//REGISTER MENU
function register_menu_func()
{
    register_nav_menu('tpf-header-nav', __('Header Menu'));
    register_nav_menu('tpf-footer-nav', __('Footer Menu'));
}
add_action('init', 'register_menu_func');

//REGISTER SIDEBAR
add_action('widgets_init', 'my_awesome_sidebar');
function my_awesome_sidebar()
{
    $args = array(
        'name'          => __('Single Sidebar', 'codesea'),
        'id'            => 'single-sidebar',
        'description'   => __('Single sidebar location'),
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    );

    register_sidebar($args);
}

//FUNCTIONS
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

function related_posts_function($atts)
{
    $results = '';
    $related_posts = get_field('related_posts');
    $args = array(
        'numberposts' => 5,
        'post_type' => 'post',
    );
    $posts = get_posts($args);
    $datas = ($related_posts) ? $related_posts : $posts;
    if ($datas) :
?>
        <h2><?php _e('Bài Viết Liên Quan', 'codesea') ?></h2>
        <ul class="postsRelated">
            <?php
            foreach ($datas as $post) : setup_postdata($post);
                $title = get_the_title($post->ID);
                $link = get_permalink($post->ID);
                $no_image = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
                $thumb = get_the_post_thumbnail_url($post->ID, 'thumbnail');
            ?>
                <li class="postsRelated__item">
                    <a href="<?php echo $link ?>" class="postsRelated__item__col thumb">
                        <img src="<?php echo $no_image ?>" data-src="<?php echo $thumb ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>" class="lazy" />
                    </a>
                    <div class="postsRelated__item__col info">
                        <a href="<?php echo $link ?>" class="postsRelated__item__col--tit h4 pink">
                            <?php echo $title ?>
                        </a>
                        <time datetime="<?php echo get_the_date('Y-m-d') ?>" class="postsRelated__item__col--date"><?php echo get_the_date('d/m/Y') ?></time>
                    </div>
                </li>
            <?php
            endforeach;
            ?>
        </ul>
<?php
    endif;
    return $results;
}
// register shortcode
add_shortcode('related-posts', 'related_posts_function');

remove_filter( 'comment_form_defaults', array('Forms', 'filter_defaults'), );