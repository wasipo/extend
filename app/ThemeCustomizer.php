<?php

namespace App;

use App\util;

class ThemeCustomizer  {


    protected $customizer = [];

    public function __construct() {
        $this->customizer = util::getConst('theme_customizer');
        add_action('customize_register',array($this,'CustomizePostDisplay'));
    }

    public function CustomizePostDisplay($wp_customize) {

        foreach($this->customizer as $key => $record) {

            $group_setting = array_pop($record['group_section']);
            $wp_customize->add_section($record['group_name'],$record['group_section']);

            foreach($group_setting as $row) {

                for($i=0;  $i < count($row['customize_setting']); $i++) {
                    var_dump($row['customize_setting'][$i]);
                    $setting_title = $row['customize_setting'][$i]['setting_name'];
                    $setting_contents = $row['customize_setting'][$i]['group_section'];
                    $wp_customize->add_setting($setting_title,$setting_contents);
                }

                for($i=0;  $i < count($row['customize_control']); $i++) {
                    $control_title = $row['customize_control'][$i]['setting_name'];
                    $control_contents = $row['customize_control'][$i]['control_section'];
                    $wp_customize->add_control($control_title,$control_contents);
                }

            }

        }

    }

}