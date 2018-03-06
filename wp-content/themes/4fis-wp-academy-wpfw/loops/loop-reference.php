<?php $referencePresenter = new KT_ZZZ_Reference_Presenter($referenceModel = new KT_ZZZ_Reference_Model($post)); ?>
<div class="post-preview">
    <a href="<?php echo $referenceModel->getPermalink(); ?>" title="<?php echo $referenceModel->getTitleAttribute(); ?>">
        <h2 class="post-title">
            <?php echo $referenceModel->getTitle(); ?>
        </h2>
        <?php if ($referenceModel->hasThumbnail()) { ?>
            <?php echo $referencePresenter->getThumbnailImage(KT_WP_IMAGE_SIZE_THUBNAIL, ["class" => "img-thumbnail float-right ml-1", "alt" => $referenceModel->getTitleAttribute()], null, false); ?>
        <?php } ?>
        <h3 class="post-subtitle">
            <?php echo $referenceModel->getExcerpt(false, 30); ?>
        </h3>
    </a>
</div>
<hr>