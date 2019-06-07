
  <footer class="site-footer">
    <div class="container">

    <p>
      <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>
    </p>

    <p>© 2009-2019 CardPay. All rights reserved. CardPay, the logo and any associated brand names are CardPay trademarks. All other trademarks are property of their respective owners.</p>

    <nav class="site-nav-footer">
      <?php $args = array( 'theme_location' => 'footer' ); ?>
      <?php wp_nav_menu( $args ); ?>
    </nav>

    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
