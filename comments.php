<?php if(!is_page() || comments_open()): ?>
    <div class="comments-wrap">
        <?php if(have_comments()): ?>
        <div class="comments-header">
            Комментарии
        </div>
        <div class="comments-list">
                <?php while(have_comments()): the_comment() ?>
                    <div class="comments-body">
                        <div class="comment-author"><?php comment_author() ?><div class="right">
                                <a class="a-comment" href="#comment-<?php comment_ID() ?>" name="comment-1" id="comment-<?php comment_ID() ?>">#<?php comment_ID() ?></a>
                            </div>
                        </div>
                        <div class="comment-text"><?php comment_text() ?></div>
                        <div class="comment-info"><?php comment_date('d M Y') ?> в <?php comment_time('H:i') ?></div>
                    </div>
                <?php endwhile; ?>
        </div>
        <?php endif; if (is_user_logged_in()): ?>
        <div class="commentate-wrap">
            <?php my_comment_form(); ?>
        </div>
        <?php endif; ?>
    </div>
<?php endif; ?>