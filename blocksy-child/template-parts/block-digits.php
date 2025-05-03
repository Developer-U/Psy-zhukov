<?php
/**
 * Template part for Block Digits / блок Счётчик чисел
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$digits_first = get_field('digits_first', 'options');
$digits_second = get_field('digits_second', 'options');
$digits_third = get_field('digits_third', 'options');
$digits_fourth = get_field('digits_fourth', 'options');
?>

<section class="dark digits">
    <div class="container">
        <ul class="digits__list digits-list d-grid grid-four">
            <?php if ($digits_first['digit']) { ?>
                <li class="digits-list__item digits-item">
                    <h2 class="digits-item__digit">
                        <?php echo $digits_first['digit']; ?>
                        <span>+</span>
                    </h2>

                    <div class="digits-item__description">
                        <?php echo $digits_first['description']; ?>
                    </div>
                </li>
            <?php } 
            if ($digits_second['digit']) { ?>
                <li class="digits-list__item digits-item">
                    <h2 class="digits-item__digit">
                        <?php echo $digits_second['digit']; ?>
                        <span>+</span>
                    </h2>

                    <div class="digits-item__description">
                        <?php echo $digits_second['description']; ?>
                    </div>
                </li>
            <?php }
            if ($digits_third['description']) { ?>
                <li class="digits-list__item digits-item">
                    <figure class="digits-item__image">
                        <img src="<?php echo $digits_third['image']['url']; ?>" alt="<?php echo $digits_third['image']['alt']; ?>">
                    </figure>

                    <div class="digits-item__description">
                        <?php echo $digits_third['description']; ?>
                    </div>
                </li>
            <?php }
            if ($digits_fourth['description']) { ?>
                <li class="digits-list__item digits-item">
                    <figure class="digits-item__image">
                        <img src="<?php echo $digits_fourth['image']['url']; ?>" alt="<?php echo $digits_fourth['image']['alt']; ?>">
                    </figure>

                    <div class="digits-item__description">
                        <?php echo $digits_fourth['description']; ?>
                    </div>
                </li>
            <?php }
            ?>
        </ul>
    </div>
</section>