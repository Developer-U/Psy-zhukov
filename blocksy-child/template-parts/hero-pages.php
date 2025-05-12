<?php
/**
 * Template part for displaying Hero for other pages / Первый экран страниц, кроме главной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$page_id = get_the_ID();
$hero_pages_image = get_field('hero_pages_image', $page_id); // Изначально картинка - это поле для страниц
$top_block_title = is_archive() ? get_the_archive_title('') : get_the_title();
$post_type = get_post_type();
if ($post_type) {
    $post_type_data = get_post_type_object($post_type);
    $post_type_slug = $post_type_data->rewrite['slug'];
}

// Переопределяем картинку для страницы, если это архивная страница или конечная страница поста
if (is_single()) {
    $hero_pages_image = wp_get_attachment_url(get_post_thumbnail_id()); // Если это страница или Single типа постов - берём миниатюру страницы / поста
} elseif (is_archive()) {
    $hero_pages_image = get_field('archive_image_' . $post_type_slug, 'options'); // Архивная страница 
}
$image_url = (is_single()) ? $hero_pages_image : $hero_pages_image['url'];
?>

<section class="hero-pages dark overlay position-relative <?php if (is_page('gallery')) { ?>gallery<?php } ?>"
    style="background-image: url(<?php echo $image_url; ?>); background-repeat: no-repeat; background-size: cover; background-position: center">
    <!-- Основной контент -->
    <div class="container d-flex align-items-center">
        <div class="hero-pages__wrap hero-pages-wrap">
            <h1 class="hero-pages__title">
                <?php echo $top_block_title; ?>
            </h1>

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    (yoast_breadcrumb('<div class="breadcrumbs__list">', '</div>'));
                }
                ?>
            </div>
            <!-- breadcrumbs end -->
        </div>
    </div>
    </div>
</section>