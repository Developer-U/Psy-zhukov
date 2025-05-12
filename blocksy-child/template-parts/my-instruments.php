<?php
/**
 * Block Instruments / блок Инструменты
 * Сквозной
 */

$competent_second_title = get_field('competent_second_title', 'options');

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