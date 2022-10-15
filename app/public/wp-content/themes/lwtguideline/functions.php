<?php
function remove_default_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 3.2, true);
        wp_enqueue_script('popper_js', get_template_directory_uri() . '/styles/bootstrap4/popper.js', array(), 4.0, true);
        wp_enqueue_script('bootstrap4_js', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js', array(), 4.0, true);
    }
}


add_action('wp_enqueue_scripts', 'remove_default_jquery');
add_theme_support('post-thumbnails');

function add_files(){
  // リセットCSS
  wp_enqueue_style('reset-style', 'https://unpkg.com/destyle.css@2.0.2/destyle.css');
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');
  // メインのCSSファイル
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','add_files');

function theme_setup(){
  //titleタグ
  add_theme_support('title-tag');
  //メニュー
  register_nav_menus (
    array(
      'main-menu'=>'メインメニュー',
    )
  );
}
add_action('after_setup_theme','theme_setup');

function get_thumb_img($size = 'full') {
  
  $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得
  
  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得
  
  $thumb_src = $thumb_img[0];    // 画像のurlだけ取得
  
  $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）

  $thumbnail = 'thumbnail';

  return '<img src="'.$thumb_src.'" alt="'.$thumb_alt.'" class="'.$thumbnail.'">';
}
