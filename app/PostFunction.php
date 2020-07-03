<?php

namespace App;

class PostFunction  {

    public function __construct() {
        add_action('admin_menu',array(&$this, 'add_seo'),10,1);
    }

    public static function add_seo() {

        add_meta_box('seo_setting', 'SEOタイトル',
            function() {
                global $post;
                echo '<input type="text" name="seo_title" value="' . get_post_meta($post->ID, 'seo_title', true) . '" size="100" />';
        }, 'post', 'normal');

    }



}