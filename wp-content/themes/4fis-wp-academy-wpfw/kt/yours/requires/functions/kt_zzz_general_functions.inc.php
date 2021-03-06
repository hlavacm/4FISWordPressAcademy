<?php

// --- posts: archive & taxonomy/category ------------------------

add_action("wp_ajax_kt_zzz_load_more_posts", "kt_zzz_load_more_posts_callback");
add_action("wp_ajax_nopriv_kt_zzz_load_more_posts", "kt_zzz_load_more_posts_callback");

function kt_zzz_load_more_posts_callback()
{
    if (KT::arrayIssetAndNotEmpty($_REQUEST)) {
        $presenter = new KT_ZZZ_Posts_Presenter();
        die($presenter->getPostsOutput());
    }
    die(false);
}

// --- posts: pre_get_posts ------------------------

add_action("pre_get_posts", "kt_wph_posts_per_page", 1);

function kt_wph_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if (is_category() || is_post_type_archive(KT_WP_POST_KEY)) {
            $query->set("posts_per_page", 1); // at least a little "reduction" of performance requirements because of custom WP Query in KT_ZZZ_Posts_Presenter
        }
    }
}

// --- dashboard: glance ------------------------

add_filter("dashboard_glance_items", "kt_zzz_dashboard_glance_items_filter");

function kt_zzz_dashboard_glance_items_filter(array $elements)
{
    // references
    $productsKey = KT_ZZZ_REFERENCE_KEY;
    $productsCounts = wp_count_posts($productsKey, "readable");
    $productsLabel = sprintf(__("%d referencí", "ZZZ_ADMIN_DOMAIN"), $productsCounts->publish);
    $elements[] = "<a href=\"edit.php?post_type=$productsKey\">$productsLabel</a>";
    return $elements;
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
