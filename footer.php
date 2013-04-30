</div>
</div>
<div class="sidebar-right">
    <div id="navigation">
        <h4><i>Навигация</i></h4>
        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'navigation')) ?>
    </div>
    <div id="navigation">
        <h4><i>Личный кабинет</i></h4>
        <?php if (is_user_logged_in()): ?>
            <?php wp_nav_menu(array('theme_location' => 'user_menu', 'menu_class' => 'navigation')) ?>
            <ul class="navigation"><li><?php wp_loginout('/', true) ?></li></ul>
        <?php else: ?>
            <?php my_login_form(array('redirect' => '/')) ?>
        <?php endif; ?>
    </div>
</div>
</div>
<div class="hFooter"></div>
</div>
<div class="footer"></div>
<?php wp_footer() ?>
</body>
</html>