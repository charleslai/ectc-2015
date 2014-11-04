<?php require_once('wordpress/wp-blog-header.php'); ?>
<?php include("header.php"); ?>
<?php include("topbarAlt.php"); ?>

<div class="row">
    <div class="large-12 columns panel">
        <h2>Professionals!</h2>
    </div>
</div>
<div class="row">
<?php
  $the_query = new WP_query(array ( 'category_name' => 'Professional', 'posts_per_page' => -1) );
  // The Loop
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="large-4 columns panel">
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <p><?php the_tags() ?></p>

    </div>
  <?php endwhile; ?>
</div>

<?php include("footer.php"); ?>
