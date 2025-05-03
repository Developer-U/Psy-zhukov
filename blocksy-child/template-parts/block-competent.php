<?php
/**
 * Template part for Block Competent / блок Компетенции / инструменты
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$competent_first_title = get_field('competent_first_title', 'options');
$competent_second_title = get_field('competent_second_title', 'options');
?>

<section class="competent tree gradient position-relative b-top b-bottom">
    <div class="container-fluid">
        <div class="competent__wrap competent-wrap d-grid grid-two">
            <?php if ($competent_first_title) { ?>
                <article class="competent-wrap__item competent-box first">
                    <h2 class="competent-box__title">
                        <?php echo $competent_first_title; ?>
                    </h2>

                    <ul class="competent-box__list competent-list d-flex flex-wrap">
                        <?php if (have_rows('new_competent_first', 'options')) { ?>
                            <?php while (have_rows('new_competent_first', 'options')) {
                                the_row();
                                $competent_first_title = get_sub_field('competent_first_title', 'options');
                                ?>

                                <li class="plashka-item competent-list__item col-auto">
                                    <?php echo $competent_first_title; ?>
                                </li>

                            <?php }
                        } ?>
                    </ul>
                </article>
            <?php }
            if ($competent_second_title) { ?>
                <article class="competent-wrap__item competent-box second">
                    <h2 class="competent-box__title">
                        <?php echo $competent_second_title; ?>
                    </h2>

                    <ul class="competent-box__list competent-list d-flex flex-wrap">
                        <?php if (have_rows('new_competent_second', 'options')) { ?>
                            <?php while (have_rows('new_competent_second', 'options')) {
                                the_row();
                                $competent_second_title = get_sub_field('competent_second_title', 'options');
                                ?>

                                <li class="plashka-item competent-list__item dark col-auto">
                                    <?php echo $competent_second_title; ?>
                                </li>

                            <?php }
                        } ?>
                    </ul>
                </article>
            <?php }
            ?>
        </div>
    </div>
</section>