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
            '【Tempestオリジナル】投稿一覧表示設定', // Name
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
        echo $args['before_widget'];
        $instance = $this->getParameter($instance);
        $tempest_post_data = $this->getPostData($instance['post_num'],$instance['post_category']);
        include get_theme_file_path('sidebar-post.php');

        echo $args['after_widget'];
    }

    protected function getParameter($instance) {

        if(empty($instance['post_num'])) {
            $instance['post_num'] = null;
        }
        if(empty($instance['title'])) {
            $instance['title'] = null;
        }
        if(empty($instance['post_category'])) {
            $instance['post_category'] = null;
        }

        return $instance;

    }

    protected function getPostData($req_posts,$post_category) {

        if(is_array($post_category)) {
            $post_category = ['category__in' => $post_category];
        } else {
            $post_category = ['cat' => $post_category];
        }

        $args = array('posts_per_page' => $req_posts, 'offset' => 0, 'order' => 'DESC', 'orderby' => 'date');
        $args = array_merge($args,$post_category);
        return $post_datas = new WP_Query($args);
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
            <label for="<?php echo $this->get_field_id( 'post_title' ); ?>"><?php _e( 'セクションタイトル:' ); ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'post_title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'post_num' ); ?>"><?php _e( '表示件数:' ); ?></label>
            <input type="number" style="width: 60px;" type="number" min="0" class="widefat" id="<?php echo $this->get_field_id( 'post_num' ); ?>" name="<?php echo $this->get_field_name( 'post_num' ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'post_category_1' ); ?>"><?php _e( '表示したいカテゴリ1:' ); ?></label><br />
            <select size="3" id="<?php echo $this->get_field_id( 'post_category_1' ); ?>" name="<?php echo $this->get_field_name( 'post_category_1' ); ?>">
                <?php foreach($categories as $key => $obj) : ?>
                    <option value="<?php echo $obj->term_id; ?>"><?php echo $obj->name; ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'post_category_2' ); ?>"><?php _e( '表示したいカテゴリ2:' ); ?></label><br/>
            <select size="3" id="<?php echo $this->get_field_id( 'post_category_2' ); ?>" name="<?php echo $this->get_field_name( 'post_category_2' ); ?>">
                <?php foreach($categories as $key => $obj) : ?>
                    <option value="<?php echo $obj->term_id; ?>"><?php echo $obj->name; ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'post_category_3' ); ?>"><?php _e( '表示したいカテゴリ3:' ); ?></label><br/>
            <select size="3" id="<?php echo $this->get_field_id( 'post_category_3' ); ?>" name="<?php echo $this->get_field_name( 'post_category_3' ); ?>">
                <?php foreach($categories as $key => $obj) : ?>
                    <option value="<?php echo $obj->term_id; ?>"><?php echo $obj->name; ?></option>
                <?php endforeach; ?>
            </select>
        </p>
<!--        <p>-->
<!--            <label for="--><?php //echo $this->get_field_id( 'post_priority' ); ?><!--">--><?php //_e( '優先表示設定:' ); ?><!--</label><br/>-->
<!--            <select id="post_recent" multiple name="--><?php //echo $this->get_field_name( 'post_priority' ); ?><!--">-->
<!--                --><?php
//                while($post_datas->have_posts()) : $post_datas->the_post(); ?>
<!--                    --><?php //if(!empty(get_the_title())) :?>
<!--                    <option value="--><?php //echo get_the_id(); ?><!--">--><?php //echo get_the_title(); ?><!--</option>-->
<!--                    --><?php //endif; ?>
<!--                --><?php //endwhile; ?>
<!--            </select>-->
<!--        </p>-->
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

        filter_var($new_instance['title'],FILTER_SANITIZE_SPECIAL_CHARS);


        if(!filter_var($new_instance['post_category'],FILTER_VALIDATE_INT)&&!filter_var($new_instance['post_num'],FILTER_VALIDATE_INT)){
            return false;
        }

        return $new_instance;
    }

}
