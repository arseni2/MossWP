<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MossTheme
 */

?>

	<footer class="row wt100p footer">
    <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.svg" alt="">
    <div class="footer_wrapper row">
        <div class="column">
            <h2>Каталог</h2>
            <h3><a>Мох</a></h3>
        </div>

        <div class="column">
            <h2>Документы</h2>
            <h3><a>Реквизиты</a></h3>
            <h3 style="width: 171px"><a>Политика конфиденциальности</a></h3>
        </div>

        <div class="column margin_for_mobile">
            <h2>Компания</h2>
            <h3><a>О «Moss»</a></h3>
            <h3><a>Контакты</a></h3>
            <h3><a>Соцсети</a></h3>
        </div>

        <div class="column margin_for_mobile" style="width: 171px; display: block">
            <h2>Полезное</h2>
            <h3><a>Частые вопросы</a></h3>
        </div>

        <div class="column gp10">
            <div class="df_gp10_flace">
                <img style="width: 30px; height: 30px" src="<?php echo get_template_directory_uri(); ?>/assets/img/PhoneIcon.svg" alt="">
                <h2 style="margin-bottom: 0px">+7(962) 684-34-51</h2>
            </div>

            <div class="df_gp10_flace">
                <img style="width: 30px; height: 30px; margin-top: 5px" src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="">
                <h2 style="margin-bottom: 0px">info@russianmoss.ru</h2>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
