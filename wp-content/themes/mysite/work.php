<?php
/*
Template Name: WORK
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<title>WORK：Masayuki Yasuhara ポートフォリオ</title>
<meta name="description" content="Masayuki Yasuhara ポートフォリオサイトです。">
<meta name="keywords" content="yasuhara,masayuki,ポートフォリオ">
<meta property="og:title" content="WORK：Masayuki Yasuhara ポートフォリオ" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:image" content="http://myasuhara.xsrv.jp/images/ogp.jpg" />
<meta property="og:site_name"  content="WORK：Masayuki Yasuhara ポートフォリオ" />
<meta property="og:description" content="Masayuki Yasuhara ポートフォリオサイトです。" />
<link rel="apple-touch-icon" href="/images/apple_a.jpg">
<link rel="shortcut icon" href="/images/favicon.ico">
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Oswald:wght@200&display=swap" rel="stylesheet">
</head>

<body>
  <div class="stars"></div>
  <div class="twinkling"></div>
  <div class="clouds"></div>
  <!--BlkHeader start-->
  <?php get_header(); ?>
  <!--BlkHeader end-->
  
  <!--BlkWrap start-->
  <div class="BlkWrap">
    <!--BlkContent start-->
    <div class="BlkContent">
      
      <!--BlkMain start-->
      <main class="BlkMain" style="background-image: url(/work/images/main.jpg);">
      </main>
      <!--BlkMain end-->
      
      <div class="BlkContent__inner">
        <h1>WORK</h1>
        <!-- Swiper START -->
        <div class="swiper-container">
					<div class="swiper-wrapper">
						<?php
              $news_posts = get_posts( array(
                'post_type' => 'works',
                'posts_per_page' => -1,
              ));
              if ( !empty( $news_posts ) ):
                foreach ( $news_posts as $post ):
                setup_postdata( $post );
            ?>
						<?php $value = get_post_meta($post->ID, 'cf_work_link', true);?>
						<a href="<?php the_field('cf_work_link'); ?>" class="swiper-slide" style="background-image: url(<?php the_field('cf_work_thumb'); ?>);" target="_blank">
							<div class="textWrap">
								<h2 class="title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>
						</a>
						<?php 
							endforeach;
							endif;
							wp_reset_postdata();
						?>
					</div>
        </div>
        <!-- Swiper END -->
        
      </div>
    </div>
    <!--BlkContent end-->
  </div>
  <!--BlkWrap end-->
  
  
  <?php get_footer(); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
</body>
</html>
