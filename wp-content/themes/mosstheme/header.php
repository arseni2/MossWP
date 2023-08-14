<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MossTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.5/owl.carousel.min.js"
            integrity="sha512-0q0AkS2lU1mpLhP3fEHgfT6A5CGHI+zWv0YHp4nw7+y/Q/bV2XK9Cp0TyhlDe6ebR/7fX8VB0WOIuAUgMhyURg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.5/assets/owl.carousel.min.css"
          integrity="sha512-X84rFrw99J6sJTX8VVpw+ie7vdJzx+EVi3pW44Ckv7g9PGgvV7Z3Rbz2PDn4/vZ96hW5s6PXUs8mgKW7f7xvTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.5/assets/owl.theme.default.min.css"
          integrity="sha512-ZBrJGCV5/KNZZjrsmfEdMRuIO0LHJoW2oAJwy7eRQA0pzj1XIoUgzO+99binsnDyU+WfVqVJcj7FVXLBTB5xFw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script defer src="<?php echo get_template_directory_uri(); ?>/assets/script.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<header class="header">
    <div id="modal-window-cart" class="modal-window">
        
        <div class="modal-window-content">
            <div class="modal-window-header">
                <div class="modal-window-header-close-btn cp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/x-button.png" alt="close">
                </div>
            </div>
            <?php
        global $woocommerce;
        $items = $woocommerce->cart->get_cart();
        foreach($items as $item => $values) { 
            $_product =  wc_get_product( $values['data']->get_id()); 
            echo "<b>".$_product->get_title().'</b>  <br> Quantity: '.$values['quantity'].'<br>'; 
            $price = get_post_meta($values['product_id'] , '_price', true);
            echo "  Price: ".$price."<br>";
            echo '<h3>DELETE</h3>';
        } 
        ?>
        </div>
    </div>
    <div id="modal-window-1" class="modal-window">
        <div class="modal-window-content">
            <div class="modal-window-header">
                <div class="modal-window-header-close-btn cp">
                    <img src="assets/x-button.png" alt="close">
                </div>
            </div>
            favorite
        </div>
    </div>
    <div id="modal-window-product" class="modal-window">
        <div class="modal-window-content">
            <div class="modal-window-header">
                <div class="modal-window-header-close-btn cp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/x-button.png" alt="close">
                </div>
            </div>
            product
        </div>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.svg"/>

    <div class="header_wrapper">
        <a href="tel:+7(911) 001-44-28" class="df_gp10_flace">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/PhoneIcon.svg"/>
            <h3 style="font-size: 16px">+7(911) 001-44-28</h3>
        </a>

        <a class="df_gp10_flace">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/WhatsAppIconBG.svg"/>
            <h3 style="font-size: 16px">Консультация в WhatsApp</h3>
        </a>

        <div>
            <img class="btn_icon_header" onclick="showModalWindow('modal-window-1')" src="<?php echo get_template_directory_uri(); ?>/assets/img/FavIcon.svg" alt="">
            <img class="btn_icon_header" onclick="showModalWindow('modal-window-cart')" src="<?php echo get_template_directory_uri(); ?>/assets/img/CartIcon.svg"
                 alt="">
        </div>
    </div>
    <img onclick="openBurgerMenu()" class="burger_menu_btn cp" src="<?php echo get_template_directory_uri(); ?>/assets/img/BurgerMenu.png" alt="">
    <div class="popup" id="popup">
        <a href="tel:+7 911 001 4428" class="df_gp10_flace">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/PhoneIcon.svg"/>
            <h3 style="font-size: 16px">+7 (911) 001-44-28</h3>
        </a>

        <a class="df_gp10_flace">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/WhatsAppIconBG.svg"/>
            <h3 style="font-size: 16px">Консультация в WhatsApp</h3>
        </a>
        <div style="display: flex; justify-content: space-between">
            <img class="btn_icon_header" onclick="showModalWindow('modal-window-1')" src="<?php echo get_template_directory_uri(); ?>/assets/img/FavIcon.svg" alt="">
            <img class="btn_icon_header" onclick="showModalWindow('modal-window-cart')" src="<?php echo get_template_directory_uri(); ?>/assets/img/CartIcon.svg"
                 alt="">
        </div>
    <