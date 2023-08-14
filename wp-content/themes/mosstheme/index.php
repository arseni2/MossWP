<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MossTheme
 */

get_header();
?>

<section style="margin-top: 40px" class="cooperation">
    <div style="flex-wrap: wrap; gap: 20px;" class="df_gp10_flace dfcenter">
        <div class="blk_wht mw600 cooperation_block" style="justify-content: center;">
            <h1 style="margin-bottom: 0">Мох из сердца России</h1>
            <p class="cooperation_block_text" style="text-align: center">
                Экологически чистый, безопасный и долговечный материал для интерьерного дизайна. Наш мох производится в
                Архангельской и Мурманской областях и проходит специальную обработку, сохраняющую его естественную
                красоту и свежесть на долгие годы.
            </p>
            <a class="btn_filled cooperation_block_btn" href="">
                Подробнее о сотрудничестве
            </a>
        </div>
        <div style="flex-direction: column" class="mw600">
            <div style="display: flex; gap: 20px; flex-wrap: wrap">
                <img class="br20 img_full_size_mobile" style="max-width: 200px; width: 100%; height: auto"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png" alt="">
                <img class="br20 img_full_size_mobile" style="max-width: 200px; width: 100%; height: auto"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png" alt="">
                <img class="br20 img_full_size_mobile" style="max-width: 200px; width: 100%; height: auto"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png" alt="">
            </div>

            <div class="blk_wht mt20">
                <br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
</section>

<section style="">
    <h1>Наши преимущества</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Advantages.webp"
        style="margin-left: auto; margin-right: auto; display: flex; max-width: 1200px; height: auto; width: 100%"
        alt="">
</section>
<?php

$posts = get_posts(
    array(
        'numberposts' => -1,
        'posts_per_page' => 40,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_type' => 'product',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'popular',
            )
        ),
    ));

?>
<section>
    <h1>НАЧНИТЕ С ПОПУЛЯРНЫХ ПОЗИЦИЙ МХА</h1>
    <div class="cart">
    <?php 
for ($i = 0; $i < count($posts); ++$i) {
    $item = $posts[$i]->to_array();
    ?>
 <div class="blk_wht" style="width: 271px; flex-wrap: wrap; justify-content: center; padding: 0%;">
            <img class="cart_img br20_image" style="width: 100%;"
                src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($posts[$i]->ID) )[0]; ?>" alt="">
            <h3 style="text-align: center; padding: 10px;"><?php echo $item['post_title'];?></h3>
            <div style="display:flex; justify-content: center; flex-direction: row; align-items: baseline">
                <p class="zena"><?php echo get_post_meta( $posts[$i]->ID, '_regular_price', true); ?> ₽</p>
                <p>/кг</p>
            </div>
            <div class="box_podrobnee" onclick="showModalWindow('modal-window-product')"
                style="display: flex; justify-content: center;align-items: center; ">
                <p class="btn_podrobnee">Подробнее</p>
            </div>
            <div style="display: flex; flex-direction: row;justify-content: space-between; padding: 20px;">
                <div class="row">
                    <button
                        style="box-sizing: border-box;background: #FFFFFF;border: 1px solid #126E3D;border-radius: 20px 0 0 20px; width: 20px;justify-content: center;display: flex; align-items: center; border-right: none ;">
                        -
                    </button>
                    <h3
                        style="box-sizing: border-box;background: #FFFFFF;border: 1px solid #126E3D;width: 40px;justify-content: center;display: flex;align-items: center;border-right: none;border-left: none ;">
                        1</h3>
                    <button
                        style="box-sizing: border-box;background: #FFFFFF;border: 1px solid #126E3D;border-radius: 0 20px 20px 0;width: 20px;justify-content: center;display: flex;align-items: center;border-left: none ;">
                        +
                    </button>
                </div>
                <a href="<?php echo wc_get_product($posts[$i]->ID)->add_to_cart_url(); ?>&quantity=2" class="btn_filled ajax_add_to_cart add_to_cart_button" value="<?php echo esc_attr( $posts[$i]->ID ); ?>" data-product_id="<?php echo $posts[$i]->ID; ?>" data-product_sku="<?php echo esc_attr(wc_get_product($posts[$i]->ID)->get_sku()) ?>" aria-label="Add “<?php the_title_attribute() ?>” to your cart">
                    в корзину
                </a>
            </div>
        </div>
    <?php
}
?>
       

    </div>
</section>


<section class="social_network">
    <h1>НАШИ СОЦИАЛЬНЫЕ СЕТИ</h1>
    <div class="social_network_wrapper">
        <div class="blk_wht social_network_block">
            <div class="row" style="gap: 20px">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/TGIconBG.svg" />
                </div>
                <div class="wt100p" style="flex-direction: column">
                    <h2 class="wt100p row" style="justify-content: center">Придумать заголовок</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec ipsum ac libero egestas
                        euismod. Aliquam congue id erat vel laoreet. Duis ut porta ante, nec porttitor metus. Aenean
                        efficitur sem turpis, ac venenatis arcu faucibus nec. Proin luctus lacinia egestas. Maecenas in
                        placerat odio. Suspendisse consequat nunc at purus efficitur egestas. Maecenas imperdiet, est a
                        sollicitudin vulputate, elit odio tristique lorem, sed tincidunt dui magna vitae libero. Donec
                        consectetur nisi lectus, ut vestibulum lacus viverra quis. Aliquam at lectus vitae mi placerat
                        consectetur ut non dui. Integer dignissim facilisis turpis id tincidunt. Sed quis facilisis
                        nulla. Fusce dignissim nisl leo, eu suscipit tellus rhoncus eget.</p>
                </div>
            </div>
            <a class="btn_filled mt20" href="">
                Перейти в телеграмм
            </a>
        </div>
        <div class="blk_wht social_network_block">
            <div class="row" style="gap: 20px">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/VKIconBG.svg" />
                </div>
                <div class="wt100p" style="flex-direction: column">
                    <h2 class="wt100p row" style="justify-content: center">Придумать заголовок</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec ipsum ac libero egestas
                        euismod. Aliquam congue id erat vel laoreet. Duis ut porta ante, nec porttitor metus. Aenean
                        efficitur sem turpis, ac venenatis arcu faucibus nec. Proin luctus lacinia egestas. Maecenas in
                        placerat odio. Suspendisse consequat nunc at purus efficitur egestas. Maecenas imperdiet, est a
                        sollicitudin vulputate, elit odio tristique lorem, sed tincidunt dui magna vitae libero. Donec
                        consectetur nisi lectus, ut vestibulum lacus viverra quis. Aliquam at lectus vitae mi placerat
                        consectetur ut non dui. Integer dignissim facilisis turpis id tincidunt. Sed quis facilisis
                        nulla. Fusce dignissim nisl leo, eu suscipit tellus rhoncus eget.</p>
                </div>
            </div>
            <a class="btn_filled mt20" href="">
                Перейти в ВК
            </a>
        </div>

        <div class="blk_wht social_network_block">
            <div class="row" style="gap: 20px">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LargeWhatsAPPBG.svg" />
                </div>
                <div class="wt100p" style="flex-direction: column">
                    <h2 class="wt100p row" style="justify-content: center">Придумать заголовок</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec ipsum ac libero egestas
                        euismod. Aliquam congue id erat vel laoreet. Duis ut porta ante, nec porttitor metus. Aenean
                        efficitur sem turpis, ac venenatis arcu faucibus nec. Proin luctus lacinia egestas. Maecenas in
                        placerat odio. Suspendisse consequat nunc at purus efficitur egestas. Maecenas imperdiet, est a
                        sollicitudin vulputate, elit odio tristique lorem, sed tincidunt dui magna vitae libero. Donec
                        consectetur nisi lectus, ut vestibulum lacus viverra quis. Aliquam at lectus vitae mi placerat
                        consectetur ut non dui. Integer dignissim facilisis turpis id tincidunt. Sed quis facilisis
                        nulla. Fusce dignissim nisl leo, eu suscipit tellus rhoncus eget.</p>
                </div>
            </div>
            <a class="btn_filled mt20" href="">
                Перейти в WhatsApp
            </a>
        </div>
        <div class="blk_wht social_network_block">
            <div class="row" style="gap: 20px">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/TGIconBG.svg" />
                </div>
                <div class="wt100p" style="flex-direction: column">
                    <h2 class="wt100p row" style="justify-content: center">Придумать заголовок</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec ipsum ac libero egestas
                        euismod. Aliquam congue id erat vel laoreet. Duis ut porta ante, nec porttitor metus. Aenean
                        efficitur sem turpis, ac venenatis arcu faucibus nec. Proin luctus lacinia egestas. Maecenas in
                        placerat odio. Suspendisse consequat nunc at purus efficitur egestas. Maecenas imperdiet, est a
                        sollicitudin vulputate, elit odio tristique lorem, sed tincidunt dui magna vitae libero. Donec
                        consectetur nisi lectus, ut vestibulum lacus viverra quis. Aliquam at lectus vitae mi placerat
                        consectetur ut non dui. Integer dignissim facilisis turpis id tincidunt. Sed quis facilisis
                        nulla. Fusce dignissim nisl leo, eu suscipit tellus rhoncus eget.</p>
                </div>
            </div>
            <a class="btn_filled mt20" href="">
                Перейти в телеграмм
            </a>
        </div>
    </div>
</section>

<section class="faq">

    <h1>
        ОТВЕТЫ НА ВОПРОСЫ
    </h1>
    <div class="faq_box blk_wht">
        <div>
            <img class="img_full_size_mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png"
                alt="">
        </div>
        <div>
            <img class="img_full_size_mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png"
                alt="">
        </div>
        <div class="row faq_questions df_gp10_flace">
            <div class="column" style="gap: 6px">
                <div class="column">
                    <div class="row accordion_title">
                        <h2>Где вы находитесь?</h2>
                        <div class="elipse">
                            <h2>+</h2>
                        </div>
                    </div>
                    <h3 class="accordion_answer">OTVET</h3>

                </div>
                <div class="column">
                    <div class="row accordion_title">
                        <h2>Где вы находитесь?</h2>
                        <div class="elipse">
                            <h2>+</h2>
                        </div>
                    </div>
                    <h3 class="accordion_answer">OTVET</h3>

                </div>
                <div class="column">
                    <div class="row accordion_title">
                        <h2>Где вы находитесь?</h2>
                        <div class="elipse">
                            <h2>+</h2>
                        </div>
                    </div>
                    <h3 class="accordion_answer">OTVET</h3>

                </div>
                <div class="column">
                    <div class="row accordion_title">
                        <h2>Где вы находитесь?</h2>
                        <div class="elipse">
                            <h2>+</h2>
                        </div>
                    </div>
                    <h3 class="accordion_answer">OTVET</h3>

                </div>
                <div class="column">
                    <div class="row accordion_title">
                        <h2>Где вы находитесь?</h2>
                        <div class="elipse">
                            <h2>+</h2>
                        </div>
                    </div>
                    <h3 class="accordion_answer">OTVET</h3>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="cooperation">
    <h1>ДРУГИЕ ПРЕДЛОЖЕНИЯ СОТРУДНИЧЕСТВА</h1>
    <div style="flex-wrap: wrap" class="df_gp10_flace dfcenter">
        <div style="flex-direction: column" class="mw600">
            <div style="display: flex; gap: 20px; flex-wrap: wrap">
                <img class="br20 img_full_size_mobile" style="max-width: 200px; width: 100%; height: auto"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png" alt="">
                <img class="br20 img_full_size_mobile" style="max-width: 200px; width: 100%; height: auto"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png" alt="">
                <img class="br20 img_full_size_mobile" style="max-width: 200px; width: 100%; height: auto"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Moss.png" alt="">
            </div>

            <div class="blk_wht mt20">
                <br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>

        <div class="blk_wht mw600 cooperation_block" style="justify-content: center;">
            <h1 style="margin-bottom: 0">Мох из сердца России</h1>
            <p class="cooperation_block_text" style="text-align: center">
                Экологически чистый, безопасный и долговечный материал для интерьерного дизайна. Наш мох производится в
                Архангельской и Мурманской областях и проходит специальную обработку, сохраняющую его естественную
                красоту и свежесть на долгие годы.
            </p>
            <a class="btn_filled cooperation_block_btn" href="">
                Подробнее о сотрудничестве
            </a>
        </div>
    </div>
</section>


<section class="blk_wht gap20 ebychii_blk"
    style="max-width: 800px; display: flex; margin-left: auto; margin-right: auto;">
    <div class="faq" style="align-items: center; justify-content: center; margin-left: auto;
    margin-right: auto;">
        <img class="img_about" style="border-radius: 20px; max-width: 500px; height: 450px;"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/photo_2023-08-08_10-46-27.jpg" alt="">
    </div>
    <div class="column">
        <div style="text-align: center;">
            <h2 style="padding: 20px;">О "Фитокомпоненты"</h2>
            <h3 style="padding: 20px;">Дмитрий, основатель "Russian Moss", прошел путь от профессии синхронного
                переводчика до инноватора в мире фитодизайна. Организовав компанию семь лет назад как экспортное
                предприятие, он, совместно с технологами, разработал уникальную технологию Аква Резист, превращающую мох
                в водостойкий материал, и адаптировал процесс стабилизации к суровым условиям русской зимы.

                Благодаря его усилиям, "Russian Moss" зарекомендовала себя как лидер в индустрии, предлагая
                инновационные решения и качественные продукты для мирового и отечественного рынков.</h3>
            <a class="btn_filled cooperation_block_btn">Подробнее</a>
        </div>
    </div>
</section>


<section class="df">
    <h1>Отзывы покупателей</h1>
    <div class="owl-carousel owl-theme">
        <div class="blk_wht mw600 item">
            <div class="row align_center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar.svg" alt=""
                    style="width: 80px; height: 80px">
                <div class="column ml10">
                    <h3>Валерия Иванова</h3>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt10">
                Спасибо за мох. Тогда это было, как гора с плеч. Перед открытием были стрессовые денечки, не успела
                поблагодарить. Мох оказался просто чудо - мы его за 4 часа приклеили. Никаких экцессов, отборный. На
                все
                пространство хватило темно-зеленого, еще пол коробки осталось. После нашей выставки переместим
                экспонент
                в наше здание, и там уже и с салатовым поиграем)
            </h3>
        </div>
        <div class="blk_wht mw600 item">
            <div class="row align_center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar.svg" alt=""
                    style="width: 80px; height: 80px">
                <div class="column ml10">
                    <h3>Валерия Иванова</h3>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt10">
                Спасибо за мох. Тогда это было, как гора с плеч. Перед открытием были стрессовые денечки, не успела
                поблагодарить. Мох оказался просто чудо - мы его за 4 часа приклеили. Никаких экцессов, отборный. На
                все
                пространство хватило темно-зеленого, еще пол коробки осталось. После нашей выставки переместим
                экспонент
                в наше здание, и там уже и с салатовым поиграем)
            </h3>
        </div>
        <div class="blk_wht mw600 item">
            <div class="row align_center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar.svg" alt=""
                    style="width: 80px; height: 80px">
                <div class="column ml10">
                    <h3>Валерия Иванова</h3>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt10">
                Спасибо за мох. Тогда это было, как гора с плеч. Перед открытием были стрессовые денечки, не успела
                поблагодарить. Мох оказался просто чудо - мы его за 4 часа приклеили. Никаких экцессов, отборный. На
                все
                пространство хватило темно-зеленого, еще пол коробки осталось. После нашей выставки переместим
                экспонент
                в наше здание, и там уже и с салатовым поиграем)
            </h3>
        </div>
        <div class="blk_wht mw600 item">
            <div class="row align_center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar.svg" alt=""
                    style="width: 80px; height: 80px">
                <div class="column ml10">
                    <h3>Валерия Иванова</h3>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt10">
                Спасибо за мох. Тогда это было, как гора с плеч. Перед открытием были стрессовые денечки, не успела
                поблагодарить. Мох оказался просто чудо - мы его за 4 часа приклеили. Никаких экцессов, отборный. На
                все
                пространство хватило темно-зеленого, еще пол коробки осталось. После нашей выставки переместим
                экспонент
                в наше здание, и там уже и с салатовым поиграем)
            </h3>
        </div>
        <div class="blk_wht mw600 item">
            <div class="row align_center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar.svg" alt=""
                    style="width: 80px; height: 80px">
                <div class="column ml10">
                    <h3>Валерия Иванова</h3>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt10">
                Спасибо за мох. Тогда это было, как гора с плеч. Перед открытием были стрессовые денечки, не успела
                поблагодарить. Мох оказался просто чудо - мы его за 4 часа приклеили. Никаких экцессов, отборный. На
                все
                пространство хватило темно-зеленого, еще пол коробки осталось. После нашей выставки переместим
                экспонент
                в наше здание, и там уже и с салатовым поиграем)
            </h3>
        </div>
        <div class="blk_wht mw600 item">
            <div class="row align_center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar.svg" alt=""
                    style="width: 80px; height: 80px">
                <div class="column ml10">
                    <h3>Валерия Иванова</h3>
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StarFilledIcon.svg" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt10">
                Спасибо за мох. Тогда это было, как гора с плеч. Перед открытием были стрессовые денечки, не успела
                поблагодарить. Мох оказался просто чудо - мы его за 4 часа приклеили. Никаких экцессов, отборный. На
                все
                пространство хватило темно-зеленого, еще пол коробки осталось. После нашей выставки переместим
                экспонент
                в наше здание, и там уже и с салатовым поиграем)
            </h3>
        </div>
    </div>
</section>


<script>
    $.fn.andSelf = function () {
        return this.addBack.apply(this, arguments);
    }
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<div class='prev_btn'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/PrevIconBG.svg' alt=''></div>", "<div class='next_btn'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/NextIconBG.svg' alt=''></div>"],
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            300: {
                items: 1,
                nav: false
            },
            500: {
                items: 1,
                nav: false
            },
            700: {
                items: 2
            },
            900: {
                items: 2
            },
            1000: {
                items: 2
            },
            1060: {
                items: 3
            }
        }
    })
</script>

<section class="textCenter">
    <div class="blk_wht mw600" style="margin-left: auto; margin-right: auto;">
        <h2 style="text-align: left">
            НУЖНА ПОМОЩЬ В ПОДБОРЕ ТОВАРА
            ИЛИ ЕСТЬ ВОПРОС?
            СВЯЖИТЕСЬ С НАМИ
        </h2>
        <div class="row" style="justify-content: space-between;">
            <div class="left_side_form" style="align-items: flex-end; display: flex">
                <img width="66" height="66"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/WhatsAppIconBG.svg">
                <img width="66" class="ml10" height="66"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/TGIconBG.svg">
            </div>
            <div class="column gap20 right_side_form">
                <div>
                    <input placeholder="text">
                </div>
                <div>
                    <input placeholder="text">
                </div>
                <div>
                    <input placeholder="text">
                </div>
                <div>
                    <input placeholder="text">
                </div>
                <div class="row" style="align-items: center;">
                    <input id="checkbox_id" style="width: 25px" type="checkbox">
                    <h3>
                        <label for="checkbox_id">Согласелие с пользовательскит соглашением</label>
                    </h3>
                </div>
                <div class="btn_filled">Оставить заявку</div>
            </div>
        </div>
    </div>
</section>

<?php
get_sidebar();
get_footer();