<?php get_header(); ?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?php _e("404", "4FIS_DOMAIN"); ?></h1>
                        <span class="subheading"><?php _e("Stránka nenalezena", "4FIS_DOMAIN"); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="clearfix">
                    <a href="<?php echo get_home_url(); ?>" class="btn btn-primary float-left"><?php _e("Přejít na úvod", "4FIS_DOMAIN"); ?></a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
