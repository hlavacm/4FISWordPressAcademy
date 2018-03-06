<?php
/* Template Name: Kontakt */
$pagePresenter = new KT_ZZZ_Page_Presenter($pageModel = new KT_ZZZ_Page_Model($post));
$contentFormPresenter = new KT_ZZZ_Contact_Form_Presenter();
get_header();
?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?php echo $pageModel->getTitle(); ?></h1>
                        <?php if ($pageModel->hasExcerpt()) { ?>
                            <span class="subheading"><?php echo $pageModel->getExcerpt(); ?></span>
                        <?php } ?>
                        <div id="projectNotices">
                            <?php do_action(KT_PROJECT_NOTICES_ACTION); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto">
                <?php
                echo $pageModel->getContent();
                $contentFormPresenter->renderForm();
                ?>
            </div>
            <div class="col-lg-1 col-md-2 mx-auto">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php
get_footer();

