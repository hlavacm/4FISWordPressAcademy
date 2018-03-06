<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="4FIS WordPress Academy">
    <meta name="author" content="Brilo Team">
    <title><?php wp_title("|", true, "right"); ?></title>
    <?php
    wp_head();
    KT_ZZZ::renderAnalyticsPixelCode();
    KT_ZZZ::renderCompatibilityScript();
    ?>
</head>
<body <?php body_class(); ?>>
<?php KT_ZZZ::renderAnalyticsTrackingCode(); ?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo("name"); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <?php _e("Menu", "ZZZ_DOMAIN"); ?> <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php KT::theWpNavMenu(KT_ZZZ_NAVIGATION_MAIN_MENU, 2, new KT_ZZZ_WP_Bootstrap_Navwalker); ?>
            </ul>
            <?php get_search_form(); ?>
        </div>
    </div>
</nav>
