<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="4FIS WordPress Academy">
    <meta name="author" content="Brilo Team">
    <title><?php wp_title("|", true, "right"); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo("name"); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <?php _e("Menu", "4FIS_DOMAIN"); ?> <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                wp_nav_menu([
                    "theme_location" => "header-menu",
                    "depth" => 2,
                    "container" => false,
                    "menu_class" => "navbar-nav mr-auto",
                    "fallback_cb" => "WP_Bootstrap_Navwalker::fallback",
                    "walker" => new WP_Bootstrap_Navwalker,
                ]);
                ?>
            </ul>
            <?php get_search_form(); ?>
        </div>
    </div>
</nav>
