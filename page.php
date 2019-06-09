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

          <nav class="children-navigation">

            <!-- IF HAS CHILD, SHOW PARENT LINK -->
            <?php
              global $post;
              $args = array( 'post_parent' => get_the_ID() );
              $children = get_children( $args );

              if ( !empty($children) or $post->post_parent ) {
            ?>
              <span class="parent-link">
                <a href="<?php echo get_the_permalink( get_top_ancestor_id() ); ?>">
                  <?php echo get_the_title( get_top_ancestor_id() ); ?>
                </a>
              </span>
            <?php
              }
            ?>

            <ul class="children-navigation-links">
              <?php
                $args = array(
                  'child_of' => get_top_ancestor_id(),
                  'title_li' => ''
                );
              ?>
              <?php wp_list_pages($args); ?>
            </ul>
          </nav>

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
