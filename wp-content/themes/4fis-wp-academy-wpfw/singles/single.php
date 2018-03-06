<?php
$postPresenter = new KT_ZZZ_Post_Presenter($postModel = new KT_ZZZ_Post_Model($post));
get_header();
?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><?php echo $postModel->getTitle(); ?></h1>
                        <span class="meta">
                            <i class="fa fa-calendar"></i> <?php echo $postModel->getPublishDate("j.n.Y"); ?>
                            <?php if (KT::issetAndNotEmpty($authorModel = $postModel->getAuthor())) { ?>
                                <i class="fa fa-user"></i> <?php echo $authorModel->getDisplayName(); ?>
                            <?php } ?>
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
                    <?php if ($postModel->hasThumbnail()) { ?>
                        <?php echo $postPresenter->getThumbnailImage(KT_ZZZ_IMAGE_SIZE_THUMBNAIL, ["class" => "img-thumbnail ml-1", "alt" => $postModel->getTitleAttribute()], null, false); ?><br>
                    <?php } ?>
                    <?php
                    if ($postModel->hasExcerpt()) {
                        echo $postModel->getExcerpt();
                    }
                    echo $postModel->getContent();
                    ?>
                </div>
            </div>
        </div>
    </article>

<?php
get_footer();

