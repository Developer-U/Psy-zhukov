<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package estore
 */

get_header(); ?>

<section id="primary" class="content-area error-404 not-found gradient">
    <div class="container">
        <div class="simple-page__top mt-2 mt-lg-4 mb-2 mb-lg-4">
            <h1 class="error-404__title">#404</h1>

            <h2 class="error-404__title">Страница не найдена</h2>

            <div class="hero-pages__social error-404__social centered">
                <?php echo get_template_part('template-parts/social'); ?>
            </div>
        </div>
    </div><!-- .error-404 -->
</section><!-- #primary -->

<?php
get_template_part('template-parts/block', 'services');

get_footer();
