<?php

return [

    'widget' => [

        [
            'name' => 'TOPコンテンツ',
            'id' => 'top_contents',
            'before_widget' => '<div class="top_contents_column">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'description' => '各テンプレート全体の左サイドバー',
        ],


        [
            'name' => '全体左カラム',
            'id' => 'all_left_column',
            'before_widget' => '<div class="all_left_column">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'description' => '各テンプレート全体の左サイドバー',
        ],

        [
            'name' => '全体右カラム',
            'id' => 'all_right_column',
            'before_widget' => '<div class="all_right_column">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'description' => '各テンプレート全体の右サイドバー',
        ],

        [
            'name' => 'セクション右カラム',
            'id' => 'section_right_column',
            'before_widget' => '<div class="section_right_column">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'description' => '各セクションの全体の右サイドバー',
        ],

        [
            'name' => 'セクション右カラム',
            'id' => 'section_left_column',
            'before_widget' => '<div class="section_left_column">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'description' => '各セクションの全体の右サイドバー',
        ],


    ],

    'widget_contents' => [
        'App\Widget\PostWidget' =>
        [
            'name'          => 'サイドバー(上部)',
            'id'            => 'PostWidget',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ],
    ]


];