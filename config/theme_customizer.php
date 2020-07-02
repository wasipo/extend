<?php

$example_group = [
    'group_name' => 'example_group',
    'setting' => 'example_group',
    'control' => 'example_group',
];

return
[
    [
        'group_name' => $example_group['group_name'],
        'group_section' => [
            'title' => 'test_title',
            'priority' => 20,
            'description' => 'test_description',
            'active_callback' => '',
            'group_setting' => [
                [
                    'customize_setting' => [
                        [
                            'setting_name' => $example_group['setting'],
                            'group_section' => [
                                'type' => 'null', // 親テーマの内容を引き継ぐのに利用
                                'capability' => 'edit_theme_options', // 権限を変更したい場合に利用
                                'transport' => 'refresh',
                                'sanitize_callback' => '',
                            ],
                        ]
                    ],
                    'customize_control' => [
                        [
                            'setting_name' => $example_group['control'],
                            'control_section' => [
                                'settings' => $example_group['setting'],
                                'label' => 'test_output',
                                'description' => 'test_outputttttt_description',
                                'section' => $example_group['group_name'],
                                'priority' => '1',
                                'type' => 'text', // 入力フォーム部品
                            ]
                        ]
                    ],
                ]
            ],

        ]
    ],
];