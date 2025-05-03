<?php
/**
 * CTA Services block
 * Блок Заказать услугу CTA
 *
 * @package      ClientName
 * @author       Yury Moiseev
 * @since        1.0.0
 * @license      GPL-2.0+
 **/
$page_id = get_the_ID();
?>

<article id="cta_<?php echo $page_id; ?>" class="cta-wrapper gutenberg d-grid" data-aos="fade-up" data-aos-offset="50"
    data-aos-delay="0" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="false">
    <h3 class="cta-wrapper__title">
        Сделайте шаг в своё светлое будущее уже сегодня!
    </h3>

    <h4 class="cta-wrapper__subtitle">
        Заполните пару полей и я свяжусь с вами!
    </h4>

    <div class="cta-wrapper__form">
        <?php echo do_shortcode('[contact-form-7 id="1636f85" title="Заказать услугу"]'); ?>
    </div>
</article>