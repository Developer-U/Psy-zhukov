<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$page_id = get_the_ID();

$gallery_image = get_field('gallery_image', $page_id);

/**
 *  Page gallery
 */

get_header();

get_template_part('template-parts/hero', 'pages');
?>

<section class="gallery pattern">
    <div class="container">
        <div class="tabs gallery-tabs">
            <!-- Кнопки-переключатели табов -->
            <?php
            // Показываем табы Фото и видео, только если добавлен видео-контент
            if (have_rows('add_video_block', $page_id)) { ?>
                <ul class="gallery-tabs__btns gallery-tab-btns gallery-page d-flex gap-2">
                    <li class="gallery-tab-btns__button gallery-page js-pathTabs col-auto active" data-path="0"
                        data-tabpathrep="galery_0">
                        Фото
                    </li>

                    <li class="gallery-tab-btns__button gallery-page js-pathTabs col-auto" data-path="1"
                        data-tabpathrep="galery_1">
                        Видео
                    </li>
                </ul>
            <?php } ?>

            <article class="gallery-tab-target__target js-targetTabs gallery-tab-target gallery-page__article active"
                data-target="0" data-tabTargetReprep="galery_0">
                <h2 class="gallery-tab-target__title visually-hidden">Фото</h2>

                <ul class="gallery__subtitles gallery-subtitles d-flex">
                    <?php
                    if (have_rows('new_gallery_photo_subtitle', $page_id)) {
                        $i = 1; ?>
                        <?php while (have_rows('new_gallery_photo_subtitle', $page_id)) {
                            the_row();
                            $gallery_photo_subtitle = get_sub_field('gallery_photo_subtitle', $page_id);
                            $index = $i++;
                            echo '<li class="col-auto"><a href="#photo_sub_' . $index . '">' . $gallery_photo_subtitle . '</a></li>';
                        }
                        ;
                    } ?>
                </ul>

                <?php
                if (have_rows('new_gallery_photo_part', $page_id)) {
                    $n = 1; ?>
                    <?php while (have_rows('new_gallery_photo_part', $page_id)) {
                        the_row();
                        $indexn = $n++;
                        $gallery_photo_part_title = get_sub_field('gallery_photo_part_title', $page_id);
                        ?>

                        <div class="gallery__box">
                            <span class="title-bg">
                                <h3 id="photo_sub_<?php echo $indexn; ?>" class="gallery__title">
                                    <?php echo $gallery_photo_part_title; ?>
                                </h3>
                            </span>

                            <ul class="gallery__list gallery-list d-grid grid-three">
                                <?php if (have_rows('new_gallery_photo_part_item', $page_id)): ?>
                                    <?php while (have_rows('new_gallery_photo_part_item', $page_id)):
                                        the_row();
                                        $gallery_photo_image_part = get_sub_field('gallery_photo_image_part', $page_id);
                                        $gallery_photo_text_part = get_sub_field('gallery_photo_text_part', $page_id);
                                        ?>

                                        <a href="<?php echo $gallery_photo_image_part['url']; ?>"
                                            class="gallery-list__item document position-relative list-<?php echo $indexn; ?>"
                                            data-fancybox="photo_gallery_<?php echo $indexn; ?>"
                                            data-caption="<?php echo $gallery_photo_text_part; ?>">

                                            <?php if ($gallery_photo_text_part) {
                                                echo '<div class="document__description position-absolute">' . $gallery_photo_text_part . '</div>';
                                            } ?>

                                            <img src="<?php echo $gallery_photo_image_part['url']; ?>"
                                                alt="<?php echo $gallery_photo_image_part['alt']; ?>">
                                        </a>
                                        <?php
                                    endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php }
                    ;
                } ?>
            </article>

            <article class="gallery-tab-target__target js-targetTabs gallery-tab-target gallery-page__article"
                data-target="1" data-tabTargetReprep="galery_1">
                <h2 class="gallery-tab-target__title visually-hidden">Видео</h2>

                <ul class="gallery__subtitles gallery-subtitles d-flex">
                    <?php
                    if (have_rows('new_gallery_video_subtitle', $page_id)) {
                        $x = 1; ?>
                        <?php while (have_rows('new_gallery_video_subtitle', $page_id)) {
                            the_row();
                            $gallery_video_subtitle = get_sub_field('gallery_video_subtitle', $page_id);
                            $index_x = $x++;
                            echo '<li class="col-auto"><a href="#photo_sub_' . $index_x . '">' . $gallery_video_subtitle . '</a></li>';
                        }
                        ;
                    } ?>
                </ul>

                <?php
                if (have_rows('new_gallery_video_part', $page_id)) {
                    $y = 1; ?>
                    <?php while (have_rows('new_gallery_video_part', $page_id)) {
                        the_row();
                        $index_y = $y++;
                        $gallery_video_part_title = get_sub_field('gallery_video_part_title', $page_id);
                        ?>

                        <div class="gallery__box">
                            <span class="title-bg">
                                <h3 id="photo_sub_<?php echo $index_y; ?>" class="gallery__title">
                                    <?php echo $gallery_video_part_title; ?>
                                </h3>
                            </span>

                            <ul class="gallery__list gallery-list d-grid grid-three">
                                <?php if (have_rows('add_video_block', $page_id)): ?>
                                    <?php while (have_rows('add_video_block', $page_id)):
                                        the_row();

                                        $gallery_video_type = get_sub_field('gallery_video_type', $page_id);
                                        $gallery_video = get_sub_field('gallery_video', $page_id);
                                        $gallery_video_id = get_sub_field('gallery_video_id', $page_id);
                                        ?>

                                        <li class="gallery-list__item document position-relative">
                                            <?php
                                            if ($gallery_video_type == 'файл' && $gallery_video) { ?>
                                                <video controls class="gallery-tab-list__image">
                                                    <source src="<?php echo esc_url($gallery_video['url']); ?>" type="video/webm" />

                                                    <source src="<?php echo esc_url($gallery_video['url']); ?>" type="video/mp4" />
                                                </video>
                                            <?php } else if ($gallery_video_type == 'ссылка' && $gallery_video_id) { ?>
                                                    <iframe src="https://rutube.ru/play/embed/<?php echo $gallery_video_id; ?>" frameBorder="0"
                                                        allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen
                                                        allowFullScreen>
                                                    </iframe>
                                            <?php } ?>
                                        </li>
                                        <?php
                                    endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php }
                    ;
                } ?>
            </article>
        </div>
    </div>
</section>

<?php

get_template_part('template-parts/block', 'cta');

get_footer();