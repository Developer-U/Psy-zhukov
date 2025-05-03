<?php
/**
 * Display Block Shortcodes
 * Шорткоды
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

/*
 * Шорткод block-accordion 
 * Блок с аккордионом
 */
add_shortcode('accordion_block', 'accordion_block_shortcode_callback');

function accordion_block_shortcode_callback()
{
	ob_start();

	get_template_part('template-parts/block', 'accordion');

	$output = ob_get_contents(); // всё, что вывели, окажется внутри $output
	ob_end_clean();

	return $output;
}