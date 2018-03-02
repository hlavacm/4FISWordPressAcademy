<?php get_header(); ?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?php the_title(); ?></h1>
                        <?php if (has_excerpt()) { ?>
                            <span class="subheading"><?php the_excerpt(); ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto">
                <?php the_content(); ?>
            </div>
            <div class="col-lg-1 col-md-2 mx-auto">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php
get_footer();
