<?php if (!dynamic_sidebar()) : ?>
    <ul id="sidebar" class="list-unstyled">
        <?php dynamic_sidebar("default-sidebar"); ?>
    </ul>
<?php endif; ?>