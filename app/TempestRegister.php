<?php

namespace App;

use App\util;

class TempestRegister{

    const WIDGET = 'widget';
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

            }

        }

    }


}