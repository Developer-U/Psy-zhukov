<?php
/**
 * Template part for Block Results / блок Результаты
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$results_title = get_field('results_title', 'options');
$slogan_cta_text = get_field('results_slogan_cta_text', 'options');
$results_image = get_field('results_image', 'options');
$result_items = get_field('result_items', 'options');
?>

<section class="results gradient-heaven heaven2 position-relative">
    <div class="results__bg"
        style="background-image: url(<?php echo $results_image['url']; ?>); background-repeat: no-repeat; background-size: auto 100%; background-position: bottom right">
    </div>

    <div class="container">
        <div class="levels__wrap results__wrap d-grid align-items-start">
            <h2 class="levels__title results__title" data-aos="zoom-in-up" data-aos-offset="100"
                data-aos-delay="100" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-once="true"
                data-aos-anchor-placement="left-top">
                <?php if ($results_title) {
                    echo $results_title;
                } else {
                    echo 'Что вы&nbsp;получите в&nbsp;результате нашей&nbsp;работы:';
                } ?>
            </h2>

            <ul class="results__list results-list d-grid grid-two align-items-start justify-between-center">
                <?php if ($result_items['one']) { ?>
                    <li class="plashka-item results-list__item result-item item-1">
                        <?php echo $result_items['one']; ?>
                    </li>
                <?php }
                if ($result_items['two']) { ?>
                    <li class="plashka-item results-list__item result-item item-2">
                        <?php echo $result_items['two']; ?>
                    </li>
                <?php }
                if ($result_items['three']) { ?>
                    <li class="plashka-item results-list__item result-item item-3">
                        <?php echo $result_items['three']; ?>
                    </li>
                <?php }
                if ($result_items['four']) { ?>
                    <li class="plashka-item results-list__item result-item item-4">
                        <?php echo $result_items['four']; ?>
                    </li>
                <?php }
                if ($result_items['five']) { ?>
                    <li class="plashka-item results-list__item result-item item-5">
                        <?php echo $result_items['five']; ?>
                    </li>
                <?php }
                if ($result_items['six']) { ?>
                    <li class="plashka-item results-list__item result-item item-6">
                        <?php echo $result_items['six']; ?>
                    </li>
                <?php }
                if ($result_items['seven']) { ?>
                    <li class="plashka-item results-list__item result-item item-7">
                        <?php echo $result_items['seven']; ?>
                    </li>
                <?php }
                if ($result_items['eight']) { ?>
                    <li class="plashka-item results-list__item result-item item-8">
                        <?php echo $result_items['eight']; ?>
                    </li>
                <?php }
                ?>
            </ul>
        </div>

        <div class="slogan-cta left results-slogan d-flex">
            <?php
            if ($slogan_cta_text) {
                echo '<div class="slogan-cta__text">';
                echo $slogan_cta_text;
                echo '</div>';
            } ?>

            <button class="button slogan-cta__btn" data-popup-open="zakaz-popup">
                мне нужен результат!
            </button>
        </div>
    </div>
</section>