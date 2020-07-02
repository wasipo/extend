<?php

return [


    'css' => [
        [
            'name' => 'output',
            "location" =>   get_template_directory_uri().'/output.css',
            "deps" =>  [],
            "version" =>  filemtime(dirname(__FILE__,2).'/output.css'),
        ],
        [
            'name' => 'standard_base',
            "location" =>   get_template_directory_uri().'/assets/standard_base/style.css',
            "deps" =>  [],
            "version" =>  filemtime(dirname(__FILE__,2).'/assets/standard_base/style.css'),
        ],
    ],

    'js' => [
        [
            'name' => 'main',
            "location" =>   get_template_directory_uri().'/assets/standard_base/bundle.js',
            "deps" =>  [],
            "version" =>  filemtime(dirname(__FILE__,2).'/assets/standard_base/bundle.js'),
            "output" =>  true,
        ],
    ]



 ];
