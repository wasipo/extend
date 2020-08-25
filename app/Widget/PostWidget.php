<?php

namespace App\Widget;

use App\util;
use WP_Query;
use WP_Widget;


class PostWidget extends \WP_Widget {

    const N_POSTS = 30;

    /**
     * Widgetを登録する
     */
    function __construct() {

        $args = array('posts_per_page' => self::N_POSTS, 'offset' => 0, 'order' => 'DESC', 'orderby' => 'date');
        $post_datas = new WP_Query($args);

        parent::__construct(
            'post_widget', // Base ID
            '【Tempestオリジナル】投稿表示設定', // Name
            array( 'description' => 'ブログ表示設定', ) // Args
        );
    }



    /**
     * 表側の Widget を出力する
     *
     * @param array $args      'register_sidebar'で設定した「before_title, after_title, before_widget, after_widget」が入る
     * @param array $instance  Widgetの設定項目
     */
    public function widget( $args, $instance ) {

        echo __( '世界のみなさん、こんにちは', 'text_domain' );
        echo $args['after_widget'];
    }


    /** Widget管理画面を出力する
     *
     * @param array $instance 設定項目
     * @return string|void
     */
    public function form( $instance )
    {

        $categories = get_categories();
        $args = array('posts_per_page' => self::N_POSTS, 'offset' => 0, 'order' => 'DESC', 'orderby' => 'date');
        $post_datas = new WP_Query($args);

        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( '最大表示件数', 'text_domain' );
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'post_title' ); ?>"><?php _e( '表示件数:' ); ?></label>
            <input style="width: 60px;" type="number" min="0" class="widefat" id="<?php echo $this->get_field_id( 'post_title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'post_category' ); ?>"><?php _e( '表示したいカテゴリ:' ); ?></label>
            <select multiple>
                <?php foreach($categories as $key => $obj) : ?>
                    <option value="<?php echo $obj->term_id; ?>"><?php echo $obj->name; ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'post_priority' ); ?>"><?php _e( '優先表示設定:' ); ?></label>
            <select id="post_recent" multiple>
                <?php
                while($post_datas->have_posts()) : $post_datas->the_post(); ?>
                    <?php if(!empty(get_the_title())) :?>
                    <option value="<?php echo get_the_id(); ?>"><?php echo get_the_title(); ?></option>
                    <?php endif; ?>
                <?php endwhile; ?>
            </select>
        </p>
        <?php
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
