<?php 
function it_designer_scripts() {
	//wpのjquery停止
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery','//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), NULL, true );
  // jquery読み込み -----
   wp_enqueue_script('slick.min', get_stylesheet_directory_uri().'/static/slick/slick.min.js',
   array( 'jquery' ),
   '1.8.1', true
   );
}
add_action( 'wp_enqueue_scripts', 'it_designer_scripts');


function it_designer_setup() {
	//nav
	register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
	register_nav_menu( 'header-sp-nav',  ' ヘッダーspナビゲーション ' );
	register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );
	//アイキャッチ画像を使う
	add_theme_support( 'post-thumbnails' );
	//アイキャッチ画像のサイズを設定
	set_post_thumbnail_size(300,300);
	add_image_size('s_thumbnail', 200, 150 ,true );
 	add_image_size( 'm_thumbnail', 240, 180, true );
 	add_image_size('l_thumbnail', 650, 400, true );
}
add_action( 'after_setup_theme', 'it_designer_setup' );


function widgets_area() {
	//wiget
	register_sidebar(array(
	    'name'=>'サーチサイドバー',
	    'id' => 'side-widget-search',
	    'description'   => '管理画面に表示するウィジェットを追加します。',
	    'before_widget'=>'<section id="%1$s" class="widget %2$s">',
	    'after_widget'=>'</section>',
	    'before_title' => '<p class="widget-title">',
	    'after_title' => '</p>'
	    ));
	//wiget-category
  register_sidebar(array(
      'name'=>'カテゴリーサイドバー',
      'id' => 'side-widget-category',
      'description'   => '管理画面に表示するウィジェットを追加します。',
      'before_widget'=>'<section id="%1$s" class="widget %2$s">',
      'after_widget'=>'</section>',
      'before_title' => '<p class="widget-title">',
      'after_title' => '</p>'
      ));
  //wiget-archive
  register_sidebar(array(
      'name'=>'アーカイブサイドバー',
      'id' => 'side-widget-archive',
      'description'   => '管理画面に表示するウィジェットを追加します。',
      'before_widget'=>'<section id="%1$s" class="widget %2$s">',
      'after_widget'=>'</section>',
      'before_title' => '<p class="widget-title">',
      'after_title' => '</p>'
      ));
}
add_action( 'widgets_init', 'widgets_area' );


function add_favicon() {
	// ファビコン
  echo '<link rel="shortcut icon" href=" ' . get_template_directory_uri() . '/static/favicon.ico" type="image/x-icon" />' . "\n";
}
add_action('wp_head', 'add_favicon');


function remove_widget_title_all( $widget_title ) {
    return;
}
add_filter( 'widget_title', 'remove_widget_title_all' );


function my_posy_search($search) {
  if(is_search()) {
    $search .= " AND post_type = 'post'";
  }
  return $search;
}
add_filter('posts_search', 'my_posy_search');
?>