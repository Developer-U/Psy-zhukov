<?php
/**
 * Template part for Block Digits / блок Счётчик чисел
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$page_id = get_the_ID();
$services_title = get_field('services_title', $page_id);
$slogan_cta_text = get_field('services_slogan_cta_text', $page_id);

$arg_services = array(
    'orderby' => 'name',
    'order' => 'DESC',
    'posts_per_page' => 50,
    'post_type' => 'services',
    'post_status' => 'publish',
);

$query_services = new WP_Query($arg_services);

if ($query_services->have_posts()) {
    ?>

    <section class="services pattern b-top <?php if (is_page('documents')) { ?>b-bottom<?php } ?>">
        <div class="container-fluid">
            <h2 class="services-wrap__title d-xl-none">
                <?php echo $services_title; ?>
            </h2>

            <div class="services__wrap services-wrap d-flex align-items-start flex-column-reverse flex-xl-row">
                <div class="services-wrap__left col">
                    <h2 class="services-wrap__title d-none d-xl-block">
                        <?php echo $services_title; ?>
                    </h2>

                    <div class="slogan-cta left">
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

                <ul class="services-wrap__list services-list d-grid grid-four col-auto">
                    <?php
                    if ($query_services->have_posts()) {
                        while ($query_services->have_posts()) {
                            $query_services->the_post();

                            get_template_part('template-parts/service', 'item');
                        }
                        ;
                        wp_reset_postdata();
                    } ?>
                </ul>
            </div>
        </div>
    </section>

<?php }