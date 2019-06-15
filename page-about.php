<?php

  get_header();

?>

  <div class="site-content">

      <?php

        if (have_posts()):
          while (have_posts()) : the_post();
      ?>

        <article class="post page">

          <div class="container my-5">

            <h2 class="page-title"><?php the_title(); ?></h2>
            <h2><?php the_field('description_01') ?></h2>
            <div class="cp-bullet"><?php the_field('bullet_01') ?></div>

          </div>

          <div class="container my-5">
            <div class="row">
              <div class="col-md-3">
                <h3><?php the_field('state_title_01'); ?></h3>
                <p><?php the_field('state_content_01'); ?></p>
              </div>
              <div class="col-md-3">
                <h3><?php the_field('state_title_02'); ?></h3>
                <p><?php the_field('state_content_02'); ?></p>
              </div>
              <div class="col-md-3">
                <h3><?php the_field('state_title_03'); ?></h3>
                <p><?php the_field('state_content_03'); ?></p>
              </div>
              <div class="col-md-3">
                <h3><?php the_field('state_title_04'); ?></h3>
                <p><?php the_field('state_content_04'); ?></p>
              </div>
            </div>
          </div>

            <div class="container my-5">
              <div class="cp-bullet mb-3"><?php the_field('bullet_02') ?></div>

              <div class="cp-accomplishement"><?php the_field('accomplishments_01') ?></div>
              <div class="cp-accomplishement"><?php the_field('accomplishments_02') ?></div>
              <div class="cp-accomplishement"><?php the_field('accomplishments_03') ?></div>
            </div>

            <div class="container my-5">
              <h2><?php the_field('description_02'); ?></h2>
              <div class="cp-bullet"><?php the_field('bullet_03') ?></div>
            </div>

        </article>

      <?php
          endwhile;

        else :
          echo '<p>No content found</p>';
        endif;

      ?>

  </div>

<?php

  get_footer();

?>
