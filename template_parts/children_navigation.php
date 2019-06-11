<nav class="children-navigation">
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