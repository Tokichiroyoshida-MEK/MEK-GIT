<!-- 固定ページ -->
<!-- page-〇〇.php -->
<!-- 〇〇＝固定ページ記述 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <title>まるふく お品書き</title>
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
        <main class="main_01 inner" id="menu">
            <h1 class="main_01_title">お品書き</h1>
        <!-- ここからslider -->
                <ul class="main_01_txt slide_wrapper inner_02">
                    <li class="slider">
                        <h2 class="food_title">おまかせコース<br>22,000円（税込）</h2>
                            <p class="food_title_txt">
                            四季折々の走りや旬にこだわる<br>新鮮な素材を全国各地より厳選。<br>
                            丁寧に仕込み約1~4週間熟成させることで、<br>
                            魚が持つ旨味を最大限に引き出しました。<br>
                            つまみと握りのおまかせコースを、<br>
                            利き酒師こだわりのお酒と共にお楽しみください。
                            </p>
                        </div>
                    </li>

                    <li class="slider">
                        <h2 class="food_title">お飲み物</h2>
                            <p class="food_title_txt">
                                利き酒師が選んだこだわりの、<br>
                                ・ビール・日本酒・焼酎・梅酒<br>
                                ・ウィスキー・ワイン・シャンパン<br>
                                をご用意しております。
                            </p>
                    </li>
                </ul>
<div class="slide_description_wrapper">
                <p class="slide_description inner_02">
                    ※広域なアレルギー、苦手食材がございます場合はご対応不可となりますのでご了承ください<br>
                    ※中学生以上のお子様のご来店は可能でございます。お子様用メニューのご用意はございません<br>
                    ※当日のご変更、キャンセルは100％コース料金のキャンセル料が発生しますのでご注意ください<br>
                    ※ドレスコードはございませんがタンクトップ、短パン、サンダル履き等の軽装、<br>
                    また、香水・整髪料等の強い香りをまとってのご来店はご遠慮いただけますようお願いします。
                </p>
                </div>
                <div class="reserve_btn_wrapper inner_01">
                    <div class="reserve_btn">
                        <a href="https://www.tablecheck.com/ja/shops/sushi-marufuku/reserve">
                            ご予約はこちら
                        </a>
                    </div>
                </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
	$('.slide_wrapper').slick({
		autoplay: true,
		dots: true,
        fade: true,
	});
</script>
    </body>
    <?php get_footer();?>
</html>