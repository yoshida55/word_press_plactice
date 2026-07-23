<?php
// CSSとJSを読み込む設定
function mystore_files()
{
    // CSS（reset → style → index の順で読む）
    wp_enqueue_style('mystore-reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('mystore-main', get_stylesheet_uri()); // テーマ直下の style.css
    wp_enqueue_style('mystore-index', get_template_directory_uri() . '/css/index.css');

    // JS（最後の true = </body>直前で読む）
    wp_enqueue_script('mystore-index', get_template_directory_uri() . '/js/index.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'mystore_files');


// テーマの初期設定
function mystore_setup()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mystore_setup');


add_theme_support( 'post-thumbnails' );
