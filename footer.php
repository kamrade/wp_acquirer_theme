
  <footer class="site-footer">
    <div class="container">

    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

    <nav class="site-nav">
      <?php $args = array( 'theme_location' => 'footer' ); ?>
      <?php wp_nav_menu( $args ); ?>
    </nav>

    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
