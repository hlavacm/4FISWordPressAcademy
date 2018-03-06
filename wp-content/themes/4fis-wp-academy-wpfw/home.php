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
                    <h1><?php echo get_post_type_object(KT_WP_POST_KEY)->labels->name; ?></h1>
                </div>
            </div>
        </div>
    </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php if (have_posts()) { ?>
                    <?php
                    global $wp_query;
                    KT_Presenter_Base::theQueryLoops($wp_query, KT_ZZZ_REFERENCE_KEY);
                    ?>
                    <div id="pagination" class="pagination clearfix">
                        <?php echo KT::bootstrapPagination(); ?>
                    </div>
                    <?php
                } else {
                    ?>
                    <p><?php _e("K dispozici nejsou žádné reference...", "ZZZ_DOMAIN"); ?></p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
