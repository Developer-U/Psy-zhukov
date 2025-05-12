<?php
/**
 * Template part for Block Education / блок Образование
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$education_title = get_field('education_title', 'options');

if (have_rows('new_education', 'options')) {
    ?>

    <section class="education gradient-heaven heaven2 position-relative">
        <div class="container">
            <h2 class="education__title">
                <?php if ($education_title) {
                    echo $education_title;
                } else {
                    echo 'Образование';
                } ?>
            </h2>

            <ul class="education__list education-list d-grid grid-two align-items-start">
                <?php if (have_rows('new_education', 'options')) {
                    $i = 1; ?>
                    <?php while (have_rows('new_education', 'options')) {
                        the_row();
                        $education_title = get_sub_field('education_title', 'options');
                        $education_text = get_sub_field('education_text', 'options');
                        $education_year_text = get_sub_field('education_year_text', 'options');
                        $education_years = get_sub_field('education_years', 'options');
                        $index = $i++;
                        ?>

                        <li data-aos="fade-right" data-aos-offset="200" data-aos-delay="<?php echo 100 * ($index * 2.5); ?>"
                            data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-once="true"
                            data-aos-anchor-placement="top-right" class="education__item education-item position-relative   
                            <?php if ($index == 0 || ($index % 2) == 0) { ?>offset<?php } ?>                      
                        ">

                            <div class="solves-item__wrap education-wrap position-relative overlay d-grid align-items-center">
                                <div class="education-wrap__years">
                                    <p class="education-wrap__before"><?php
                                    if ($education_year_text) {
                                        echo $education_year_text;
                                    } else {
                                        echo 'Годы обучения';
                                    } ?></p>

                                    <?php if ($education_years) {
                                        echo '<p class="education-wrap__year">' . $education_years . '</p>';
                                    } ?>
                                </div>

                                <div class="education-wrap__texts">
                                    <h3 class="education-item__title">
                                        <?php echo $education_title; ?>
                                    </h3>

                                    <?php
                                    if ($education_text) {
                                        echo '<div class="education-item__text">' . $education_text . '</div>';
                                    } ?>
                                </div>
                            </div>

                            <span class="solves-item__border position-absolute"></span>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
    </section>

<?php }