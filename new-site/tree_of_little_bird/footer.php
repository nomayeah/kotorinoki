
 <footer class="footer">

  <?php $page_id = 387; $page = get_post( $page_id ); echo apply_filters('the_content', $page->post_content); ?>
  <script>$('.footer__lang .language-chooser').addClass('list-inline');</script>

</footer>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/base.js"></script>

<?php wp_footer(); ?>
</body>
</html>