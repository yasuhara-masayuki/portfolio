<?php
/*
Template Name: PROFILE
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<title>PROFILE：Masayuki Yasuhara ポートフォリオ</title>
<meta name="description" content="Masayuki Yasuhara ポートフォリオサイトです。">
<meta name="keywords" content="yasuhara,masayuki,ポートフォリオ">
<meta property="og:title" content="PROFILE：Masayuki Yasuhara ポートフォリオ" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:image" content="http://myasuhara.xsrv.jp/images/ogp.jpg" />
<meta property="og:site_name"  content="PROFILE：Masayuki Yasuhara ポートフォリオ" />
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
    <div class="BlkContent">
      
      <!--BlkMain start-->
      <main class="BlkMain -pc" style="background-image: url(/profile/images/main.jpg);">
      </main>
			<main class="BlkMain -res" style="background-image: url(/profile/images/main_res.jpg);">
      </main>
      <!--BlkMain end-->
      
      <div class="BlkContent__inner">
        <h1>PROFILE</h1>
				<div class="BlkProfile">
					<p>安原 雅之（やすはら まさゆき）<br>
						1992年生まれ、フロントエンドエンジニア。</p>
					<p>知人の紹介もありながら、WEBサイト制作に興味をもち、2017年に職業訓練校に通い、<br class="pc">
						HTML、CSS、JavaScript、PHP、WordPressなどの基礎を学習。<br class="pc">
					約半年間の訓練をおえ、現在フロントエンドに携わり、3年目。今後もいろんな言語に挑戦し続けます！！<br>
          現在、Ruby（Rails）、Vue.js、PHPを学習中。</p>
					<h2>習得スキル・ツール</h2>
					<p>HTML5/Bootstrap(3・4)、CSS3/SCSS・SASS<br>
						JavaScript(jQuery)、WordPress<br>
          PhotoShop・illustrator・Fireworks<br>
          Visual Studio Code・Dreamweaver</p>
				</div>
      </div>
      
    </div>
    <!--BlkContent end-->
  </div>
  <!--BlkWrap end-->
  
  <?php get_footer(); ?>
</body>
</html>
