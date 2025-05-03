<?php
/**
 * Template part for displaying Hero block / Первый экран 
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$hero_text = get_field('hero_text');
$hero_image = get_field('hero_image');
$hero_top_layer_image = get_field('hero_top_layer_image');

$hero_title = get_field('hero_title', 'options');
$author_name = get_field('author_name', 'options');
$author_second_name = get_field('author_second_name', 'options');
$slogan_cta_text = get_field('slogan_cta_text', 'options');
?>

<section class="hero position-relative overlay white"
    style="background-image: url(<?php echo $hero_image['url']; ?>); background-repeat: no-repeat; background-size: cover">
    <?php
    if ($hero_top_layer_image) {
        echo '<div class="hero__toplayer position-absolute" style="background-image: url(' . $hero_top_layer_image['url'] . ')"></div>';
    }
    ?>

    <!-- Основной контент -->
    <div
        class="container-fluid hero__wrapper position-relative position-relative d-flex flex-column-reverse flex-lg-row justify-content-between">
        <div class="hero__left col">
            <h1 class="hero__title">
                <?php echo $hero_title ? $hero_title : 'Ваш персональный<br>психолог-психотерапевт'; ?>
            </h1>

            <h2 class="hero__subtitle">
                <?php echo $author_name ? $author_name : 'Геннадий Вадимович'; ?>
                <span>
                    <?php echo $author_second_name ? $author_second_name : 'ЖУКОВ'; ?>
                </span>
            </h2>

            <div class="hero__text">
                <?php
                if ($hero_text) {
                    echo $hero_text;
                } ?>
            </div>

            <div class="slogan-cta d-block d-md-none">
                <?php
                if ($slogan_cta_text) {
                    echo '<p class="slogan-cta__text">' . $slogan_cta_text . '</p>';
                } ?>

                <a href="/about" class="button hero__btn">обо мне</a>

                <button class="button slogan-cta__btn" data-popup-open="zakaz-popup">
                    записаться на консультацию
                </button>
            </div>

            <a href="/about" class="button hero__btn d-none d-md-block">обо мне</a>
        </div>

        <div class="hero__right col-auto hero-right d-flex flex-column justify-content-between">
            <div class="slogan-cta text-right d-none d-md-block">
                <?php
                if ($slogan_cta_text) {
                    echo '<p class="slogan-cta__text">' . $slogan_cta_text . '</p>';
                } ?>

                <button class="button slogan-cta__btn" data-popup-open="zakaz-popup">
                    записаться на консультацию
                </button>
            </div>

            <?php
            echo '<div class="hero__social">';
            get_template_part('template-parts/social');
            echo '</div>'; ?>
        </div>
    </div>

    <span class="d-none d-lg-block hero-wrapper__link"></span>
</section>