<?php
/**
 * Template part for Block Symbolysm / блок Символизм в личности человека
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$symbolism_title = get_field('symbolism_title');
$symbol_item_1 = get_field('symbol_item_1');
$symbol_item_2 = get_field('symbol_item_2');
$symbol_item_3 = get_field('symbol_item_3');
$symbol_item_4 = get_field('symbol_item_4');
$symbol_item_5 = get_field('symbol_item_5');
?>

<section class="symbolism gradient position-relative">
    <div class="container">
        <h2 class="symbolism__title">
            <?php echo $symbolism_title; ?>
        </h2>

        <div class="symbolism__tree symbol-tree d-grid">
            <div class="symbol-tree__pictures">
                <!-- Item1 -->
                <div class="symbol-tree__left item-1 position-relative">
                    <?php if ($symbol_item_1['image']) { ?>
                        <?php echo '<img src="' . $symbol_item_1['image']['url'] . '" alt="' . $symbol_item_1['image']['alt'] . '" class="position-relative">'; ?>
                    <?php } ?>
                </div>

                <!-- Item2 -->
                <div class="symbol-tree__left item-2">
                    <?php if ($symbol_item_2['image']) { ?>
                        <?php echo '<img src="' . $symbol_item_2['image']['url'] . '" alt="' . $symbol_item_2['image']['alt'] . '" class="position-relative">'; ?>
                    <?php } ?>
                </div>

                <!-- Item3 -->
                <div class="symbol-tree__left item-3">
                    <?php if ($symbol_item_3['image']) { ?>
                        <?php echo '<img src="' . $symbol_item_3['image']['url'] . '" alt="' . $symbol_item_3['image']['alt'] . '" class="position-relative">'; ?>
                    <?php } ?>
                </div>

                <!-- Item4 -->
                <div class="symbol-tree__left item-4">
                    <?php if ($symbol_item_4['image']) { ?>
                        <?php echo '<img src="' . $symbol_item_4['image']['url'] . '" alt="' . $symbol_item_4['image']['alt'] . '" class="position-relative">'; ?>
                    <?php } ?>
                </div>

                <!-- Item5 -->
                <div class="symbol-tree__left item-5">
                    <?php if ($symbol_item_5['image']) { ?>
                        <?php echo '<img src="' . $symbol_item_5['image']['url'] . '" alt="' . $symbol_item_5['image']['alt'] . '" class="position-relative">'; ?>
                    <?php } ?>
                </div>
            </div>

            <div class="symbol-tree__texts position-relative">
                <div class="symbol-tree__right item-1">
                    <h3 class="symbol-tree__title">
                        <?php echo $symbol_item_1['title']; ?>
                    </h3>

                    <div class="symbol-tree__text">
                        <?php echo $symbol_item_1['text']; ?>
                    </div>
                </div>

                <div class="symbol-tree__right item-2">
                    <h3 class="symbol-tree__title">
                        <?php echo $symbol_item_2['title']; ?>
                    </h3>

                    <div class="symbol-tree__text">
                        <?php echo $symbol_item_2['text']; ?>
                    </div>
                </div>

                <div class="symbol-tree__right item-3">
                    <h3 class="symbol-tree__title">
                        <?php echo $symbol_item_3['title']; ?>
                    </h3>

                    <div class="symbol-tree__text">
                        <?php echo $symbol_item_3['text']; ?>
                    </div>
                </div>

                <div class="symbol-tree__right item-4">
                    <h3 class="symbol-tree__title">
                        <?php echo $symbol_item_4['title']; ?>
                    </h3>

                    <div class="symbol-tree__text">
                        <?php echo $symbol_item_4['text']; ?>
                    </div>
                </div>

                <div class="symbol-tree__right item-5">
                    <h3 class="symbol-tree__title">
                        <?php echo $symbol_item_5['title']; ?>
                    </h3>

                    <div class="symbol-tree__text">
                        <?php echo $symbol_item_5['text']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>