<?php

require_once(get_template_directory().'/vendor/autoload.php');

use App\IncludeDatas;
use App\PostFunction;
use App\ThemeCustomizer;
use App\util;

new IncludeDatas();
new PostFunction();
new ThemeCustomizer();





//function my_theme_customize_register( $wp_customize ) {
//
//    $wp_customize->add_section( 'text_three', array(
//        'title'     => '3項目分', // 項目名
//        'priority'  => 1, // 優先順位
//    ));
//
//    $wp_customize->add_setting( 'itemOne', array(
//        'default'   => '',
//        'type'      => 'option',
//        'transport' => 'postMessage', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
//    ));
//    $wp_customize->add_control( 'my_theme_options_item_one', array(
//        'settings'  => 'itemOne', // settingのキー
//        'label'     => '1つ目', // ラベル名
//        'section'   => 'text_three', // sectionを指定
//        'type'      => 'text', // フォームの種類を指定
//    ));
//
//    $wp_customize->add_setting( 'itemTwo', array(
//        'default'   => '',
//        'type'      => 'option',
//        'transport' => 'postMessage', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
//    ));
//    $wp_customize->add_control( 'my_theme_options_item_two', array(
//        'settings'  => 'itemTwo', // settingのキー
//        'label'     => '2つ目', // ラベル名
//        'section'   => 'text_three', // sectionを指定
//        'type'      => 'text', // フォームの種類を指定
//    ));
//
//    $wp_customize->add_setting( 'itemThree', array(
//        'default'   => '',
//        'type'      => 'option',
//        'transport' => 'postMessage', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
//    ));
//    $wp_customize->add_control( 'my_theme_options_item_three', array(
//        'settings'  => 'itemThree', // settingのキー
//        'label'     => '3つ目', // ラベル名
//        'section'   => 'text_three', // sectionを指定
//        'type'      => 'text', // フォームの種類を指定
//    ));
//}
//add_action( 'customize_register', 'my_theme_customize_register' );