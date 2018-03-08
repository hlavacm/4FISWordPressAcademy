<div class="post-preview">
    <a href="<?php the_permalink(); ?>">
        <h2 class="post-title">
            <?php the_title(); ?>
        </h2>
        <h3 class="post-subtitle">
            <?php echo wp_trim_words(get_the_excerpt(), 50); ?>
        </h3>
    </a>
</div>
<hr>