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
    if (version_compare($phpMinVersion, $phpCurrentVersion, ">")) {
        $message = sprintf(__("Your server is running on PHP %s, but this plugin requires at least PHP %s. Please do the upgrade."), $phpCurrentVersion, $phpMinVersion);
        echo "<div id=\"message\" class=\"error\"><p>$message</p></div>";
        return;
    }
    $wpMinVersion = "4.9";
    global $wp_version;
    if (version_compare($wpMinVersion, $wp_version, ">")) {
        $message = sprintf(__("Your WordPress is in version %s, but this plugin requires at least version %s. Please start the upgrade."), $wp_version, $wpMinVersion);
        echo "<div id=\"message\" class=\"error\"><p>$message</p></div>";
        return;
    }
}

// @todo
//KT::dd("test");
