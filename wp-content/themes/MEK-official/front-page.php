<!-- トップページ情報 -->
<?php get_header ();?>



<main class="main">
    <section class="top inner">
        <div class="top_inner_contents">
            <div class="top_inner_contents_text">
                <p class="top_inner_contents_text_txt">
                    いらっしゃいませ、「鮨まるふく」へようこそ。<br>
                    当店は、熟成鮨の伝統を守りながら、新たな美味しさを探究する場所です。<br>
                    伝統の江戸前鮨の技術と、革新的な熟成法が見事に融合し、<br>
                    私たち独自の鮨を生み出しています。<br>
                    一貫一貫に込められた職人の技と心。<br>
                    それがまるふくの鮨がお客様に愛され続ける理由です。
                </p>
                <p class="top_inner_contents_text_txt">
                    当店では、大将の深い知識と経験、奥様の心温まるおもてなしが、<br>
                    皆様をお迎えします。当店の空間は、高級感を保ちつつ、どこか懐かしさと<br>
                    温もりを感じることができるようにデザインされています。<br>
                    お客様が日々の忙しさを忘れ、穏やかな時間をお過ごしいただけるよう、<br>
                    細やかな配慮を行っております。
                </p>
                <p class="top_inner_contents_text_txt">
                    私たちは、一人ひとりのお客様との出会いを大切にし、皆様がまた訪れたい<br>
                    と思っていただけるような時間を創り上げたいと願っています。<br>
                    どうぞ、当店でのひと時をごゆっくりとお楽しみください。
            </div>

            <div class="top_inner_contents_nav">
                <ul class="top_inner_contents_nav_content">
                    <li class="top_inner_contents_nav_item">
                        <p class="p-button">
                            <a href="#">ご挨拶を見る</a>
                        </p>
                    </li>
                    <li class="top_inner_contents_nav_item">
                        <p class="p-button">
                            <a href="#">こだわりを見る</a>
                        </p>
                    </li>
                    <li class="top_inner_contents_nav_item">
                        <p class="p-button">
                            <a href="#">店舗案内を見る</a>
                        </p>
                    </li>
                    <li class="top_inner_contents_nav_item">
                        <p class="p-button">
                            <a href="">ご予約を見る</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

            <div class="sidebar">
                <nav class="top_kv_nav">
                    <ul class="top_kv_nav_main">
                        <li><a href="#about">ご挨拶</a></li>
                        <li><a href="concept">こだわり</a></li>
                        <li><a href="concept">店舗案内</a></li>
                    </ul>
                </nav>
                <div class="top_kv_sub">
                    <p class="top_kv_text">
                        <span><a href="">ご予約</a></span>
                    </p>
                    <p class="top_kv_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="" height="24px" width="24px">
                    </p>
                </div>
            </div>
</main>



<?php get_footer();