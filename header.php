<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <!-- stylesheets -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php
    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');

    wp_head();
    ?>
    <style type="text/css">
        <!--
        #bg-None {
            background-color: #<?php echo get_option('pts_bgcolour'); ?>;
        }

        #inner4-Colour {
            background-color: #<?php echo get_option('pts_headercolour'); ?>;
        }

        .kwickshadow {
            height: <?php echo get_option('pts_accheight'); ?>px;
        }

        .kwicks li {
            width: <?php echo get_option('pts_accwidth'); ?>px;
            height: <?php echo get_option('pts_accheight'); ?>px;
        }

        #s3slider {
            height: <?php echo get_option('pts_ssheight'); ?>px;
        }

        a, a:visited {
            color: #<?php echo get_option('pts_linkcolour'); ?>;
        }

        a:hover {
            color: #<?php echo get_option('pts_linkhcolour'); ?>;
        }

        .nav li a strong, #menu .nav li:first-child a strong, #menu ul.sub-menu li.current-menu-parent li.menu-item a {
            color: #<?php echo get_option('pts_menulink'); ?>;
        }

        .nav li a strong:hover, #menu .nav .current-menu-item a strong, #menu .nav .current-menu-ancestor a strong, #menu .nav li.current-menu-ancestor, #menu .nav li:first-child a:hover strong, #menu .nav ul li a:hover, #menu ul.sub-menu li.current_page_item a, #menu ul.sub-menu li.current-menu-parent a, #menu .nav ul.sub-menu li.current-menu-parent li.current_page_item a {
            color: #<?php echo get_option('pts_menuhlink'); ?>;
        }

        -->
    </style>

</head>

<body id="bg-<?php echo get_option('pts_pagebg'); ?>" <?php body_class(); ?>>
<div id="w1100">
    <div id="outer1"><!-- begin outer wrapper -->
        <div id="outer2">
            <div id="outer3" style="background-color:#<?php echo get_option('pts_outer'); ?>;">
                <div id="inner1"><!-- begin inner wrapper -->
                    <div id="inner2">
                        <div id="inner3">
                            <div id="inner4-<?php echo get_option('pts_headerbg'); ?>">
                                <div class="w960">
                                    <div id="logowrapper">


                                        <?php if (get_option('pts_logo') <> "") { ?>
                                            <a href="<?php echo home_url(); ?>"><span id="logo"><img
                                                        src="<?php echo get_option('pts_logo'); ?>" alt="logo"/></span></a>
                                            <span id="caption"><h2
                                                    style="color: #<?php echo get_option('pts_blogcaption'); ?>;"><?php bloginfo('description'); ?></h2></span>
                                        <?php } else { ?>
                                            <span id="dlogo"><a href="<?php echo home_url(); ?>"
                                                                style="color: #<?php echo get_option('pts_blogtitle'); ?>;">
                                                    <h1><?php bloginfo('name'); ?></h1></a></span>
                                            <span id="caption"><h2
                                                    style="color: #<?php echo get_option('pts_blogcaption'); ?>;"><?php bloginfo('description'); ?></h2></span>
                                        <?php } ?>

                                    </div>
                                </div>

                                <?php if (is_front_page()) { ?>
                                    <?php
                                    switch (get_option('pts_showcase')) {
                                        case "Showcase - Widget":
                                            get_template_part('showcase/showcasewidget');
                                            break;
                                        case "Showcase - Accordion":
                                            get_template_part('showcase/showcaseaccordion');
                                            break;
                                        case "Showcase - Slideshow":
                                            get_template_part('showcase/showcaseslideshow');
                                            break;
                                        case "Showcase - My Own":
                                            get_template_part('showcase/showcasemyown');
                                            break;
                                        case "No Showcase":
                                            break;
                                    }
                                    ?>
                                <?php } else { ?>
                                    <?php get_template_part('showcase/showcasewidget'); ?>
                                <?php } ?>

                                <div id="inner5">
                                    <!-- menu group -->
                                    <div
                                        id="menu"><?php wp_nav_menu(array('theme_location' => 'Main Menu', 'container' => false, 'menu_class' => 'nav', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0, 'walker' => new description_walker())); ?>
                                    </div>
                                    <!-- end menu group -->
                                    <!-- begin content -->
                                    <div class="w940">
                                        <?php if (is_front_page()) { ?>
                                        <?php } else { ?>
                                            <div id="breadcrumbs"><?php if (function_exists('yoast_breadcrumb')) {
                                                    yoast_breadcrumb('', '');
                                                } else {
                                                    pts_breadcrumbs();
                                                } ?></div>
                                        <?php } ?>
                                        <div class="columns clearfix">