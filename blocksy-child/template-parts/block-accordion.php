<?php
/**
 * Display Block width accordion
 * Вывод блока c аккордионом
 * 
 **/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$page_id = get_the_ID();
$accordion_title = get_field('block_accordion_title', $page_id);

if (have_rows('new_accordion_item', $page_id)) { // Показывать весь блок только, когда добавлены поля ACF
    ?>

    <section id="block_<?php echo $page_id; ?>" class="block-accordion">
        <div class="container post">
            <?php if ($accordion_title) { ?>
                <h2>
                    <?php echo $accordion_title; ?>
                </h2>
            <?php } ?>

            <!-- Важно в стилях Ul добавить my-accordion и accordionjs -->
            <ul class="block-accordion__list block-accord-list my-accordion accordionjs">
                <?php
                if (have_rows('new_accordion_item', $page_id)) { ?>
                    <?php while (have_rows('new_accordion_item', $page_id)) {
                        the_row();
                        $new_accordion__item_title = get_sub_field('new_accordion_item_title', $page_id);
                        $new_accordion__item_text = get_sub_field('new_accordion_item_text', $page_id);
                        ?>

                        <li class="block-accord-list__item accord-list-item mb-2 mb-lg-4">
                            <div>
                                <?php echo $new_accordion__item_title; ?>
                                <!-- Здесь span - это галка справа, которая при открытии будет поворачиваться
                                Если галка не нужна, можно убрать этот span, но тогда убрать и лишний код js -->
                                <span></span>
                            </div>

                            <div>
                                <?php echo $new_accordion__item_text; ?>
                            </div>
                        </li>
                    <?php }
                    ;
                } ?>
            </ul>
        </div>
    </section>

<?php } ?>