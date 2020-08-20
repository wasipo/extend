<?php

namespace App;

use App\SetData;
use App\util;
use WP_Customize_Image_Control;


class ThemeCustomizer  {


    protected $customizer = [];

    public function __construct() {
        $this->customizer = util::getConst('theme_customizer');
        add_action('customize_register',array($this,'CustomizePostDisplay'));
    }

    public function CustomizePostDisplay($wp_customize) {
        $WP_DATAS = new SetData();

        foreach($this->customizer as $key => $record) {

            $group_setting = array_pop($record['group_section']);
            $wp_customize->add_section($record['group_name'],$record['group_section']);

            foreach($group_setting as $row) {

                for($i=0;  $i < count($row['customize_setting']); $i++) {
                    $setting_title = $row['customize_setting'][$i]['setting_name'];

                    if(empty($row['customize_setting'][$i]['group_section'])) {
                        $wp_customize->add_setting($setting_title);
                    } else {
                        $setting_contents = $row['customize_setting'][$i]['group_section'];
                        $wp_customize->add_setting($setting_title,$setting_contents);
                    }
                }

                for($i=0;  $i < count($row['customize_control']); $i++) {

                    //var_dump($row['customize_control']);
                    $control_title = $row['customize_control'][$i]['setting_name'];
                    if(!empty($row['customize_control'][$i]['object'])) {
                        // フォームの部品を配列で指定できずにWordPressの機能を利用する場合
                        $control_contents = $row['customize_control'][$i]['object'];
                        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $control_title, $control_contents));
                    } else {
                        $control_contents = $row['customize_control'][$i]['control_section'];
                        $wp_customize->add_control($control_title,$control_contents);
                    }
                }


            }

        }

    }

}