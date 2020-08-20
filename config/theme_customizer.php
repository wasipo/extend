<?php

$top_post_group = [
    'group_name' => 'abcdefg',
    'setting' => 'example_group',
    'control' => 'example_group',
];

global $wp_customize;

return [
    [
        'group_name' => 'top_customize',
        'group_section' => [
            'title' => 'TOPページカスタマイズ',
            'priority' => 1,
            'group_setting' => [
                [
                    'customize_setting' => [
                        [
                            'setting_name' => 'postEnable',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'refresh', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                        [
                            'setting_name' => 'nav_type',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'refresh', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                        [
                            'setting_name' => 'post_contents_type',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'refresh', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                        [
                            'setting_name' => 'page_contents_type',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'refresh', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                        [
                            'setting_name' => 'footer_type',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'refresh', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                        [
                            'setting_name' => 'header_type',
                            'group_section' => [
                                'type'      => 'option',
                                'transport' => 'refresh', // 表示更新のタイミング。デフォルトは'refresh'（即時反映）
                            ],
                        ],
                        [
                            'setting_name' => 'set_logo',
                        ],

                        [
                            'setting_name' => 'set_img_url',
                        ],

                    ],
                    'customize_control' => [
                        [
                            'setting_name' => 'post_display',
                            'control_section' => [
                                'section'   => 'top_customize', // sectionを指定
                                'settings'  => 'postEnable', // settingのキー
                                'label'     => '投稿', // ラベル名
                                'description' => '表示・非表示',
                                'type'      => 'radio', // フォームの種類を指定
                                'choices' => [
                                    '1' => '横並び',
                                    '2' => '縦並び',
                                    '3' => '表示なし',
                                ]
                            ],
                        ],
                        [
                            'setting_name' => 'logo_image',
                            'object' => [
                                'label' => 'ロゴ画像', //設定ラベル
                                'section' => 'top_customize', //セクションID
                                'settings' => 'set_logo', //セッティングID
                                'description' => 'ロゴ画像を設定します。',
                            ]
                        ],
                        [
                            'setting_name' => 'header_image',
                            'object' => [
                                'label' => 'ヘッダーイメージ', //設定ラベル
                                'section' => 'top_customize', //セクションID
                                'settings' => 'set_img_url', //セッティングID
                                'description' => 'ヘッダーの背景イメージを設定します。',
                            ]
                        ],
                        [
                            'setting_name' => 'header_setting',
                            'control_section' => [
                                'section'   => 'top_customize', // sectionを指定
                                'settings'  => 'header_type', // settingのキー
                                'label'     => 'ヘッダータイプ', // ラベル名
                                'description' => 'ヘッダーのレイアウト設定',
                                'type'      => 'radio', // フォームの種類を指定
                                'choices' => [
                                    '1' => 'ヘッダー1ページ',
                                    '2' => 'ヘッダーナビゲーションサイズ',
                                    '3' => '設定しない',
                                ]
                            ],
                        ],
                        [
                            'setting_name' => 'nav_setting',
                            'control_section' => [
                                'section'   => 'top_customize', // sectionを指定
                                'settings'  => 'nav_type', // settingのキー
                                'label'     => 'ナビゲーションタイプ', // ラベル名
                                'description' => 'ナビゲーションタイプ設定',
                                'type'      => 'radio', // フォームの種類を指定
                                'choices' => [
                                    '1' => '横並び（ロゴ揃える）',
                                    '2' => '横並び（ロゴ縦）',
                                    '3' => '横並び（ロゴなし）',
                                    '4' => '縦並び（ロゴあり）',
                                    '5' => '縦並び（ロゴなし）',
                                    '6' => 'ナビゲーションなし',
                                ]
                            ],
                        ],
                        [
                            'setting_name' => 'post_contents_setting',
                            'control_section' => [
                                'section'   => 'top_customize', // sectionを指定
                                'settings'  => 'post_contents_type', // settingのキー
                                'label'     => '投稿の表示タイプ', // ラベル名
                                'description' => '投稿の表示タイプ設定',
                                'type'      => 'radio', // フォームの種類を指定
                                'choices' => [
                                    '1' => '1カラム',
                                    '2' => '2カラム',
                                    '3' => '3カラム',
                                ]
                            ],
                        ],
                        [
                            'setting_name' => 'page_contents_setting',
                            'control_section' => [
                                'section'   => 'top_customize', // sectionを指定
                                'settings'  => 'page_contents_type', // settingのキー
                                'label'     => '固定ページの表示タイプ', // ラベル名
                                'description' => '固定ページの表示タイプ設定',
                                'type'      => 'radio', // フォームの種類を指定
                                'choices' => [
                                    '1' => '1カラム',
                                    '2' => '2カラム',
                                    '3' => '3カラム',
                                ]
                            ],
                        ],
                        [
                            'setting_name' => 'footer_setting',
                            'control_section' => [
                                'section'   => 'top_customize', // sectionを指定
                                'settings'  => 'footer_type', // settingのキー
                                'label'     => '固定ページの表示タイプ', // ラベル名
                                'description' => '固定ページの表示タイプ設定',
                                'type'      => 'radio', // フォームの種類を指定
                                'choices' => [
                                    '1' => 'パターン1',
                                    '2' => 'パターン2',
                                    '3' => 'パターン3',
                                    '4' => 'シンプル',
                                ]
                            ],
                        ],

                    ],
                ]
            ],
        ]
    ],
];