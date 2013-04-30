<?php get_header(); the_post() ?>
    <h1 class="header"><i><?php the_title() ?></i></h1>
    <div class="content"><?php the_content() ?></div>
    <?php comments_template() ?>
<?php get_footer() ?>