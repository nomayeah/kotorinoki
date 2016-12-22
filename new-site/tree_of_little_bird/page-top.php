<?php
/*
Template Name: page-top
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title('│', true, 'right'); bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body class="front">
<div id="fb-root"></div>
<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=355512168146901";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>

<header>
<div class="lang-area pc-view">
<div class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Dropdown <b class="caret"></b></a>
  <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
  <script>$('.dropdown-toggle').html($('header #qtranslate-chooser li.active').text() + ' <b class="caret"></b>');$('#qtranslate-chooser').addClass('dropdown-menu');</script>
</div></div>

<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logosample.png" alt=""></a></h1>

<?php $page_id = 408; $content = get_page($page_id); echo $content->post_content; ?>

<?php $page_id = 26; $content = get_page($page_id); echo $content->post_content; ?>

<nav class="top-nav">
<?php wp_nav_menu( array(
'theme_location'  =>'mainmenu',
'container'       =>'',
'menu_class'      =>'',
'items_wrap'      =>'<ul id="main-nav">%3$s</ul>'));
?>
</nav>

<div id="menu-btn" class="none"><span></span></div>
<nav class="sp-view">
  <?php $page_id = 415; $content = get_page($page_id); echo $content->post_content; ?>
  <nav class="sp-nav">
  <?php wp_nav_menu( array(
  'theme_location'  =>'mainmenu',
  'container'       =>'',
  'menu_class'      =>'',
  'items_wrap'      =>'<ul id="main-nav">%3$s</ul>'));
  ?>
  </nav>
  <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
</div>

</header>

<?php wp_head(); ?>

<main>
<!-- <section id="section-01"><?php $page_id = 24; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?></section> -->

<section id="section-02"><?php $page_id = 29; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?></section>

<section id="section-03"><?php $page_id = 31; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?></section>

<div class="fb-top-pc">
<div class="fb-page" data-href="https://www.facebook.com/kotorinoki00/" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kotorinoki00/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kotorinoki00/">ペンション ことりの樹</a></blockquote></div></div>
<div class="fb-top-sp">
<div class="fb-page" data-href="https://www.facebook.com/kotorinoki00/" data-width="300" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kotorinoki00/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kotorinoki00/">ペンション ことりの樹</a></blockquote></div></div>

<section id="section-04"><?php $page_id = 36; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?></section>

<aside style="display: none;"><?php dynamic_sidebar(); ?></aside>
</main>

<?php get_footer(); ?>
