<?php get_header() ?>
    <?php if (is_home() or is_front_page()): ?>
        <?php the_post() ?>
        <?php the_content() ?>
    <?php else: the_post(); ?>
        <h1 class="header"><i><?php the_title() ?></i></h1>
        <div class="content"><?php the_content() ?></div>
    <?php endif; ?>
<?php get_footer() ?>