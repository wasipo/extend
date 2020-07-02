<?php
namespace App;

class util {


    public static function getConst($file) {

        $path = dirname(__FILE__,2).'/config/'.$file.'.php';
        $config = null;

        if(file_exists($path)) {
            $config = require($path);
        }

        return $config;

    }




}