<?php
/**
 * Block Competention / блок Компетенции
 * Сквозной
 */
$competent_first_title = get_field('competent_first_title', 'options');

if ($competent_first_title) { ?>
    <article class="competent-wrap__item competent-box first" data-aos="fade-right"
        data-aos-offset="0" data-aos-delay="50" data-aos-duration="1500" data-aos-easing="ease-in-out" data-aos-once="true"
        data-aos-anchor-placement="top-left">
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
?>