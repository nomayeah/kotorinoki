<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php wp_title('│', true, 'right'); bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body class="article">

<header>
<div class="lang-area">
<div class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Dropdown <b class="caret"></b></a>
  <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
  <script>$('.dropdown-toggle').html($('header #qtranslate-chooser li.active').text() + ' <b class="caret"></b>');$('#qtranslate-chooser').addClass('dropdown-menu');</script>
</div></div>

<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logosample.png" alt=""></a></h1>

<div id="main-submit">予約する</div>
<div id="action-area" class="dn">
  <div class="action-title">ご予約について</div>
  <div class="action-text">ご予約はお電話、メール、じゃらん、楽天トラベルより受け付けております。<br>以下のリンクよりご予約ください。</div>
  <ul>
  <li><a href="#">楽天</a></li>
  <li><a href="#">じゃらん</a></li>
  </ul>
</div>

<nav>
  <?php wp_nav_menu( array(
    'theme_location'  =>'mainmenu',
    'container'       =>'',
    'menu_class'      =>'',
    'items_wrap'      =>'<ul id="main-nav">%3$s</ul>'));
  ?>
</nav>

<div id="menu-btn"><span></span></div>

</header>

<?php breadcrumb(); ?>

<?php wp_head(); ?>