<?php
/**
 * Template part for Block Competent / блок Компетенции / инструменты
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$results_image = get_field('results_image', 'options');
?>

<section
    class="competent position-relative b-top b-bottom <?php if (is_page('about')) { ?>gradient-heaven heaven2 gradient-dark<?php } else { ?> tree gradient<?php } ?>">
    <?php if (is_page('about')) { ?>
        <div class="results__bg"
            style="background-image: url(<?php echo $results_image['url']; ?>); background-repeat: no-repeat; background-size: auto 100%; background-position: bottom right">
        </div>
    <?php } ?>
    <div class="container-fluid position-relative">
        <div class="competent__wrap competent-wrap d-grid grid-two">
            <?php
            get_template_part('template-parts/my', 'competent');

            if (is_page('about')) {
                get_template_part('template-parts/my', 'qualification');
            } else {
                get_template_part('template-parts/my', 'instruments');
            }
            ?>
        </div>
    </div>
</section>