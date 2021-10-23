<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<title>Masayuki Yasuhara ポートフォリオ</title>
<meta name="description" content="Masayuki Yasuhara ポートフォリオサイトです。">
<meta name="keywords" content="yasuhara,masayuki,ポートフォリオ">
<meta property="og:title" content="Masayuki Yasuhara ポートフォリオ" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:image" content="http://myasuhara.xsrv.jp/images/ogp.jpg" />
<meta property="og:site_name"  content="Masayuki Yasuhara ポートフォリオ" />
<meta name="description" content="Masayuki Yasuhara ポートフォリオサイトです。">
<link rel="apple-touch-icon" href="/images/apple_a.jpg">
<link rel="shortcut icon" href="/images/favicon.ico">
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Oswald:wght@200&display=swap" rel="stylesheet">
</head>

<body class="top">
  <div class="stars"></div>
  <div class="twinkling"></div>
  <div class="clouds"></div>
  <!--BlkHeader start-->
  
  <!--BlkHeader end-->
  <?php get_header(); ?>
  <!--BlkWrap start-->
  <div class="BlkWrap">
    <!--BlkContent start-->
    <div class="BlkContent">
      <div class="BlkContent__inner">
        <h1 class="glitch" data-text="Masayuki Yasuhara"><span class="first">M</span>asayuki <span class="first">Y</span>asuhara<span class="katagaki">Frontend Engineer</span></h1>
        <section class="BlkNews">
          <ul>
						<?php
              $news_posts = get_posts( array(
                'post_type' => 'news',
                'posts_per_page' => -1,
              ));
              if ( !empty( $news_posts ) ):
                foreach ( $news_posts as $post ):
                setup_postdata( $post );
            ?>
            <li><a href="<?php the_permalink(); ?>"><time><span>→</span><? echo get_the_date(); ?>　</time><?php the_title(); ?></a></li>
						<?php 
							endforeach;
							endif;
							wp_reset_postdata();
						?>
          </ul>
        </section>
      </div>
      
      <!--BlkNav start-->
      <?php get_sidebar(); ?>
      <!--BlkNav end-->
      
    </div>
    <!--BlkContent end-->
  </div>
  <!--BlkWrap end-->
  
  <?php get_footer(); ?>
</body>
</html>