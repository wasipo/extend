<?php

return [

        'remove' => [
            [
                'action_name' => 'wp_head',
                'remove_target' => 'print_emoji_detection_script',
                'priority' => 7,
            ],
            [
                'action_name' => 'wp_print_styles',
                'remove_target' => 'print_emoji_styles',
                'priority' => null,
            ],
            [
                'action_name' => 'wp_head',
                'remove_target' => 'adjacent_posts_rel_link_wp_head',
                'priority' => null,
            ],
            [
                'action_name' => 'wp_head',
                'remove_target' => 'wp_generator',
                'priority' => null,
            ],
            [
                'action_name' => 'wp_head',
                'remove_target' => 'rel_canonical',
                'priority' => null,
            ],
        ],

        'add' => [
            ['action_name' => 'wp_head'],
            ['action_name' => 'wp_head']
        ],



];