<?php get_header(); ?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                        <span class="meta">
                            <i class="fa fa-calendar"></i> <?php the_time("j.n.Y"); ?>
                            <i class="fa fa-user"></i> <?php echo get_the_author(); ?>
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
                    <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail("medium", ["class" => "img-thumbnail float-right ml-1"]); ?>
                    <?php } ?>
                    <?php if (has_excerpt()) { ?>
                        <?php the_excerpt(); ?>
                    <?php } ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>

<?php
get_footer();
