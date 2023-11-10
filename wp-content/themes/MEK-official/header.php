<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- 文字エンコーディング -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <!-- ブラウザ最新状態 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 画面情報 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta name=MouthEarKing,プロモーション,クリエイティブ>
    <?php
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
    ?>
    <title class="title_color">まるふく</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
<!-- ここにヘッダー記述 -->
<header>
    <header class="header">
        <div class="header_kv">
            <h1 class="header_kv_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
            </h1>
        </div>
        <div class="header_kv_text">
            <h2 class="header_kv_text_txt">温かみと高級感が<br>共存する鮨の宿</h2>
        </div>
    </header>
</header>