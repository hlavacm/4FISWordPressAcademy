<form role="search" method="get" class="form-inline" action="<?php echo esc_url(home_url("/")); ?>">
    <input type="search" class="form-control" placeholder="<?php echo _e("Hledat &hellip;", "4FIS_DOMAIN"); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
</form>