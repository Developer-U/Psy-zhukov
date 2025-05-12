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
                <?php
                if ($services_title) {
                    echo $services_title;
                } else {
                    echo 'Чем я&nbsp;могу быть вам полезен';
                }
                ?>
            </h2>

            <div class="services__wrap services-wrap d-flex align-items-start flex-column-reverse flex-xl-row">
                <div class="services-wrap__left col">
                    <h2 class="services-wrap__title d-none d-xl-block">
                        <?php
                        if ($services_title) {
                            echo $services_title;
                        } else {
                            echo 'Чем я&nbsp;могу быть вам полезен';
                        }
                        ?>
                    </h2>

                    <div class="slogan-cta left" data-aos="fade-up-right" data-aos-offset="200" data-aos-delay="1200"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true"
                        data-aos-anchor-placement="left-top">
                        <?php
                        if ($slogan_cta_text) {
                            echo '<div class="slogan-cta__text">';
                            echo $slogan_cta_text;
                            echo '</div>';
                        } else {
                            echo '<div class="slogan-cta__text"><p>';
                            echo 'Начни уже&nbsp;сейчас менять жизнь к&nbsp;лучшему';
                            echo '</p></div>';
                        } ?>

                        <button class="button slogan-cta__btn" data-popup-open="zakaz-popup">
                            записаться на консультацию
                        </button>
                    </div>
                </div>

                <ul class="services-wrap__list services-list d-grid grid-four col-auto">
                    <?php
                    if ($query_services->have_posts()) {
                        $i = 0;
                        while ($query_services->have_posts()) {
                            $query_services->the_post();
                            $service_image = get_field('service_image');
                            $index = $i++;
                            ?>

                            <li class="services-list__item service-item d-flex flex-column gap-3 justify-content-between position-relative"
                                style="background-image: url('<?php echo $service_image['url']; ?>'); background-size: cover; background-repeat: no-repeat"
                                data-aos="fade-left" data-aos-offset="200" data-aos-delay="<?php echo 100 * ($index * 5); ?>"
                                data-aos-duration="950" data-aos-easing="ease-in-out" data-aos-once="false"
                                data-aos-anchor-placement="top-left">
                                <a class="col-auto service-item__plashka" href="<?php the_permalink(); ?>">
                                    <h3 class="service-item__title">
                                        <?php the_title(); ?>
                                    </h3>

                                    <div class="service-item__text">
                                        <p><?php echo get_the_excerpt(); ?></p>
                                    </div>
                                </a>

                                <a href="<?php the_permalink(); ?>" class="button action-more">
                                    <p>подробнее
                                    </p>
                                </a>
                            </li>
                        <?php }
                        ;
                        wp_reset_postdata();
                    } ?>
                </ul>
            </div>
        </div>
    </section>

<?php }