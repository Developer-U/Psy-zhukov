<?php
/**
 * Template part for Block Solve Problems / блок Какие проблемы я решаю
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$solve_title = get_field('solve_title', 'options');
$slogan_cta_text = get_field('solve_slogan_cta_text', 'options');

?>
<section class="solve pattern p-top p-bottom">
    <div class="container">
        <?php if ($solve_title) { ?>
            <h2 class="solve__title">
                <?php echo $solve_title; ?>
            </h2>
        <?php } ?>

        <ul class="solve__list solve-list d-flex">
            <?php if (have_rows('new_solve', 'options')) {
                $i = 0; ?>
                <?php while (have_rows('new_solve', 'options')) {
                    the_row();
                    $solve_title = get_sub_field('solve_title', 'options');
                    $solve_text = get_sub_field('solve_text', 'options');
                    $solve_image = get_sub_field('solve_image', 'options');
                    $index = $i++;
                    ?>

                    <li data-aos="fade-left" data-aos-offset="200" data-aos-delay="<?php echo 100 * ($index * 3.5); ?>"
                        data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-once="true"
                        data-aos-anchor-placement="top-left" class="solves-list__item solve-item position-relative">

                        <div class="solves-item__wrap position-relative overlay"
                            style="background-image: url(<?php echo $solve_image['url']; ?>); background-repeat: no-repeat; background-size: auto calc(100% - 2px); background-position: center right -60px">
                            <h3 class="solve-item__title">
                                <?php echo $solve_title; ?>
                            </h3>

                            <?php
                            if ($solve_text) {
                                echo '<div class="solve-item__text">' . $solve_text . '</div>';
                            } ?>
                        </div>

                        <span class="solves-item__border position-absolute"></span>
                    </li>
                <?php }
            } ?>
        </ul>

        <div class="slogan-cta left d-flex">
            <?php
            if ($slogan_cta_text) {
                echo '<div class="slogan-cta__text">';
                echo $slogan_cta_text;
                echo '</div>';
            } ?>

            <button class="button slogan-cta__btn" data-popup-open="zakaz-popup">
                записаться на консультацию
            </button>
        </div>
    </div>
</section>