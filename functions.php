<?php

// 基本設定
function mytheme_setup(){
  // ページのタイトル出力
  add_theme_support('title-tag');

  // HTML5対応
  add_theme_support('html5',array('style','script'));

  // アイキャッチ画像
  add_theme_support('post-thumbnails');

  // ナビゲーションメニュー
  register_nav_menus( array(
    'primary' => 'メイン',
  ) );

  // 編集画面用のcss(グーテンベルグにcssを適用)
  add_theme_support('editor-styles');
  add_editor_style('editor-style.css');

  //グーテンベルク由来のCSS(theme.min.css)
  add_theme_support('wp-block-styles');

  //埋め込みコンテンツのレスポンシブ化
  add_theme_support('responsive-embeds');

}
add_action('after_setup_theme','mytheme_setup');

// ウィジェット
function mytheme_widgets(){

  register_sidebar( array(
    'id' => 'sidebar-1',
    'name' => 'サイドメニュー',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
  ));
}
add_action('widgets_init', 'mytheme_widgets');

// CSS
function mytheme_enqueue(){
  
  //font awesome
  wp_enqueue_style('mytheme-fontawesome','https://use.fontawesome.com/releases/v5.15.1/css/all.css', array(), null);

  // google fonts
  wp_enqueue_style('mytheme-googlefonts','https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400;900', array(), null);

  // テーマのCSS
  wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(),
  filemtime(get_template_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts' , 'mytheme_enqueue');

//fontawesome の属性
function mytheme_sri($html,$handle){
  if($handle==='mytheme-fontawesome'){
    return str_replace(
      '/>',
      'integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"' . '/>',
      $html
    );
  }
  return $html;
}
add_filter('style_loader_tag' , 'mytheme_sri' , 10 ,2);


function register_my_scripts() {
  wp_enqueue_script(
    'base-scripts',
    get_template_directory_uri() . '/js/scripts.js',
    array( 'jquery' ),
    filemtime( get_template_directory() . '/js/scripts.js'),
    TRUE
    );
  }
add_action('wp_enqueue_scripts', 'register_my_scripts');


// 抜粋文字数
function twpp_change_excerpt_length( $length ) {
  return 50; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

//その他
function count_category($cat_id){
  $thisCat = get_category( $cat_id );
  return $thisCat->count;
}

function get_thumnail_no($seconds){
  $tmp = mb_substr($seconds,1,1);
  if($tmp > 5){
    $tmp -= 6;
  }
  return $tmp;
}

function get_header_navlink($str){
  if(is_front_page() ){
    return '#' . $str;
  } else{
    return '/#' . $str;
  }
}