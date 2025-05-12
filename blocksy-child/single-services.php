<?php
/**
 * The template for displaying Single servicers
 *
 * Template Name: Страница услуг
 * Template Post Type: services
 */

get_header();

if (have_posts()) {
    the_post();
}

if (
    function_exists('blc_get_content_block_that_matches')
    &&
    blc_get_content_block_that_matches([
        'template_type' => 'single',
        'template_subtype' => 'canvas'
    ])
) {
    echo blc_render_content_block(
        blc_get_content_block_that_matches([
            'template_type' => 'single',
            'template_subtype' => 'canvas'
        ])
    );
    have_posts();
    wp_reset_query();
    return;
}

wp_enqueue_script('resizesensor_js');
wp_enqueue_script('theia_sticky_sidebar_js');
wp_enqueue_script('sticky_sidebar_init_js');

// Block Top
get_template_part('template-parts/hero', 'pages');
?>

<section class="single gradient-left">
    <div class="container">
        <div class="single__wrapper single-wrapper d-flex flex-column flex-lg-row">
            <div class="single-wrapper__content single-content col post">
                <?php
                the_content();
                get_template_part('template-parts/cta', 'services-block');
                ?>

                <div class="post-nav">
                    <?php
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle prev">' . esc_html__('←', 'estore') . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-title">%title</span> <span class="nav-subtitle next">' . esc_html__('→', 'estore') . '</span>',
                            'class' => 'posts-nav',
                        )
                    );
                    ?>
                </div>
            </div>

            <div class="single-wrapper__sidebar sidebar">
                <div class="theiaStickySidebar">
                    <?php get_template_part('template-parts/sidebar', 'services'); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
have_posts();
wp_reset_query();

get_footer();