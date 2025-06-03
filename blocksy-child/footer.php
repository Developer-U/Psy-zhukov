<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

$logo_white = get_field('logo_white', 'options');
$copyright = get_field('copyright', 'options');
$socials = get_field('social_icons', 'options');
$research = get_field('research', 'options');
$footer_form = get_field('footer_form', 'options');
$requisites = get_field('requisites', 'options');
?>
</main>

<?php
do_action('blocksy:content:after');
do_action('blocksy:footer:before');
?>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap footer-wrap d-grid">
            <div class="footer-wrap__box footer-box">
                <div class="footer-wrap__inner footer-inner d-grid">
                    <div class="footer-inner__item footer-item item-1">
                        <?php
                        if ($logo_white) { ?>
                            <a href="/" class="footer__logo">
                                <img src="<?php echo $logo_white['url']; ?>" alt="<?php echo $logo_white['alt']; ?>">
                            </a>
                        <?php }
                        get_template_part('template-parts/social');
                        ?>
                    </div>

                    <div class="footer-inner__item footer-item item-2">
                        <?php
                        echo estore_short_menu();
                        ?>
                    </div>

                    <div class="footer-inner__item footer-item item-3">
                        <?php
                        echo estore_services_menu();
                        ?>
                    </div>
                </div>

                <!-- Requisites -->
                <?php
                if (have_rows('new_requisit', 'options')) { ?>
                    <ul class="footer__requisites requisites-list flex-wrap gap-4 d-none d-lg-flex">
                        <?php
                        if (have_rows('new_requisit', 'options')) { ?>
                            <?php while (have_rows('new_requisit', 'options')) {
                                the_row();
                                $new_requisit_title = get_sub_field('new_requisit_title', 'options');
                                ?>

                                <li class="requisites-list__item col-auto">
                                    <?php echo $new_requisit_title; ?>
                                </li>
                            <?php }
                            ;
                        } ?>
                    </ul>
                <?php }
                ?>

                <div class="footer__down footer-down d-none d-lg-block">
                    ©&nbsp;<?php echo date("Y"); ?>&nbsp; <?php echo $copyright; ?>

                    <a class="mt-4" href="/privacy-policy/">Политика конфиденциальности</a>
                </div>
            </div>

            <article class="cta-wrapper">
                <h3 class="cta-wrapper__title">
                    <?php if ($footer_form['title']) {
                        echo $footer_form['title'];
                    } else {
                        echo 'Проблемы не&nbsp;исчезнут сами&nbsp;собой&nbsp;— дайте себе шанс на&nbsp;перемены с&nbsp;помощью психолога!';
                    }
                    ?>
                </h3>

                <h4 class="cta-wrapper__subtitle">
                    <?php if ($footer_form['subtitle']) {
                        echo $footer_form['subtitle'];
                    } else {
                        echo 'Заполните пару полей и&nbsp;я свяжусь с&nbsp;вами!';
                    }
                    ?>
                </h4>

                <div class="cta-wrapper__form">
                    <?php echo do_shortcode('[contact-form-7 id="1ca82fa" title="Записаться на консультацию"]'); ?>
                </div>
            </article>

            <div class="footer__mobile mobile-copyright d-block d-lg-none">
                <!-- Requisites -->
                <?php
                if (have_rows('new_requisit', 'options')) { ?>
                    <ul class="footer__requisites requisites-list flex-wrap gap-3 gap-md-4 d-flex">
                        <?php
                        if (have_rows('new_requisit', 'options')) { ?>
                            <?php while (have_rows('new_requisit', 'options')) {
                                the_row();
                                $new_requisit_title = get_sub_field('new_requisit_title', 'options');
                                ?>

                                <li class="requisites-list__item col-auto">
                                    <?php echo $new_requisit_title; ?>
                                </li>
                            <?php }
                            ;
                        } ?>
                    </ul>
                <?php } ?>

                <div class="footer__down footer-down">
                    ©&nbsp;<?php echo date("Y"); ?>&nbsp; <?php echo $copyright; ?>

                    <a class="mt-4" href="/privacy-policy/">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
do_action('blocksy:footer:after');
?>
</div>

<!-- Попап Заказать -->
<section data-popup="zakaz-popup" class="popup">
    <div class="popup__wrapper">
        <div class="popup__cont zakaz-cont d-flex align-items-center">
            <button data-popup-close="zakaz-popup" class="popup__del">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 0.286621C5.373 0.286621 0 5.65887 0 12.2866C0 18.9144 5.37225 24.2866 12 24.2866C18.6278 24.2866 24 18.9144 24 12.2866C24 5.65887 18.6278 0.286621 12 0.286621ZM12 22.8106C6.21 22.8106 1.5 18.0766 1.5 12.2866C1.5 6.49662 6.21 1.78662 12 1.78662C17.79 1.78662 22.5 6.49662 22.5 12.2866C22.5 18.0766 17.79 22.8106 12 22.8106ZM16.2428 8.04462C15.9502 7.75212 15.4755 7.75212 15.1823 8.04462L12.0007 11.2261L8.81925 8.04462C8.52675 7.75212 8.05125 7.75212 7.758 8.04462C7.46475 8.33712 7.4655 8.81262 7.758 9.10512L10.9395 12.2866L7.758 15.4681C7.4655 15.7606 7.4655 16.2361 7.758 16.5286C8.0505 16.8211 8.526 16.8211 8.81925 16.5286L12.0007 13.3471L15.1823 16.5286C15.4747 16.8211 15.9495 16.8211 16.2428 16.5286C16.536 16.2361 16.5352 15.7606 16.2428 15.4681L13.0613 12.2866L16.2428 9.10512C16.536 8.81187 16.536 8.33712 16.2428 8.04462Z"
                        fill="white" />
                </svg>
            </button>

            <div class="popup__box">
                <h3 class="popup__heading">
                    Сделайте шаг навстречу светлому&nbsp;будущему!
                </h3>

                <?php
                echo do_shortcode('[contact-form-7 id="1ca82fa" title="Записаться на консультацию"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>

</html>