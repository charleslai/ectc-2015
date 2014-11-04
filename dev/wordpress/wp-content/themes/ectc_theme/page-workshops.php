<?php require_once('wordpress/wp-blog-header.php'); ?>
<?php include("header.php"); ?>

<?php include("topbarAlt.php"); ?>

<div class="row">
    <div class="large-4 columns panel">
        <h2>Workshops!</h2>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    <div class="large-8 columns">
        <div class="row">
          <div class="large-4 columns">

            <ul class="inline-list2">
            <li>Session:</li>
            <li><a id="session1-button" href="#">1</a></li>
            <li><a id="session2-button" href="#">2</a></li>
            <li><a id="session3-button" href="#">3</a></li>
          </ul>
          </div>
          <div class="large-8 columns">
          <input id="workshop-search" type="search" placeholder="Search" value=""  aria-label="Search" aria-required="true" required="" title="Search" autocomplete="off">
    
        </div>      
        
        </div>
<hr />
        <table id="workshop-list">
          <thead style="display: none;">
            <tr>
              <td>Instructor</td>
              <td>Title</td>
              <td>Session</td>
              <td>Level</td>
              <td>Content</td>
            </tr>
          </thead>
          <tbody>

        <?php // The Query
          $the_query = new WP_query(array ( 'category_name' => 'Workshop', 'posts_per_page' => -1) );
          // The Loop

          while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <tr class="workshop-info">
            <?php 
              //echo "<tr WPid='".get_the_ID()."' ";
              $tags = wp_get_post_tags(get_the_ID(), array( 'fields' => 'names' ));
              $instructor = "";
              $session = "SESSION 1";
              $level = "Beginner";
              foreach($tags as $tag) {
                switch($tag) {
                  case "EXP_ALL":
                    break;
                  case "SESSION1":
                    $session = "SESSION 1";
                    break;
                  case "SESSION2":
                    $session = "SESSION 2";
                    break;
                  case "SESSION3":
                    $session = "SESSION 3";
                    break;
                  default:
                    $instructor = $tag;
                }
              }
            ?>

            <td><?php echo $instructor; ?></td>
            <td><?php the_title(); ?></td>
            <td><?php echo $session; ?></td>
            <td><?php echo $level; ?></td>
            <td>

            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <p><a><?php echo $instructor; ?></a></p>
            </td>
        </tr>
        <?php endwhile; ?>
      </tbody>

      </table>

    </div>
</div>
<?php include("footer.php"); ?>
