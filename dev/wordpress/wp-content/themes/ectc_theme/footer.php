    </div><!-- #main -->
    
    <footer>
        <hr />
    <div class="row">
        <div class="large-12 columns">
      
      <div class="row">
        <div class="large-3 columns">
          <p>© 2015 Cornell Yamatai</p>
        </div>
        <div class="large-3 columns" style="width: 20%;">
          <a style="color: black;" href="https://twitter.com/ectc2015" target="_blank"><i class="fi-social-twitter hi"></i></a>
        <a style="color: black;" href="https://www.facebook.com/events/1506439519583914" target="_blank"><i class="fi-social-facebook hi"></i></a>
        <a style="color: black;" href="<?php bloginfo('rss2_url'); ?>" target="_blank"><i class="fi-rss hi"></i></a>
        <a style="color: black;" href="mailto:ectc2015@gmail.com" target="_blank"><i class="fi-mail hi"></i></a>

        </div>

        <div class="large-6 columns" style="width:55%;">
        
          <ul class="inline-list right">
            <li><a href="http://www.ectc2015.com/dev">Home</a></li>
            <li class="divide">&bull;</li>
            <li><a href="page-about.php">About</a></li>
            <li class="divide">&bull;</li>
            <li><a href="page-registration.php">Registration</a></li>
            <li class="divide">&bull;</li>
            <li><a href="page-area-info.php">Area Info</a></li>
            <li class="divide">&bull;</li>
            <li><a href="page-faq.php">FAQ</a></li>
            <li class="divide">&bull;</li>
            <li><a href="page-contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div> 
</div>
  </footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <script src="js/foundation/foundation.orbit.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>


    <script>
      $(document).foundation({
  orbit: {
      animation: 'slide', // Sets the type of animation used for transitioning between slides, can also be 'fade'
      timer_speed: 10000, // Sets the amount of time in milliseconds before transitioning a slide
      pause_on_hover: true, // Pauses on the current slide while hovering
      resume_on_mouseout: true, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
      next_on_click: true, // Advance to next slide on click
      animation_speed: 500, // Sets the amount of time in milliseconds the transition between slides will last
      stack_on_small: false,
      navigation_arrows: true,
      slide_number: false,
      slide_number_text: 'of',
      container_class: 'orbit-container',
      stack_on_small_class: 'orbit-stack-on-small',
      next_class: 'orbit-next', // Class name given to the next button
      prev_class: 'orbit-prev', // Class name given to the previous button
      timer_container_class: 'orbit-timer', // Class name given to the timer
      timer_paused_class: 'paused', // Class name given to the paused button
      timer_progress_class: 'orbit-progress', // Class name given to the progress bar
      slides_container_class: 'orbit-slides-container', // Class name given to the slide container
      preloader_class: 'preloader', // Class given to the perloader
      slide_selector: 'li', // Default is '*' which selects all children under the container
      bullets_container_class: 'orbit-bullets',
      bullets_active_class: 'active', // Class name given to the active bullet
      slide_number_class: 'orbit-slide-number', // Class name given to the slide number
      caption_class: 'orbit-caption', // Class name given to the caption
      active_slide_class: 'active', // Class name given to the active slide
      orbit_transition_class: 'orbit-transitioning',
      bullets: false, // Does the slider have bullets visible?
      circular: true, // Does the slider should go to the first slide after showing the last?
      timer: true, // Does the slider have a timer active? Setting to false disables the timer.
      variable_height: false, // Does the slider have variable height content?
      swipe: true
        }
});

$(document).ready(function() {
    var data = $('#workshop-list').dataTable({
        "paging": false,
        "order": [[ 2, "desc" ]],
        "bInfo": false,
        "bFilter": true,
        "oLanguage": {
         "sSearch": ""
        },
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 1 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": true,
            },
            {
              "targets": [3],
              "visible": false,
              "searchable": true
            }
        ]
      });
      $('#workshop-list_filter').css('display', 'none');

      $('#workshop-search').keyup(function(){
        data.fnFilter( $(this).val() );
      });

      $('#session1-button').click(function() {         
     data.fnFilter("SESSION 1");
      });
      $('#session2-button').click(function() {         
     data.fnFilter("SESSION 2");
      });
      $('#session3-button').click(function() {         
     data.fnFilter("SESSION 3");
      });
    });

    </script>
<!-- this is dumb -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51792741-1', 'ectc2015.com');
  ga('send', 'pageview');
  
</script>

</body>
</html>