<!-- 投稿ページ情報 -->

<?php
/**
 * @package WordPress
 * @since 1.0.0
 */
get_header();
?> 
<div class="bl_single_post_wapper">

    
    <?php if(have_posts()): ?>
    <div class="bl_single_post_top">
        <div class="bl_single_post_top_left_box">
            <div class="bl_single_post_top_flex">
                <p class="bl_single_post_top_time">
                  <time datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time('Y.m.d'); ?>
                  </time>
                </p>
            </div>
            <h1 class="bl_single_post_top_title"><?php the_title(); ?></h1>
            <?php 
              $tags = get_the_tags();
              if ( $tags ) { echo '<ul class="bl_single_post_top_ul">';foreach ( $tags as $tag ) {echo '<li class="bl_single_post_top_li">'.$tag->name.'</li>';}echo '</ul>'; }
            ?>
        </div>
        <div class="bl_single_post_top_content">
            <?php while(have_posts()):the_post(); ?>
                <div class="single_content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>

</div>

<?php
get_footer();