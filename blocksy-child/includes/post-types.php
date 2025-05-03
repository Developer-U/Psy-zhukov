<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/* Регистрируем новый тип записей - Услуги
-----------------------------------------------*/
add_action('init', 'services');
function services()
{
  $labels = array(
    'name' => 'Услуги',
    'singular_name' => 'Услуга',
    'add_new' => 'Добавить услугу',
    'add_new_item' => 'Добавить новую услугу',
    'edit_item' => 'Редактировать услугу',
    'new_item' => 'Новая услуга',
    'view_item' => 'Посмотреть Услуги',
    'search_items' => 'Найти Услуги',
    'not_found' => 'Услуг не найдено',
    'not_found_in_trash' => 'В корзине услуг не найдено',
    'parent_item_colon' => '',
    'menu_name' => 'Услуги'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-megaphone',
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),

  );
  register_post_type('services', $args);
}

/* Регистрируем новый тип записей - кейсы
-----------------------------------------------*/
add_action('init', 'reviews');
function reviews()
{
  $labels = array(
    'name' => 'Кейсы',
    'singular_name' => 'Кейс',
    'add_new' => 'Добавить Кейс',
    'add_new_item' => 'Добавить новый Кейс',
    'edit_item' => 'Редактировать Кейс',
    'new_item' => 'Новый Кейс',
    'view_item' => 'Посмотреть Кейсы',
    'search_items' => 'Найти Кейсы',
    'not_found' => 'Кейсов не найдено',
    'not_found_in_trash' => 'В корзине Кейсов не найдено',
    'parent_item_colon' => '',
    'menu_name' => 'Кейсы'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-format-status',
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),

  );
  register_post_type('reviews', $args);
}


