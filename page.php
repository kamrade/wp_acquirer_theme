<?php

  get_header();

?>

  <div class="site-content">
    <div class="container">

      <?php

        if (have_posts()):
          while (have_posts()) : the_post();
      ?>

        <article class="post page">
          <!-- TEMPORARY TURN OFF CHILDREN NAVIGATION -->
          <?php  // get_template_part('./template_parts/children_navigation'); ?>
          <h2 class="page-title"><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
        </article>

      <?php
          endwhile;

        else :
          echo '<p>No content found</p>';
        endif;

      ?>

    </div>
  </div>

<?php

  get_footer();

?>
