<?php
/**
 * Template part for Block CTA - / блок Призыв к действию
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$page_id = get_the_ID();
$cta_big_title = get_field('cta_big_title', $page_id);
$cta_title = get_field('cta_title', $page_id);
?>

<section class="cta gradient-heaven">
    <div class="container">
        <div class="cta__wrap cta-wrap d-flex align-items-start align-items-lg-center flex-column flex-lg-row gap-4 gap-lg-3">
            <h2 class="cta-wrap__titleinner bird-title">
                <?php
                if ($cta_big_title) {
                    echo $cta_big_title;
                } else {
                    echo 'Счастье ближе,<br> чем ты думаешь';
                }
                ?>

                <p class="cta-wrap__title position-absolute">
                    <?php echo $cta_title; ?>
                </p>

                <span class="bird bird-2"></span>
            </h2>            

            <button class="button slogan-cta__btn col-auto" data-popup-open="zakaz-popup">
                записаться на консультацию
            </button>
        </div>
    </div>
</section>