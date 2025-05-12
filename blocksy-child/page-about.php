<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$about_image = get_field('about_image');
$slogan_cta_text = get_field('about_slogan_cta_text');
/**
 *  Page About
 */

get_header();

get_template_part('template-parts/hero', 'pages');

if (get_the_content()) {
    ?>

    <section class="about gradient-heaven heaven2 position-relative">
        <div class="container">
            <div class="about__wrap about-wrap <?php if ($about_image['url']) { ?>d-grid align-items-end<?php } ?>">
                <div class="about-wrap__content post">
                    <?php echo get_the_content(); ?>

                    <div class="slogan-cta left results-slogan d-flex about__slogan">
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

                <?php if ($about_image['url']) { ?>
                    <div class="about__slogan d-flex align-items-center justify-content-between gap-4">
                        <div class="slogan-cta left results-slogan d-flex d-xl-none">
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

                        <figure class="about-wrap__figure">
                            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
                        </figure>
                    </div>
                <?php } ?>
            </div>
    </section>

    <?php
}

get_template_part('template-parts/block', 'mission');

get_template_part('template-parts/block', 'routes');

get_template_part('template-parts/block', 'symbolism');

get_template_part('template-parts/block', 'competent');

get_template_part('template-parts/block', 'education');

get_template_part('template-parts/block', 'solve-problems');

get_footer();