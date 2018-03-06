<?php

$config = new KT_WP_Configurator();

$config->setDisplayLogo()
    ->setPostArchiveMenu()
    ->setAllowCookieStatement()
    ->setAllowSession();

$config->addThemeSupport(KT_WP_THEME_SUPPORT_POST_THUMBNAILS_KEY);

$config->addPostTypeSupport(KT_WP_POST_TYPE_SUPPORT_EXCERPT_KEY, [KT_WP_PAGE_KEY]);

$config->removePostTypeSupport(KT_WP_POST_TYPE_SUPPORT_THUMBNAIL_KEY, [KT_WP_PAGE_KEY]);

$config->setPostsArchiveSlug("blog");

$config->setExcerptText("...");

$config->pageRemover()
    ->removeComments()
    ->removeTools()
    ->removeSubPage("edit.php", "edit-tags.php")
    ->removeSubPage("edit.php", "edit-tags.php?taxonomy=post_tag")
    ->removeSubPage("themes.php", "theme-editor.php");

$config->metaboxRemover()
    ->removePostTagMetabox()
    ->removeMetabox("tagsdiv-news-type", KT_WP_POST_KEY, "normal")
    ->removeRevisionsMetabox();

// --- images ------------------------------

$config->addImageSize(KT_ZZZ_IMAGE_SIZE_THUMBNAIL, 730, 410, true);

$config->setImagesLazyLoading(true);

// --- styly ---------------------------

$config->assetsConfigurator()->addStyle("bootstrap-style", get_template_directory_uri() . "/vendor/bootstrap/css/bootstrap.min.css")->setEnqueue();
$config->assetsConfigurator()->addStyle("fontawesome-style", get_template_directory_uri() . "/vendor/font-awesome/css/font-awesome.min.css")->setEnqueue();
$config->assetsConfigurator()->addStyle("lora-font", "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic")->setEnqueue();
$config->assetsConfigurator()->addStyle("opensans-font", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800")->setEnqueue();
$config->assetsConfigurator()->addStyle("theme-style", get_template_directory_uri() . "/css/clean-blog.min.css")->setEnqueue();
$config->assetsConfigurator()->addStyle("custom-style", get_template_directory_uri() . "/style.css")->setEnqueue();

// --- scripty ------------------------------

$config->assetsConfigurator()
    ->addScript("jquery-script", get_template_directory_uri() . "/vendor/jquery/jquery.min.js")
    ->setInFooter(true)
    ->setEnqueue();

$config->assetsConfigurator()
    ->addScript("jquery-validation-script", get_template_directory_uri() . "/js/jqBootstrapValidation.min.js")
    ->setDeps(["jquery-script"])
    ->setInFooter(true)
    ->setEnqueue();

$config->assetsConfigurator()
    ->addScript("bootstrap-script", get_template_directory_uri() . "/vendor/bootstrap/js/bootstrap.bundle.min.js")
    ->setDeps(["jquery-script"])
    ->setInFooter(true)
    ->setEnqueue();

$config->assetsConfigurator()
    ->addScript("theme-script", get_template_directory_uri() . "/js/clean-blog.min.js")
    ->setDeps(["jquery-script", "bootstrap-script"])
    ->setInFooter(true)
    ->setEnqueue();

$config->assetsConfigurator()
    ->addScript("custom-script", KT_ZZZ_JS_URL . "/kt-zzz-functions.min.js")
    ->setDeps(["jquery-script", "bootstrap-script", "theme-script"])
    ->addLocalizationData("myAjax", ["ajaxurl" => admin_url("admin-ajax.php")])
    ->setInFooter(true)
    ->setEnqueue();

// --- menu ---------------------------

$config->addWpMenu(KT_ZZZ_NAVIGATION_MAIN_MENU, __("Menu v hlavičce", "ZZZ_ADMIN_DOMAIN"));

// --- sidebars ------------------------------

$config->addSidebar(KT_ZZZ_SIDEBAR_DEFAULT)
    ->setName(__("Default", "ZZZ_ADMIN_DOMAIN"))
    ->setDescription(__("Výchozí", "ZZZ_ADMIN_DOMAIN"))
    ->setBeforeWidget('<div id="%1$s" class="widget %2$s">')
    ->setAfterWidget("</div>");

// --- dashboard ------------------------------

$config->metaboxRemover()->clearWordpressDashboard(true)
    ->removeDashboardMetabox("icl_dashboard_widget")
    ->removeDashboardMetabox("wpseo-dashboard-overview");

// --- widgety ------------------------------

$config->widgetRemover()->removeAllSystemWidgets(true, true)
    ->removeWidget("bcn_widget");

// --- head ------------------------------

$config->headRemover()->removeRecommendSystemHeads();

// --- Stránka s theme options ------------------------------

$config->setThemeSettingsPage();

// --- incializace ------------------------------

$config->initialize();

// --- umístění jQuery pluginu do patičky ------------------------------

add_action("wp_enqueue_scripts", "kt_zzz_enqueue_jquery_in_footer");

function kt_zzz_enqueue_jquery_in_footer()
{
    wp_deregister_script("wp-embed");
    wp_deregister_script(KT_WP_JQUERY_SCRIPT);
}
