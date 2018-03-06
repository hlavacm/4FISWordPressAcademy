<?php

// --- styles & scripts ---------------------------

add_action("wp_enqueue_scripts", "wp_enqueue_scripts_action_child_callback");

function wp_enqueue_scripts_action_child_callback()
{
    // styles
    wp_enqueue_style("custom-child-style", get_template_directory_uri() . "-child/style.css");
}
