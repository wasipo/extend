<?php

namespace App;

use App\util;


class IncludeDatas extends BaseDatas {


    public function __construct() {

        parent::__construct();

        add_action('wp_enqueue_scripts',array(&$this, 'include_css'),10,1);
        do_action('wp_enqueue_scripts', $this->enqueque['css']);

        add_action('wp_enqueue_scripts', array(&$this, 'include_js'));
        do_action('wp_enqueue_scripts', $this->enqueque['js']);


    }

    public function include_css($enqueued) {
        if (is_array($enqueued)) {
            foreach($enqueued as $row) {
                if(!is_admin()) {
                    wp_enqueue_style($row['name'], $row['location'],$row['deps'],$row['version']);
                }
            }
        }
    }

    public function include_js($enqueued) {

        if (is_array($enqueued)) {
            foreach($enqueued as $row) {
                if(!is_admin()) {
                    wp_enqueue_script($row['name'], $row['location'],$row['deps'],$row['version'],$row['output']);
                }
            }
        }
    }


}