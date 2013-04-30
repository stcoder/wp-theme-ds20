<?php get_header() ?>
<?php $cat = get_category(get_query_var('cat'),false); ?>
    <h1 class="header"><i><?php echo $cat->cat_name ?></i></h1>
    <div class="content">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
                <div class="news-wrap">
                    <div class="news-header"><?php the_title() ?></div>
                    <div class="news-body"><?php the_content() ?></div>
                    <div class="news-info">
                        <b>Создано: </b> <?php the_date('Y-m-d, H:i') ?>
                        <div class="right" style="display: inline-block; float: right;">
                            <a href="<?php the_permalink() ?>">Прочитать</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_pagenavi(array('echo' => true)); ?>
    </div>
<?php get_footer() ?>