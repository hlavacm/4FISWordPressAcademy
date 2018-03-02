<?php

// --- simple autoload ---------------------------

foreach (glob(get_template_directory() . "/inc/*.php") as $file) {
    require $file;
}

// --- styles & scripts ---------------------------

add_action("wp_enqueue_scripts", "wp_enqueue_scripts_action_callback");

function wp_enqueue_scripts_action_callback()
{
    // styles
    wp_enqueue_style("bootstrap-style", get_template_directory_uri() . "/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style("fontawesome-style", get_template_directory_uri() . "/vendor/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style("lora-font", "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic");
    wp_enqueue_style("opensans-font", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/css/clean-blog.min.css");
    wp_enqueue_style("custom-style", get_template_directory_uri() . "/style.css");
    // scripts
    wp_enqueue_script("bootstrap-script", get_template_directory_uri() . "/vendor/bootstrap/js/bootstrap.bundle.min.js", ["jquery"]);
    wp_enqueue_script("theme-script", get_template_directory_uri() . "/js/clean-blog.min.js", ["jquery"]);
}

// --- menus ---------------------------

add_action("after_setup_theme", "after_setup_theme_action_callback");

function after_setup_theme_action_callback()
{
    register_nav_menu("header-menu", __("Menu v hlavičce", "4FIS_DOMAIN"));
}

// --- pagination ---------------------------

add_filter("next_posts_link_attributes", "next_posts_link_attributes_filter_callback");

function next_posts_link_attributes_filter_callback()
{
    return "class=\"btn btn-primary float-right\"";
}

add_filter("previous_posts_link_attributes", "previous_posts_link_attributes_filter_callback");

function previous_posts_link_attributes_filter_callback()
{
    return "class=\"btn btn-primary float-left\"";
}

// --- images ---------------------------

add_filter("get_image_tag_class", "get_image_tag_class_filter_callback");

function get_image_tag_class_filter_callback($class)
{
    $class .= " img-fluid";
    return $class;
}

// --- thumbnails ---------------------------

add_theme_support("post-thumbnails");

// --- sidebar ---------------------------

register_sidebar([
    "name" => __("Výchozí postraní panel", "4FIS_DOMAIN"),
    "id" => "default-sidebar",
    "description" => "",
    "class" => "",
    "before_widget" => '<li id="%1$s" class="widget %2$s">',
    "after_widget" => "</li>\n",
    "before_title" => "<h2 class=\"widgettitle\">",
    "after_title" => "</h2>\n",
]);