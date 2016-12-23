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

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=355512168146901";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>

  <header class="header">
    <div class="container">

      <h1 class="header__logo"><a href="<?php echo home_url('/'); ?>"><img class="logo-image" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""></a></h1>

      <div class="header__control">
        <div class="desktop-view">
          <div class="flex flex-center">
            <div class="header__lang">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Dropdown <b class="caret"></b></a>
                <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
                <div class="qtranxs_widget_end"></div>
                <script>$('.dropdown-toggle').html($('header #qtranslate-chooser li.active').text() + ' <b class="caret"></b>');$('#qtranslate-chooser').addClass('dropdown-menu');</script>
              </div>
            </div>
            <?php $page_id = 476; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?>
          </div>
        </div>
        <div id="js-mobile-menu-button" class="mobile-menu-button tablet-view">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </div>
      </div>
    </div>
  </header>

  <?php
    $page_id = 26;
    $content = get_page($page_id);
    echo $content->post_content;
  ?>
<nav class="navigation tablet-view">
  <div class="container">
    <?php wp_nav_menu( array(
    'theme_location'  =>'mainmenu',
    'container'       =>'',
    'menu_class'      =>'',
    'items_wrap'      =>'<ul id="main-nav">%3$s</ul>'));
    ?>
    </div>
</nav>

  <nav id="js-mobile-menu" class="mobile-menu">
    <div class="container">
      <h3>ご予約について</h3>
      <p>ご予約はお電話、メール、じゃらん、楽天トラベルより受け付けております。<br>以下のリンクよりご予約ください。</p>
      <ul class="list-inline">
        <li><a href="#"><img src="http://kotorinoki.sakura.ne.jp/wp/wp-content/themes/tree_of_little_bird/img/reservation/rakuten.png" alt="楽天" width="64" height="64"></a></li>
        <li><a href="#"><img src="http://kotorinoki.sakura.ne.jp/wp/wp-content/themes/tree_of_little_bird/img/reservation/jaran.png" alt="じゃらん" width="64" height="64"></a></li>
      </ul>
      <nav class="link-list">
        <ul id="main-nav">
          <li><a href="http://kotorinoki.sakura.ne.jp/wp/%e9%a4%a8%e5%86%85%e6%a1%88%e5%86%85/">館内案内</a></li>
          <li><a href="http://kotorinoki.sakura.ne.jp/wp/%e3%81%94%e6%a1%88%e5%86%85/">レジャー</a></li>
          <li><a href="http://kotorinoki.sakura.ne.jp/wp/%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9/">アクセス</a></li>
          <li><a href="http://kotorinoki.sakura.ne.jp/wp/%e9%87%91%e9%a1%8d/">料金・ご予約</a></li>
          <li><a href="http://kotorinoki.sakura.ne.jp/wp/%e3%83%96%e3%83%ad%e3%82%b0/">ブログ</a></li>
          <li><a href="http://kotorinoki.sakura.ne.jp/wp/%e5%95%8f%e3%81%84%e5%90%88%e3%82%8f%e3%81%9b/">問い合わせ</a></li>
        </ul>
      </nav>
      <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
    </div>
  </nav>

  <?php wp_head(); ?>

  <main class="main">
    <section id="section-02"><?php $page_id = 29; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?></section>

    <section id="section-03"><?php $page_id = 31; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?></section>
  </main><!--/.container-->

  <div class="fb-top-pc">
    <div class="fb-page" data-href="https://www.facebook.com/kotorinoki00/" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kotorinoki00/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kotorinoki00/">ペンション ことりの樹</a></blockquote></div></div>
  <div class="fb-top-sp">
    <div class="fb-page" data-href="https://www.facebook.com/kotorinoki00/" data-width="300" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kotorinoki00/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kotorinoki00/">ペンション ことりの樹</a></blockquote></div></div>

<?php $page_id = 493; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?>

<?php get_footer(); ?>
