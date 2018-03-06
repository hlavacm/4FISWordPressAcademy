<?php
$referencePresenter = new KT_ZZZ_Reference_Presenter($referenceModel = new KT_ZZZ_Reference_Model($post));
get_header();
?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><?php echo $referenceModel->getTitle(); ?></h1>
                        <span class="meta">
                        <?php
                        $referencePresenter->renderParamDateCreation();
                        $referencePresenter->renderParamClientName();
                        $referencePresenter->renderParamTypes();
                        ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?php if ($referenceModel->hasThumbnail()) { ?>
                        <?php echo $referencePresenter->getThumbnailImage(KT_ZZZ_IMAGE_SIZE_THUMBNAIL, ["class" => "img-thumbnail ml-1", "alt" => $referenceModel->getTitleAttribute()], null, false); ?><br>
                    <?php } ?>
                    <?php
                    if ($referenceModel->hasExcerpt()) {
                        echo $referenceModel->getExcerpt();
                    }
                    echo $referenceModel->getContent();
                    echo $referencePresenter->renderPrevReferenceLink();
                    echo $referencePresenter->renderNextReferenceLink();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </article>

<?php
get_footer();


