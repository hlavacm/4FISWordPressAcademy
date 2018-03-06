<div class="clearfix">
    <?php
    if (get_next_posts_link()) {
        next_posts_link(__("Starší příspěvky &raquo;", "4FIS_DOMAIN"));
    }
    if (get_previous_posts_link()) {
        previous_posts_link(__("&laquo; Novější příspěvky", "4FIS_DOMAIN"));
    }
    ?>
</div>
    