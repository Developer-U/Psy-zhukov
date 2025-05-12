<?php
/**
 * Template part for Block Routes / блок Направления работы
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$routes_title = get_field('routes_title');

if (have_rows('new_route')) {
    ?>

    <section class="routes dark b-top b-bottom">
        <div class="container">
            <div class="levels__wrap routes__wrap d-grid align-items-start">
                <h2 class="levels__title routes__title">
                    <?php if ($routes_title) {
                        echo $routes_title;
                    } else {
                        echo 'Работаю в&nbsp;направлениях:';
                    } ?>
                </h2>

                <ul class="routes__list competent-list routes-list d-flex flex-wrap">
                    <?php if (have_rows('new_route')) { ?>
                        <?php while (have_rows('new_route')) {
                            the_row();
                            $route_title = get_sub_field('route_title');
                            ?>

                            <li class="plashka-item competent-list__item col-auto">
                                <?php echo $route_title; ?>
                            </li>
                        <?php }
                    } ?>
                </ul>
            </div>
        </div>
    </section>

<?php }