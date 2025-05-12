<?php
if (!defined('WP_DEBUG')) {
	die('Direct access forbidden.');
}


// Добавим Страницу опций на ACF PRO options_theme

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Основные настройки',
		'menu_title' => 'Основная информация',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));

	acf_add_options_page(array(
		'page_title' => 'Сквозные блоки',
		'menu_title' => 'Сквозные блоки',
		'icon_url' => 'dashicons-table-col-after',
		'menu_slug' => 'theme-general-blocks',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}

/*
 * Sticky sidebar
 */

add_action('wp_enqueue_scripts', 'add_my_scripts');
function add_my_scripts()
{
	wp_register_script(
		'resizesensor_js',
		get_stylesheet_directory_uri() . '/assets/js/ResizeSensor.js',
		array('jquery'),
		wp_get_theme()->get('Version'),
		true
	);
	wp_register_script(
		'theia_sticky_sidebar_js',
		get_stylesheet_directory_uri() . '/assets/js/theia-sticky-sidebar.js',
		array('jquery'),
		wp_get_theme()->get('Version'),
		true
	);
	wp_register_script(
		'sticky_sidebar_init_js',
		get_stylesheet_directory_uri() . '/assets/js/sticky-sidebar-init.js',
		array('theia_sticky_sidebar_js'),
		wp_get_theme()->get('Version'),
		true
	);
}

/*
 * Скрипты и стили
 */
require get_stylesheet_directory() . '/includes/enqueue-scripts.php';

/*
 * Файл навигации (меню на сайте)
 */
require get_stylesheet_directory() . '/includes/navigations.php';

/*
 * Подключение настроек темы
 */
require get_stylesheet_directory() . '/includes/duplicate-types.php';

/*
 * Добавим произвольные типы записей
 */
require get_stylesheet_directory() . '/includes/post-types.php';

/*
 * Добавим фунц2ию открытия статей через /blog/
 */
require get_stylesheet_directory() . '/includes/blog-prefix.php';

/*
 * Шорткоды
 */
require get_stylesheet_directory() . '/includes/shortcodes.php';
