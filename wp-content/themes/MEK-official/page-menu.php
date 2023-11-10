<!-- 固定ページ -->
<!-- page-〇〇.php -->
<!-- 〇〇＝固定ページ記述 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>まるふく お品書き</title>
</head>
<!-- ここからボディ -->
    <body>
        <!-- ここからheader -->
        <header class="header_01">
            <div class="header_01_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
            </div>
            <div class="header_01_nav">
                <ul class="header_01_nav_main">
                    <li><a href="">こだわり</a></li>
                    <li><a href="">お品書き</a></li>
                    <li><a href="">店舗案内</a></li>
                    <li><a href="">トップ</a></li>
                </ul>
            </div>
            <div class="header_01_reserve">
                <a href="">ご予約</a>
            </div>
        </header>
        <!-- ここからmain -->
        <main class="main_01 inner">
            <h1 class="main_01_title">お品書き</h1>
                <div class="main_01_txt inner">
                    <p>
                        お客様一人ひとりのご期待にお応えできるよう、細部にまでこだわり抜いたおもてなしを心がけております。<br>
                        初めてのご来店であろうと、長年にわたる常連様であろうと、鮨まるふくでは、お客様にとって忘れがたい体験を提供することをお約束いたします。<br>
                        ここには新しい発見と、感動があります。<br>
                        私たちと共に、時を経た真の美味しさを追求する旅を始めませんか。<br>
                        お客様のご予約を、心よりお待ちしております。
                    </p>
                    <h2 class="main_01_txt_title">おまかせコース　　　　22,000円（税込）</h2>
                        <p class="main_01_txt_description">
                            ※握りとつまみのお任せコース熟成鮨とお料理をお楽しみください<br>
                            ※広域なアレルギー、苦手食材がございます場合はご対応不可となりますのでご了承ください<br>
                            ※当日のご変更、キャンセルは100％コース料金のキャンセル料が発生しますのでご注意ください
                        </p>
                </div>

                <div class="main_01_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access.png" alt="">
                </div>
        </main>

    </body>
</html>