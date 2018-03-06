<?php $postPresenter = new KT_ZZZ_Post_Presenter($postModel = new KT_ZZZ_Post_Model($post)); ?>
<div class="post-preview">
    <a href="<?php echo $postModel->getPermalink(); ?>" title="<?php echo $postModel->getTitleAttribute(); ?>">
        <h2 class="post-title">
            <?php echo $postModel->getTitle(); ?>
        </h2>
        <h3 class="post-subtitle">
            <?php echo $postModel->getExcerpt(false, 50); ?>
        </h3>
    </a>
    <p class="post-meta">
        <i class="fa fa-calendar"></i> <?php echo $postModel->getPublishDate("j.n.Y"); ?>
        <?php if (KT::issetAndNotEmpty($authorModel = $postModel->getAuthor())) { ?>
            <i class="fa fa-user"></i> <a href="<?php echo $authorModel->getPermalink(); ?>"><?php echo $authorModel->getDisplayName(); ?></a>
        <?php } ?>
    </p>
</div>
<hr>