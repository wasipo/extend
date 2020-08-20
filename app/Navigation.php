<?php

namespace App;


use App\util;

class Navigation {

    public function __construct() {
        $navi = Util::getConst('config')['navigation'];

        foreach($navi as $location => $description) {
            register_nav_menu( $location, $description);
        }

    }



}