<?php

namespace App;

use App\util;

class TempestRegister{

    const WIDGET = 'widget';
    const CONTENT = 'widget_contents';
    public $theme_menus = [];

    public function __construct()
    {
        $this->tempest_menus = util::getConst('tempest_menus');
        $this->RegisterAdminMenus();
    }

    public function RegisterAdminMenus()
    {

        foreach($this->tempest_menus as $key=> $array) {

            switch($key) {
                case self::WIDGET :
                    foreach($array as $widget) {
                        register_sidebar($widget);
                    }
                break;
                case self::CONTENT :
                    foreach($array as $key => $widget) {
                        add_action('widgets_init', function() use ($key,$widget) {
                            register_widget($key);
                            register_sidebar($widget);
                        });
                    }
                break;

            }

        }

    }

}

