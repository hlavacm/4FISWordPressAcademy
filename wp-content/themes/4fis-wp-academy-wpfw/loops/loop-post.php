<?php $postPresenter = new KT_ZZZ_Post_Presenter($postModel = new KT_ZZZ_Post_Model($post)); ?>
<div class="post-preview">
    <a href="<?php echo $postModel->getPermalink(); ?>" title="<?php echo $postModel->getTitleAttribute(); ?>">
        <h2 class="post-title">
            <?php echo $postModel->getTitle(); ?>
        </h2>
        <?php if ($postModel->hasThumbnail()) { ?>
            <?php echo $postPresenter->getThumbnailImage(KT_WP_IMAGE_SIZE_THUBNAIL, ["class" => "img-thumbnail float-right ml-1", "alt" => $postModel->getTitleAttribute()], null, false); ?>
        <?php } ?>
        <h3 class="post-subtitle">
            <?php echo $postModel->getExcerpt(false, 50); ?>
        </h3>
    </a>
    <p class="post-meta">
        <i class="fa fa-calendar"></i> <?php echo $postModel->getPublishDate("j.n.Y"); ?>
        <?php if (KT::issetAndNotEmpty($authorModel = $postModel->getAuthor())) { ?>
            <i class="fa fa-user"></i> <?php echo $authorModel->getDisplayName(); ?>
        <?php } ?>
    </p>
</div>
<hr>