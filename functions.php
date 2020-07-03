<?php

require_once(get_template_directory().'/vendor/autoload.php');

use App\IncludeDatas;
use App\PostFunction;
use App\ThemeCustomizer;

new IncludeDatas();
new PostFunction();
new ThemeCustomizer();

