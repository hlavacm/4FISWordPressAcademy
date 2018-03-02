<div class="post-preview">
    <a href="<?php the_permalink(); ?>">
        <h2 class="post-title">
            <?php the_title(); ?>
        </h2>
        <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail("thumbnail", ["class" => "img-thumbnail float-right ml-1"]); ?>
        <?php } ?>
        <h3 class="post-subtitle">
            <?php echo wp_trim_words(get_the_excerpt(), 50); ?>
        </h3>
    </a>
    <p class="post-meta">
        <i class="fa fa-calendar"></i> <?php the_date("j.n.Y"); ?>
        <i class="fa fa-user"></i> <?php the_author_link(); ?>
    </p>
</div>
<hr>