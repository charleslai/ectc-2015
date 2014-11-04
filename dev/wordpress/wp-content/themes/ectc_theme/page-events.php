<?php require_once('wordpress/wp-blog-header.php'); ?>
<?php include("header.php"); ?>

<?php include("topbarAlt.php"); ?>

<div class="row">
    <div class="large-12 columns panel">
        <h2>Events!</h2>
    </div>
</div>
<div class="row">
        <?php // The Query
          $the_query = new WP_query(array ( 'category_name' => 'Events', 'posts_per_page' => -1) );
          // The Loop
          while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="large-4 columns panel">

            <?php 
              //echo "<tr WPid='".get_the_ID()."' ";
              $tags = wp_get_post_tags(get_the_ID(), array( 'fields' => 'names' ));
              if(array_search('completed', $tags) !== FALSE) {
                //echo "class='selected'><td class='toggle'><i class='icon-check'></i></td>";
              } else {
                //echo "><td class='toggle'><i class='icon-check-empty'></i></td>";
              }
              ?>
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
              <p><?php the_tags() ?></p>

              </div>

        <?php endwhile; ?>

</div>

<?php include("footer.php"); ?>
