<?php
/**
 * Template part for Block Levels / блок Этапы работы
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$levels_title = get_field('levels_title', 'options');

if (have_rows('new_work_level', 'options')) {
    ?>

    <section class="levels dark b-top b-bottom">
        <div class="container">
            <div class="levels__wrap d-grid align-items-center">
                <h2 class="levels__title">
                    <?php if ($levels_title) {
                        echo $levels_title;
                    } else {
                        echo 'Этапы и&nbsp;структура работы';
                    } ?>
                </h2>

                <ul class="levels__list levels-list d-grid grid-four">
                    <?php if (have_rows('new_work_level', 'options')) {
                        $i = 1; ?>
                        <?php while (have_rows('new_work_level', 'options')) {
                            the_row();
                            $work_level_text = get_sub_field('work_level_text', 'options');
                            $index = $i++;
                            ?>

                            <li class="levels-list__item level-item item-<?php echo $index; ?> position-relative"
                                data-aos="fade-up" data-aos-offset="200" data-aos-delay="<?php echo 100 * ($index * 5); ?>"
                                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true"
                                data-aos-anchor-placement="top-left">
                                <span class="level-item__num position-absolute"><?php echo $index; ?></span>

                                <p class="level-item__text">
                                    <?php echo $work_level_text; ?>
                                </p>
                            </li>

                        <?php }
                    } ?>
                </ul>
            </div>
        </div>
    </section>

<?php }