<?php
/*
Template Name: ニュース詳細
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<title><?php the_title(); ?>：Masayuki Yasuhara ポートフォリオ</title>
<meta name="description" content="Masayuki Yasuhara ポートフォリオサイトです。">
<meta name="keywords" content="yasuhara,masayuki,ポートフォリオ">
<meta property="og:title" content="<?php the_title(); ?>：Masayuki Yasuhara ポートフォリオ" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:image" content="http://myasuhara.xsrv.jp/images/ogp.jpg" />
<meta property="og:site_name"  content="<?php the_title(); ?>：Masayuki Yasuhara ポートフォリオ" />
<meta property="og:description" content="Masayuki Yasuhara ポートフォリオサイトです。" />
<link rel="apple-touch-icon" href="/images/apple_a.jpg">
<link rel="shortcut icon" href="/images/favicon.ico">
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/style.css">
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
    <div class="BlkContent -details">
      
      <!--BlkMain start-->
      <main class="BlkMain" style="background-image: url(/images/details_main.jpg);">
      </main>
      <!--BlkMain end-->
      
      <div class="BlkContent__inner">
        <h1><?php the_title(); ?></h1>
				<div class="BlkContent__box">
					<?php if(have_posts()): while(have_posts()):the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
      </div>
      
    </div>
    <!--BlkContent end-->
  </div>
  <!--BlkWrap end-->
  
  <?php get_footer(); ?>
</body>
</html>
