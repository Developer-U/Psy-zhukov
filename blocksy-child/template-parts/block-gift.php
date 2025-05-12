<?php
/**
 * Template part for Block Gift / блок Подарок
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$gift_title = get_field('gift_title', 'options');
$gift_image = get_field('gift_image', 'options');
$gift_text = get_field('gift_text', 'options');
$gift_button = get_field('gift_button', 'options');
?>

<section class="gift pattern">
    <div class="container">
        <div class="gift__wrap gift-wrap d-flex flex-column-reverse flex-md-row">
            <figure class="gift__image">
                <img src="<?php echo $gift_image['url']; ?>" alt="<?php echo $gift_image['alt']; ?>">
            </figure>

            <div class="gift__right col d-flex flex-column flex-lg-row">
                <div class="gift-wrap__title">
                    <h2 class="gift__title bird-title">
                        <?php echo $gift_title; ?>

                        <span class="bird bird-1"></span>
                    </h2>
                </div>

                <div class="gift__box">
                    <div class="gift__text">
                        <?php echo $gift_text; ?>
                    </div>

                    <a href="<?php echo $gift_button['link']; ?>"
                        class="button gift__btn"><?php echo $gift_button['text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>