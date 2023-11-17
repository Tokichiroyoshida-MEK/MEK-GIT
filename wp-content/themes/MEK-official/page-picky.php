<!-- 固定ページ -->
<!-- page-〇〇.php -->
<!-- 〇〇＝固定ページ記述 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>まるふく アクセス</title>
</head>
<!-- ここからボディ -->
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
        <main class="main_01 inner">
            <h1 class="main_01_title">店舗案内</h1>
                <div class="main_01_txt inner_01">
                    <h2 class="main_01_txt_title">住所</h2>
                        <p class="main_01_txt_description">
                            東京都杉並区西荻窪3-17-4 第五ＰＲビル 1F<br>
                            050-5589-9745
                        </p>
                    <h2 class="main_01_txt_title">営業時間</h2>
                        <p class="main_01_txt_description">
                            一部 18：00～20：15 <br>
                            二部 20：30～23：00<br>
                            土曜、祝日0部 15：30～17：45<br>
                            ＊お食事は一斉スタートとなります
                        </p>
                    <h2 class="main_01_txt_title">定休日</h2>
                        <p class="main_01_txt_description">
                            日曜定休 月曜祝日の場合、日曜営業で月（祝）はお休みです
                        </p>
                    <h2 class="main_01_txt_title">支払い方法</h2>
                        <p class="main_01_txt_description">
                            現金、カード可（VISA、Master、AMEX、JCB、Diners）、<br>
                            QRコード決済可（PayPay）
                        </p>
                </div>

                <div class="main_01_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access.png" alt="">
                </div>
        </main>
    </body>
    <?php get_footer();?>
</html>