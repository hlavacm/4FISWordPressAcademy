<?php
/*
Plugin Name: 4FIS WordPress Academy Sample
Plugin URI: https://www.vse.cz/
Author: Brilo Team
Author URI: https://www.brilo.cz/
Description: 4FIS WordPress Academy - Sample Plugin
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: 4FIS_DOMAIN
*/

if (!function_exists("add_action")) {
    wp_die(__("Ahoj! Jsem jen plugin, nic moc nemůžu dělat, když mě voláte přímo.", "4FIS_DOMAIN"));
}

if (!empty($GLOBALS["pagenow"]) && "plugins.php" === $GLOBALS["pagenow"]) {
    add_action("admin_notices", "wp_academy_sample_check_admin_notices", 0);
}

function wp_academy_sample_check_admin_notices()
{
    $phpMinVersion = "7.0";
    $phpCurrentVersion = phpversion();
    if (version_compare($phpMinVersion, $phpCurrentVersion, ">=")) {
        $message = sprintf(__("Váš server běží na PHP %s, ale tento plugin vyžaduje alespoň PHP %s.", "4FIS_DOMAIN"), $phpCurrentVersion, $phpMinVersion);
        echo "<div id=\"message\" class=\"error\"><p>$message</p></div>";
        return;
    }
    $wpMinVersion = "4.9";
    global $wp_version;
    if (version_compare($wpMinVersion, $wp_version, ">=")) {
        $message = sprintf(__("Váš WordPress je ve verzi %s, ale tento plugin vyžaduje alespoň verzi %s.", "4FIS_DOMAIN"), $wp_version, $wpMinVersion);
        echo "<div id=\"message\" class=\"error\"><p>$message</p></div>";
        return;
    }
}

// --- styles & scripts ---------------------------

add_action("wp_enqueue_scripts", "wp_enqueue_scripts_action_4fis_plugin_callback");

function wp_enqueue_scripts_action_4fis_plugin_callback()
{
    $path = plugin_dir_url(__FILE__);
    // styles
    wp_enqueue_style("magnific-popup-style", "$path/dist/magnific-popup.css");
    // scripts
    wp_enqueue_script("magnific-popup-script", "$path/dist/jquery.magnific-popup.js", ["jquery"], "1.1.0", true);
    wp_enqueue_script("4fis-wp-academy-sample-script", "$path/js/4fis-wp-academy-sample.js", ["jquery", "magnific-popup-script"], "1.0", true);
}

// --- images link class ---------------------------

add_filter("the_content", "the_content_filter_4fis_plugin_callback", 100, 1);

/**
 * @author Joseph Hansen
 * @url https://stackoverflow.com/a/30540598/5130688
 */
function the_content_filter_4fis_plugin_callback($html)
{
    $classes = "image-popup-no-margins";

    $patterns = [];
    $replacements = [];

    $patterns[0] = '/<a(?![^>]*class)([^>]*)>\s*<img([^>]*)>\s*<\/a>/';
    $replacements[0] = '<a\1 class="' . $classes . '"><img\2></a>';

    $patterns[1] = '/<a([^>]*)class="([^"]*)"([^>]*)>\s*<img([^>]*)>\s*<\/a>/';
    $replacements[1] = '<a\1class="' . $classes . ' \2"\3><img\4></a>';

    $patterns[2] = '/<a([^>]*)class=\'([^\']*)\'([^>]*)>\s*<img([^>]*)>\s*<\/a>/';
    $replacements[2] = '<a\1class="' . $classes . ' \2"\3><img\4></a>';

    $html = preg_replace($patterns, $replacements, $html);

    return $html;
}
