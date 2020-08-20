<?php

require_once(get_template_directory().'/vendor/autoload.php');

use App\BaseDatas;
use App\IncludeDatas;
use App\PostFunction;
use App\ThemeCustomizer;
use App\util;
use App\Navigation;
use App\TempestRegister;

new IncludeDatas();
new PostFunction();
new ThemeCustomizer();
new Navigation();
new TempestRegister();



$util = new util();


function get_header_class($option,$const) {
    switch($option) {
        case $const['background'] :
            return 'background-on';
            break;
        case $const['background_none'] :
            return 'header-off';
            break;



    }
}

function get_navigation_class($option,$const)
{

    switch ($option) {

        case $const['horizontal_logo'] :
            return 'extend-offset-navigation';
            break;
        case $const['horizontal_line'] :
            return 'extend-navigation horizontal_line';
            break;
        case $const['horizontal_logo_none'] :
            return 'extend-offset-navigation logo_none';
            break;
        case $const['vertical_logo'] :
            return 'extend-navigation vertical';
            break;
        case $const['vertical_logo_none'] :
            return 'extend-navigation vertical logo-none';
            break;
        case $const['none'] :
            return 'navigation-logo-only';
            break;

    }

}

//if ( function_exists( 'register_sidebar' ) ) {
//    register_sidebar( array(
//        'name' => 'ウィジェット１',
//        'id' => 'widget01',
//        'before_widget' => '<div class=”widget”>',
//        'after_widget' => '</div>',
//        'before_title' => '<h3>',
//        'after_title' => '</h3>'
//    ) );
//}



function get_navigation_data($navigation_name) {

    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$navigation_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $result = [];

    foreach($menu_items as $key => $item) {
        if(array_key_exists((string)$item->menu_item_parent,$result)) {
            $result[$item->menu_item_parent]['children'][] = ['title'=>$item->title,'url'=>$item->url];
        } else {
            $result[$item->ID] = ['parent'=>$item->title,'url'=>$item->url,'description'=>$item->description];

        }
    }

    return $result;

}



