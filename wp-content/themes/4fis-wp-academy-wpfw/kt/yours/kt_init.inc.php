<?php

// --- konstanty ---------------------------

define("KT_ZZZ_IMAGE_SIZE_THUMBNAIL", "kt-zzz-image-size-thumbnail");

define("KT_ZZZ_NAVIGATION_MAIN_MENU", "header-menu");

define("KT_ZZZ_SIDEBAR_DEFAULT", "default-sidebar");

define("KT_ZZZ_REFERENCE_KEY", "reference");
define("KT_ZZZ_REFERENCE_SLUG", "reference");
define("KT_ZZZ_REFERENCES_SLUG", "reference");
define("KT_ZZZ_REFERENCE_CATEGORY_KEY", "referencecategory");
define("KT_ZZZ_REFERENCE_CATEGORY_SLUG", "kategorie-referenci");

// --- inicializace ---------------------------

kt_initialize_module("ZZZ");

kt_load_textdomain("ZZZ_DOMAIN", KT_ZZZ_PATH);
