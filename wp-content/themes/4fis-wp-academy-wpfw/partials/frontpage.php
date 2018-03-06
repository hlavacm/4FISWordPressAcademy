<?php
if (KT::issetAndNotEmpty($post)) {
    $frontPagePresenter = new KT_WP_Post_Base_Presenter($post);
    $frontPageModel = $frontPagePresenter->getModel();
    ?>

    <div class="site-heading">
        <h1><?php echo $frontPageModel->getTitle(); ?></h1>
        <span class="subheading"><?php echo $frontPageModel->getExcerpt(false, 50); ?></span>
    </div>

    <?php
}