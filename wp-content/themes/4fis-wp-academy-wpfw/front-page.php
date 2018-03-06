<?php get_header(); ?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg" )'>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php get_template_part("partials/frontpage"); ?>
            </div>
        </div>
    </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php
                $newsPresenter = new KT_ZZZ_News_Presenter();
                if ($newsPresenter->hasPosts()) {
                    $newsPresenter->thePosts();
                    ?>
                    <div class="text-center">
                        <a href="<?php echo get_post_type_archive_link("post"); ?>" class="btn btn-primary"><?php _e("Přejít na všechny příspevky", "ZZZ_DOMAIN"); ?></a>
                    </div>
                    <?php
                } else {
                    get_template_part("partials/empty");
                }
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
