<?php
/**
 * Sidebar Services
 * 
 */
$arg_services = array(
    'orderby' => 'name',
    'order' => 'DESC',
    'posts_per_page' => 4,
    'post_type' => 'services',
    'post_status' => 'publish',
    'post__not_in' => array($id), // Исключим текущий пост
);

$query_services = new WP_Query($arg_services);
?>

<div class="sidebar__wrap sidebar-wrap">
    <h3 class="sidebar-wrap__title">
        Другие услуги:
    </h3>

    <ul class="sidebar-wrap__list services__list d-flex flex-lg-column">
        <?php
        if ($query_services->have_posts()) {
            while ($query_services->have_posts()) {
                $query_services->the_post();
                $index_route = $x++;

                get_template_part('template-parts/service', 'item');
            }
            ;
            wp_reset_postdata() ?>
        <?php } ?>
    </ul>
</div>