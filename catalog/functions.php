<?php

// Возвращает список категорий ресторанов
function get_categories($list) {
    $category_list = [];
    foreach ($list as $item) {
        $category_list[] = $item['category'];
    }
    $category_list = array_unique($category_list);
    return $category_list;
}

// Фильтрует список ресторанов
function filter_restaurants($list, $name_category) {
    $restaurants = [];
    foreach ($list as $item) {
        if ($item['category'] == $name_category) {
            $restaurants[] = $item;
        }
    }
    return $restaurants;
}