<?php
$postsPresenter = new KT_ZZZ_References_Presenter();
get_header();
?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg" )'>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php echo get_post_type_object(KT_ZZZ_REFERENCE_KEY)->labels->name; ?></h1>
                </div>
            </div>
        </div>
    </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php if ($postsPresenter->hasPosts()) { ?>
                    <?php $postsPresenter->thePosts(); ?>
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
