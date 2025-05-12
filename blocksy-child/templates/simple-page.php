<?php
/*
Template Name: Simple Page
*/

get_header();
?>

<section class="simple-page gradient">
    <div class="container">
        <div class="simple-page__top mt-2 mt-lg-4 mb-2 mb-lg-4">
            <h1 class="simple-page__title">
                <?php echo the_title(); ?>
            </h1>

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    (yoast_breadcrumb('<div class="breadcrumbs__list">', '</div>'));
                }
                ?>
            </div>
        </div>
        <!-- breadcrumbs end -->

        <div class="container simple-page__wrapper post">
            <?php the_content(); ?>
        </div>

        <a href="/" class="button mt-4">На главную</a>
    </div>
</section>

<?php get_footer(); ?>