<!DOCTYPE html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container header__wrap">
            <a href="<?php echo BLOG_HOME ?>" title="<?php echo BLOG_NAME ?>" class="header__logo">
                <img src="<?php echo THEME_URL ?>/sources/images/logo.png" width="131" height="54" title="<?php echo BLOG_NAME ?>" alt="<?php echo BLOG_NAME ?>" />
            </a>
            <div class="header__menuWrap">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'tpf-header-nav',
                        'container'      => '',
                        'menu_class'     => 'header__menu',
                    )
                );
                ?>
            </div>
            <div class="header__hotline">
            <a href="tel:0939756991" title="<?php echo BLOG_NAME ?> - Hotline" class="header__hotline--button">
                Hotline:<br><tel>0939 756 991</tel>
            </a>
            </div>
            <span class="hamb">
                <span><span>
            </span>
        </div>
    </header>