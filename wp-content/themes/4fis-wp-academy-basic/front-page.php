<?php get_header(); ?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg" )'>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php the_title(); ?></h1>
                    <span class="subheading"><?php the_excerpt(); ?></span>
                </div>
            </div>
        </div>
    </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php
                $query = new WP_Query();
                $posts = $query->query([
                    "post_type" => "post",
                    "post_status" => "publish",
                    "posts_per_page" => 5,
                    "orderby" => "date",
                    "order" => "desc",
                ]);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part("template-parts/loop");
                    }
                    wp_reset_postdata();
                    ?>
                    <div class="clearfix">
                        <a href="<?php echo get_post_type_archive_link("post"); ?>" class="btn btn-primary float-right"><?php _e("Přejít na všechny příspevky", "4FIS_DOMAIN"); ?></a>
                    </div>
                    <?php
                } else {
                    get_template_part("template-parts/empty");
                }
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
