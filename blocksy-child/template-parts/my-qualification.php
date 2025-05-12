<?php
/**
 * Block Qualifications / блок Квалификации
 * Сквозной
 */

$competent_qualification_title = get_field('competent_qualification_title', 'options');

if ($competent_qualification_title) { ?>
    <article class="competent-wrap__item competent-box qualification" data-aos="fade-left" data-aos-offset="50"
        data-aos-delay="150" data-aos-duration="1500" data-aos-easing="ease-in-out" data-aos-once="true"
        data-aos-anchor-placement="top-left">
        <h2 class="competent-box__title">
            <?php echo $competent_qualification_title; ?>
        </h2>

        <ul class="competent-box__list competent-list d-flex flex-wrap">
            <?php if (have_rows('new_competent_qualification', 'options')) { ?>
                <?php while (have_rows('new_competent_qualification', 'options')) {
                    the_row();
                    $competent_qualification_title = get_sub_field('competent_qualification_title', 'options');
                    ?>

                    <li class="plashka-item competent-list__item dark col-auto">
                        <?php echo $competent_qualification_title; ?>
                    </li>

                <?php }
            } ?>
        </ul>
    </article>
<?php }