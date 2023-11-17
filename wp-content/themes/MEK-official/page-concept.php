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
                    <p class="main_01_txt_sub">
                        「鮨まるふく」のこだわりは、<br>
                        単に熟成鮨を提供することに留まりません。<br>
                        <br>
                        私たちは、食材一つ一つに深い敬意を払い、<br>
                        それぞれが持つポテンシャルを最大限に引き出すために、<br>
                        独自の乾燥と真空技術を駆使しています。この熟成プロセスを<br>
                        通じて、素材の真の味わいが花開きます。<br>
                        <br>
                        私たちの熟成鮨は、<br>
                        江戸前鮨の伝統的な美味しさと、革新的な味の探求を融合<br>
                        させた、まさに時代を超えた逸品です。<br>
                        <br>
                        熟成には、無数の時間と試行錯誤が必要です。<br>
                        <br>
                        私たちはその全てを惜しまず、一貫の鮨が最高の状態で<br>
                        お客様のもとへと届くよう、日々精進しております。<br>
                        <br>
                        高級感あふれる空間で、大将と奥様の温かくも洗練された<br>
                        接客が、まるふくの鮨を一層引き立てます。<br>
                        <br>
                        私たちの熟成鮨を味わいながら、心地良い会話をお楽しみ<br>
                        いただくことで、食の体験はさらに豊かなものとなるでしょう。
                    </p>
                </div>

                    <h1 class="main_01_title interview">インタビュー</h1>
                <div class="main_01_txt inner_01">
                    <p class="main_01_txt_sub">
                    </p>
                </div>

                <div class="main_01_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept.png" alt="">
                </div>
        </main>




</body>
<?php get_footer();?>
</html>