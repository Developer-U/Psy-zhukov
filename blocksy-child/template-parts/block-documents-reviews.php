<?php
/**
 * Template part for Block Documents - Reviews / блок Документы и кейсы
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$documents_title = get_field('documents_title', 'options');
$reviews_title = get_field('reviews_title', 'options');
$reviews_text = get_field('reviews_text', 'options');

$arg_reviews = array(
    'orderby' => 'name',
    'order' => 'DESC',
    'posts_per_page' => 99,
    'post_type' => 'reviews',
    'post_status' => 'publish',
);

$query_reviews = new WP_Query($arg_reviews);

if ($query_reviews->have_posts()) {
    ?>

    <section class="reviews position-relative">
        <div class="reviews__inner position-absolute d-grid">
            <div class="reviews-bg__box left"></div>
            <div class="reviews-bg__box right-black-pattern"></div>
        </div>

        <div class="container-fluid position-relative">
            <div class="reviews__wrap reviews-wrap d-grid">
                <div class="reviews-wrap__documents block-documents" data-aos="fade-right" data-aos-offset="100"
                    data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="false"
                    data-aos-anchor-placement="left-top">
                    <?php if ($documents_title) { ?>
                        <h2 class="service-item__title">
                            <?php echo $documents_title; ?>
                        </h2>
                    <?php } ?>

                    <!-- Documents slider -->

                    <div class="swiper reviews-wrap__slider documents-slider">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('new_document_diploma', 'options')): ?>
                                <?php while (have_rows('new_document_diploma', 'options')):
                                    the_row();
                                    $document_diploma_preview = get_sub_field('document_diploma_preview', 'options');
                                    $document_diploma = get_sub_field('document_diploma', 'options');
                                    ?>

                                    <a href="<?php echo $document_diploma['url']; ?>"
                                        class="swiper-slide documents-slider__slide document position-relative"
                                        data-fancybox="document_gallery">
                                        <span class="gallery-zoom position-absolute"></span>
                                        <img src="<?php echo $document_diploma_preview['url']; ?>"
                                            alt="<?php echo $document_diploma_preview['alt']; ?>">
                                    </a>

                                    <?php
                                endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="swiper-button-prev slider-arrow-prev"></div>
                        <div class="swiper-button-next slider-arrow-next"></div>

                        <div class="swiper-pagination custom"></div>
                    </div>

                    <a href="/documents" class="reviews-wrap__btn button action-more">
                        <p>все документы
                        </p>
                    </a>
                </div>

                <div class="reviews-wrap__reviews block-reviews" data-aos="fade-left" data-aos-offset="100"
                    data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="false"
                    data-aos-anchor-placement="right-top">
                    <?php if ($reviews_title) { ?>
                        <div class="block-reviews__titles title-box d-grid align-items-center">
                            <h2 class="block-reviews__title title-box__title">
                                <?php echo $reviews_title; ?>
                            </h2>

                            <div class="block-reviews__text title-box__text col">
                                <?php if ($reviews_text) {
                                    echo $reviews_text;
                                } else {
                                    echo '<p>С&nbsp;целью обеспечения конфиденциальности имена&nbsp;изменены, но&nbsp;суть истории сохраняется.</p>';
                                } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Reviews slider -->
                    <div class="swiper reviews-wrap__slider reviews-slider">
                        <div class="swiper-wrapper">
                            <?php if ($query_reviews->have_posts()) {
                                while ($query_reviews->have_posts()):
                                    $query_reviews->the_post();
                                    ?>

                                    <li class="swiper-slide reviews-list__item reviews-item position-relative js-reviews">
                                        <figure class="reviews-item__image" style="background: #ddd;">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('full', get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE));
                                            } else { ?>
                                                <img class="no-image"
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-image.jpg"
                                                    alt="фото">
                                            <?php }
                                            ?>
                                        </figure>

                                        <div class="reviews-item__bottom reviews-bottom d-grid gap-2">
                                            <div class="reviews-item__content">
                                                <div class="reviews-item__text">
                                                    <div>
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button"
                                                class="reviews-bottom__btn main-reviews__item-more link-more"><span>Читать
                                                    полностью</span></button>

                                            <button type="button"
                                                class="reviews-bottom__btn main-reviews__item-less"><span>Скрыть</span></button>
                                        </div>
                                    </li>

                                    <?php
                                endwhile;
                                wp_reset_postdata() ?>
                            <?php } ?>
                        </div>

                        <div class="swiper-pagination custom"></div>

                        <div class="slider-arrows-wrap d-flex gap-3 mt-1">
                            <div class="swiper-button-prev slider-arrow-prev"></div>
                            <div class="swiper-button-next slider-arrow-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }