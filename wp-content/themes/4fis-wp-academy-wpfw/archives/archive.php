<?php
$postsPresenter = new KT_ZZZ_Posts_Presenter();
get_header();
?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg" )'>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php echo post_type_archive_title(KT_WP_POST_KEY); ?></h1>
                </div>
            </div>
        </div>
    </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php if ($postsPresenter->hasPosts()) { ?>
                    <div id="posts-container" data-offset="<?php echo $postsPresenter->getInitialOffset(); ?>" data-category-id="<?php echo $postsPresenter->getCategoryId(); ?>">
                        <?php $postsPresenter->thePosts(); ?>
                    </div>
                    <?php if ($postsPresenter->getPostsCount() == $postsPresenter->getMaxCount()) { ?>
                        <div class="text-center">
                            <span id="load-more-posts" class="btn btn-primary"><?php _e("Načíst další", "ZZZ_DOMAIN"); ?></span>
                        </div>
                    <?php } ?>
                    <?php
                } else {
                    echo $postsPresenter->getNoPostsMessage();
                }
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
