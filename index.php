<?php

  get_header();

?>

  <div class="site-content">
    <div class="container">

      <?php

        if (have_posts()):
          while (have_posts()) : the_post();

            get_template_part('./template_parts/post_content');

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
