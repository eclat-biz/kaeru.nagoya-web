<?php

//---------------------------------------------------------------------------
//	セキュリティ対策
//---------------------------------------------------------------------------
remove_action('wp_head','wp_generator'); //	head内のWordpressバージョンを隠す
remove_action('wp_head', 'rsd_link'); // head内の編集用アドレスを隠す

//---------------------------------------------------------------------------
//	HTML5を許可
//---------------------------------------------------------------------------
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

//---------------------------------------------------------------------------
//	アイキャッチ画像を有効化
//---------------------------------------------------------------------------
add_theme_support( 'post-thumbnails');

//---------------------------------------------------------------------------
//	titleタグ
//---------------------------------------------------------------------------
add_theme_support('title-tag');

//---------------------------------------------------------------------------
//	メインクエリ操作
//---------------------------------------------------------------------------
function my_post_queries( $wp_query ) {
	if ( is_admin() || ! $wp_query->is_main_query())
	return;
	if ( $wp_query->is_post_type_archive('news') ){
		$wp_query->set('posts_per_page', 20);
		return;
	}
	if ( $wp_query->is_post_type_archive('blog')){
		$wp_query->set('posts_per_page', 20);
		return;
	}
}
add_action( 'pre_get_posts', 'my_post_queries' );


//---------------------------------------------------------------------------
//	アーカイブの件数表示
//---------------------------------------------------------------------------
function search_result_count() {
  global $wp_query;

  $paged = get_query_var( 'paged' ) - 1;
  $ppp   = get_query_var( 'posts_per_page' );
  $count = $total = $wp_query->post_count;
  $from  = 0;
  if ( 0 < $ppp ) {
    $total = $wp_query->found_posts;
    if ( 0 < $paged )
      $from  = $paged * $ppp;
  }
  printf(
    '<p class="archive_box_search_result"><strong class="number">%1$s</strong>件の検索結果がみつかりました。<strong class="number">%2$s%3$s</strong>件目を表示しています。</p>',
    $total,
    ( 1 < $count ? ($from + 1 . '?') : '' ),
    ($from + $count )
  );
}

//---------------------------------------------------------------------------
//	カスタム投稿タイプ作成
//---------------------------------------------------------------------------
add_action('init', 'create_blog_post_type');
function create_blog_post_type(){
	$labels = array(
		'name' => "Blog",
		'singular_name' => "Blog",
		'add_new' => "Blogを追加",
		'add_new_item' => "Blogを追加",
		'edit_item' => "Blogを編集",
		'new_item' => "新しいBlog",
		'all_items' => "すべてのBlog",
		'view_item' => "このBlogを表示",
		'search_items' => "Blogを検索",
		'not_found' =>  "Blogはありません",
		'not_found_in_trash' => "ゴミ箱にBlogはありません"
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => true
	);
	register_post_type('blog',$args);
	$labels = array(
		'name' => "ブログカテゴリ",
		'singular_name'  => "ブログカテゴリ",
		'search_items' => "ブログカテゴリを検索",
		'all_items' => "すべてのブログカテゴリ",
		'parent_item' => "親のブログカテゴリ",
		'parent_item_colon' => "親のブログカテゴリ",
		'edit_item' => "ブログカテゴリの編集",
		'update_item' => "更新",
		'add_new_item' => "ブログカテゴリを追加",
		'new_item_name'  => "新しいブログカテゴリ",
		'menu_name' => "ブログカテゴリ"
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true
	);
	register_taxonomy('blog_category','blog',$args);
}
add_action('init', 'create_news_post_type');
function create_news_post_type(){
	$labels = array(
		'name' => "News",
		'singular_name' => "News",
		'add_new' => "Newsを追加",
		'add_new_item' => "Newsを追加",
		'edit_item' => "Newsを編集",
		'new_item' => "新しいNews",
		'all_items' => "すべてのNews",
		'view_item' => "このNewsを表示",
		'search_items' => "Newsを検索",
		'not_found' =>  "Newsはありません",
		'not_found_in_trash' => "ゴミ箱にNewsはありません"
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => true
	);
	register_post_type('news',$args);
}
//---------------------------------------------------------------------------
//	body_classに固定ページのルートのスラッグまたはカスタム投稿タイプを追加する
//--------------------------------------------------------------------------
function add_page_root_body_class( $classes ) {
	if ( is_singular() ) {
		$post_type = get_query_var( 'post_type' );
		if ( is_page() ) {
			$post_type = 'page';
		}
		if ( $post_type && is_post_type_hierarchical( $post_type ) ) {
			global $post;
			if ( $post->ancestors ) {
				$root = $post->ancestors[count($post->ancestors) - 1];
				$root_post = get_post( $root );
				$classes[] = esc_attr( $root_post->post_name );
			} else {
				$classes[] = esc_attr( $post->post_name );
			}
		}
	}
	if('blog' == get_post_type()){
		$classes[] = 'blog';
	}
	if('photo' == get_post_type()){
		$classes[] = 'photo';
	}
	return $classes;
}
add_filter( 'body_class', 'add_page_root_body_class' );

//---------------------------------------------------------------------------
//	ページ送り
//---------------------------------------------------------------------------
function pagination() {
	global $wp_rewrite;
	$paginate_base = get_pagenum_link(1);
	$paginate_format = '';
	$paginate_base = add_query_arg('paged', '%#%');
	global $paged;
 	global $wp_query;
	echo '<nav class="pagination cf">' . paginate_links( array(
		'base' => $paginate_base,
		'format' => $paginate_format,
		'total' => $wp_query->max_num_pages,
		'mid_size' => 4,
		'current' => ($paged ? $paged : 1),
		'prev_text' => '',
		'next_text' => '',
	)). '</nav>';
}



//---------------------------------------------------------------------------
//	管理画面の項目表示
//---------------------------------------------------------------------------

// 管理バー常に非表示
add_filter( 'show_admin_bar', '__return_false' );

// メニュー項目非表示
function remove_menus() {
	remove_menu_page('edit.php'); // 投稿
	remove_menu_page( 'edit-comments.php' ); // コメント
}
add_action('admin_menu', 'remove_menus');

//---------------------------------------------------------------------------
//	スマートフォン判定
//---------------------------------------------------------------------------
function is_mobile() {
	$match = 0;
	$ua = array(
		'iPhone', // iPhone
		'iPod', // iPod touch
		'iPad', // iPod touch
		'Android', // 1.5+ Android ***
		'Windows.*Phone', // *** Windows Phone
		'dream', // Pre 1.5 Android
		'CUPCAKE', // 1.5+ Android
		'BlackBerry', // BlackBerry
		'webOS', // Palm Pre Experimental
		'incognito', // Other iPhone browser
		'webmate' // Other iPhone browser
	);
	$pattern = '/' . implode( '|', $ua ) . '/i';
	$match   = preg_match( $pattern, $_SERVER['HTTP_USER_AGENT'] );
	if ( $match === 1 ) {
		return TRUE;
	} else {
		return FALSE;
	}
}
?>