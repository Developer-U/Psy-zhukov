<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$page_id = get_the_ID();
$gift_text = get_field('podarok_page_text', $page_id);
$gift_text_under = get_field('gift_text_under', $page_id);

$gift_title = get_field('gift_title', 'options');
$gift_image = get_field('gift_image', 'options');
/**
 *  Page About
 */

get_header();
?>

<section class="gift pattern gift-page b-bottom">
    <div class="container">
        <div class="gift__wrap gift-page-wrap d-flex align-items-end align-items-md-start">
            <figure class="gift__image gift-page">
                <img src="<?php echo $gift_image['url']; ?>" alt="<?php echo $gift_image['alt']; ?>">
            </figure>

            <div class="gift__right col d-flex flex-column">
                <div class="gift-wrap__title">
                    <h2 class="gift__title gift-page bird-title">
                        <?php echo $gift_title; ?>

                        <span class="bird bird-1"></span>
                    </h2>
                </div>

                <div class="gift__box page-gift">
                    <div class="gift__text">
                        <?php echo $gift_text; ?>
                    </div>

                    <?php if ($gift_text_under) {
                        echo '<p class="gift_text_under">' . $gift_text_under . '</p>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (have_rows('new_instrument', $page_id)) {
    $i = 1; ?>
    <?php while (have_rows('new_instrument', $page_id)) {
        the_row();
        $instrument_image = get_sub_field('instrument_image', $page_id);
        $instrument_title = get_sub_field('instrument_title', $page_id);
        $instrument_description = get_sub_field('instrument_description', $page_id);
        $instrument_text = get_sub_field('instrument_text', $page_id);
        $instrument_icon = get_sub_field('instrument_icon', $page_id);
        $instrument_button = get_sub_field('instrument_button', $page_id);
        $index = $i++;
        ?>

        <section class="instrument b-bottom"
            style="background-image: url(<?php echo $instrument_image['url']; ?>); background-repeat: no-repeat; background-size: cover; background-position: center">
            <div class="container">
                <div class="instrument__wrap instrument-wrap d-flex gap-2 gap-lg-3 align-items-start">
                    <div class="instrument-wrap__item level-item item-<?php echo $index; ?> position-relative">
                        <span class="level-item__num position-absolute"><?php echo $index; ?></span>

                        <?php if ($instrument_icon) { ?>
                            <img src="<?php echo $instrument_icon['url']; ?>" alt="<?php echo $instrument_icon['alt']; ?>"
                                class="instrument-wrap__icon">
                        <?php } else {
                            echo '<img src=" ' . get_stylesheet_directory_uri() . '/assets/img/instrument-1.svg" alt="иконка инструмента">';
                        } ?>
                    </div>

                    <div class="instrument-wrap__texts instrument-texts col">
                        <?php if ($instrument_title) { ?>
                            <h2 class="instrument-texts__title">
                                <?php echo $instrument_title; ?>
                            </h2>
                        <?php }
                        if ($instrument_description) { ?>
                            <h3 class="instrument-texts__description">
                                <?php echo $instrument_description; ?>
                            </h3>
                        <?php }
                        ?>
                        <div class="instrument-wrap__text post">
                            <?php echo $instrument_text; ?>
                        </div>
                        <?php if ($instrument_button['title'] && $instrument_button['link']) { ?>
                            <a href="<?php echo $instrument_button['link']; ?>" class="instrument-wrap__btn button action-more"
                                target="_blank">
                                <p><?php echo $instrument_button['title']; ?></p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php }
    ;
} ?>

<?php
get_template_part('template-parts/block', 'cta');

get_footer();