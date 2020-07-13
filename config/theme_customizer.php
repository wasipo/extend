<?php

$top_post_group = [
    'group_name' => 'abcdefg',
    'setting' => 'example_group',
    'control' => 'example_group',
];

return
//[
//    [
//        'group_name' => $top_post_group['group_name'],
//        'group_section' => [
//            'title' => 'TOPページカスタマイズ',
//            'priority' => 20,
//            'description' => 'TOPページを編集できます。',
//            'active_callback' => '',
//            'group_setting' => [
//                [
//                    'customize_setting' => [
//                        [
//                            'setting_name' => $top_post_group['setting'],
//                            'group_section' => [
//                                'default' => '',
//                                'type' => 'null', // 親テーマの内容を引き継ぐのに利用
//                                'capability' => 'edit_theme_options', // 権限を変更したい場合に利用
//                                'transport' => 'refresh',
//                                'sanitize_callback' => '',
//                            ],
//                        ],
//                        [
//                            'setting_name' => 'abc',
//                            'group_section' => [
//                                'default' => '',
//                                'type' => 'null', // 親テーマの内容を引き継ぐのに利用
//                                'capability' => 'edit_theme_options', // 権限を変更したい場合に利用
//                                'transport' => 'refresh',
//                                'sanitize_callback' => '',
//                            ],
//                        ],
//                    ],
//                    'customize_control' => [
//                        [
//                            'setting_name' => $top_post_group['control'],
//                            'control_section' => [
//                                'settings' => $top_post_group['setting'],
//                                'label' => '投稿設定',
//                                'description' => '投稿ページをTOPに反映させる設定をします',
//                                'section' => $top_post_group['group_name'],
//                                'priority' => '1',
//                                'type' => 'text', // 入力フォーム部品
//                            ]
//                        ],
//                        [
//                            'setting_name' => 'iiii',
//                            'control_section' => [
//                                'settings' => 'abc',
//                                'label' => '2つめ',
//                                'description' => 'aaa',
//                                'section' => $top_post_group['group_name'],
//                                'priority' => '12',
//                                'type' => 'text', // 入力フォーム部品
//                            ]
//                        ],
//                    ],
//                ]
//            ],
//        ]
//    ],
//];
[
    [
        'group_name' => 'text_three',
        'group_section' => [
            'title' => 'TOPページカスタマイズ',
            'priority' => 1,
            'group_setting' => [
                [
                    'customize_setting' => [
                        [
                            'setting_name' => 'itemOne',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'postMessage', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                        [
                            'setting_name' => 'itemTwo',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'postMessage', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                    ],
                    'customize_control' => [
                        [
                            'setting_name' => 'my_theme_options_item_one',
                            'control_section' => [
                                'settings'  => 'itemOne', // settingのキー
                                'label'     => '1つ目', // ラベル名
                                'section'   => 'text_three', // sectionを指定
                                'type'      => 'text', // フォームの種類を指定
                            ],
                        ],
                        [
                            'setting_name' => 'my_theme_options_item_two',
                            'control_section' => [
                                'settings'  => 'itemTwo', // settingのキー
                                'label'     => '2つ目', // ラベル名
                                'section'   => 'text_three', // sectionを指定
                                'type'      => 'text', // フォームの種類を指定
                            ]
                        ],
                    ],
                ]
            ],
        ]
    ],
];