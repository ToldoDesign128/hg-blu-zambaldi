<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('zambaldi_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#fff">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>" type="image/x-icon">

    <title>
        <?php
        if (is_front_page()) {
            bloginfo('name');
        } else {
            wp_title('');
        };
        ?>
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-wrap">
            <a href="<?php echo home_url(); ?>" class="header-logo">
                Logo
            </a>
            <nav class="menu-desk">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'walker'           => new Custom_Walker_Nav_Menu(),
                    'container'         =>  false,
                    'menu_class'        => 'main-menu',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ));
                ?>
            </nav>
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="panel-mobile">
            <nav class="menu-mobile">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'walker'           => new Custom_Walker_Nav_Menu(),
                    'container'         =>  false,
                    'menu_class'        => 'main-menu',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ));
                ?>
            </nav>
        </div>

    </header>