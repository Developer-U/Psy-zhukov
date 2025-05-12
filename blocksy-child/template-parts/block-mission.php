<?php
/**
 * Template part for Block Mission / блок Миссия и цели
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$mission_title = get_field('mission_title', 'options');
$mission_slogan_text = get_field('mission_slogan_text', 'options');
$mission_text_1 = get_field('mission_text_1', 'options');
$mission_text_2 = get_field('mission_text_2', 'options');
?>

<section class="mission tree gradient position-relative b-top">
    <div class="container">
        <?php if ($mission_title) { ?>
            <h2 class="mission__title">
                <?php echo $mission_title; ?>
            </h2>
        <?php } ?>

        <ul class="mission__list mission-list post d-grid align-items-start grid-two">
            <!-- Mission -->
            <?php if ($mission_text_1) { ?>
                <li class="mission-list__item position-relative mission-item item-1" data-aos="fade-right"
                    data-aos-offset="100" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in"
                    data-aos-once="false" data-aos-anchor-placement="left-top">
                    <?php echo $mission_text_1; ?>
                </li>
            <?php }
            if ($mission_text_2) { ?>
                <li class="mission-list__item" data-aos="fade-left" data-aos-offset="100" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="false"
                    data-aos-anchor-placement="right-top">
                    <div class="position-relative mission-item item-2">
                        <?php echo $mission_text_2; ?>
                    </div>

                    <?php
                    if ($mission_slogan_text) { ?>
                        <div class="mission__slogan slogan-cta left slogan-cta__text" data-aos="zoom-in-left" data-aos-offset="100"
                            data-aos-delay="800" data-aos-duration="1500" data-aos-easing="ease-in" data-aos-once="true"
                            data-aos-anchor-placement="left-top">
                            <?php echo $mission_slogan_text; ?>
                        </div>
                    <?php }
                    ?>
                </li>
            <?php }
            ?>
        </ul>
    </div>
</section>