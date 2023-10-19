<?php
function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');
?>

<?php
function my_scripts_method() {
    // 読み込んだjqueryを優先する
    add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
    function dequeue_jquery_migrate( $scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
    }
    }
    // js読み込み
    wp_enqueue_script(
        'custom_script',
        get_template_directory_uri() . '/assets/js/mek-001.js',
        );
    }
    add_action('wp_enqueue_scripts', 'my_scripts_method');
    // css 読み込み
    function my_script_init() { // WordPressに含まれているjquery.jsを読み込まない
        wp_enqueue_style( 'app-css', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.1' );
    }
    add_action('wp_enqueue_scripts', 'my_script_init');
?>

<?php
// WPupload 画像サイズ
@ini_set( 'upload_max_size' , '100M' );

@ini_set( 'post_max_size', '100M');

@ini_set( 'max_execution_time', '100' );
?>