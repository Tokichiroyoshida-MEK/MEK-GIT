<!-- 固定ページ -->
<!-- page-〇〇.php -->
<!-- 〇〇＝固定ページ記述 -->


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>まるふく こだわり</title>
</head>


<?php get_header ();?>
<body>

<!-- ここからheader -->
<header class="header_01">
            <div class="header_01_wrapper">
                <div class="header_01_logo">
                <a href="<?php echo esc_url( home_url( '//' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="header_01_nav">
                    <ul class="header_01_nav_main">
                        <li><a href="<?php echo esc_url( home_url( '/concept/' ) ); ?>">こだわり</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">お品書き</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/picky/' ) ); ?>">店舗案内</a></li>
                        <li><a href="<?php echo esc_url( home_url( '//' ) ); ?>">トップ</a></li>
                    </ul>
                </div>
                <div class="header_01_reserve">
                    <a href="https://www.tablecheck.com/ja/shops/sushi-marufuku/reserve">ご予約</a>
                </div>
            </div>
        </header>

        <!-- ここからmain -->
        <main class="main_01 inner" id="menu">
            <h1 class="main_01_title">こだわり</h1>
                <div class="main_01_txt inner_01">
                    <h2 class="main_01_txt_title">一貫一貫に「技」と「心」を込めて。</h2>
                        <p class="main_01_txt_sub">
                        現在、日本には20,000店以上のお鮨屋が存在しており、飲食店という大きなカテゴリーにすると全国でなんと700,000店舗もあるとのことです。そんな中、当ホームページを閲覧していただき感謝しております。
鮨 まるふくは、お客様一人ひとりのご期待にお応えできるよう、 細部にまでこだわり抜いたおもてなしを心がけております。
「お客様に笑顔を届けたい。」
私たちは、一人ひとりのお客様との出会いを大切にし、皆様がまた訪れたいと思っていただけるような時間を創れるように日々精進しております。
食材の持つポテンシャルを最大限に引き出すたに無数の時間と試行錯誤をして辿り着いた、独自の乾燥と真空技術を駆使した熟成鮨をご堪能ください。
利き酒師こだわりのお酒と共に、心地良い会話をお楽しみいただくことで、食の体験はさらに豊かなものとなるでしょう。
どうぞ、当店でのひと時をごゆっくりとお楽しみください。
                        </p>
<p class="main_01_txt_name">
<span>鮨 まるふく</span><br>
大将   伊佐山 豊<br>
女将   伊佐山 まどか
</p>
                </div>
        </main>
</body>
<?php get_footer();?>
</html>