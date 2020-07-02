<?php
defined( 'ABSPATH' ) || die();

/**
* Post Type
*/
//require_once(dirname(__FILE__) . '/hooks/post-type.php');
//$post_type = new PostTypePostType1();
//
//// Create Post type
//add_action('init', array($post_type, 'create_post_type'), 10);

// 以下略


/**
* Category
*/
//require_once(dirname(__FILE__) . '/hooks/category.php');
//$category = new CategoryPostType1();
//
//// Create Post type
//add_action('init', array($category, 'create_taxonomy'), 10);

// 以下略


/**
* Blocks
*/
//require_once(dirname(__FILE__) . '/hooks/blocks.php');
//$blocks = new BlocksPostType1();
//
//// Add Costom Block Category
//add_filter('block_categories', array($blocks, 'add_custom_block_category'), 10, 2);
//
//// Allowed Block
//add_filter('allowed_block_types', array($blocks, 'custom_allowed_block_types'), 10, 2);
//
//// Register Meta Field
//add_action('init', array($blocks, 'register_meta_field'));