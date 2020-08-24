<?php

namespace App\Widget;

use App\util;
use WP_Widget;


class PostWidget extends \WP_Widget {

    /**
     * Widgetを登録する
     */
    function __construct() {

        parent::__construct(
            'post_widget', // Base ID
            'Widgetの名前', // Name
            array( 'description' => 'Widgetの説明', ) // Args
        );
    }



    /**
     * 表側の Widget を出力する
     *
     * @param array $args      'register_sidebar'で設定した「before_title, after_title, before_widget, after_widget」が入る
     * @param array $instance  Widgetの設定項目
     */
    public function widget( $args, $instance ) {

    }


    /** Widget管理画面を出力する
     *
     * @param array $instance 設定項目
     * @return string|void
     */
    public function form( $instance )
    {

    }

    /** 新しい設定データが適切なデータかどうかをチェックする。
     * 必ず$instanceを返す。さもなければ設定データは保存（更新）されない。
     *
     * @param array $new_instance  form()から入力された新しい設定データ
     * @param array $old_instance  前回の設定データ
     * @return array               保存（更新）する設定データ。falseを返すと更新しない。
     */
    function update($new_instance, $old_instance) {
        if(!filter_var($new_instance['email'],FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return $new_instance;
    }

}
