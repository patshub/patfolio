<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section id="project">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php if (!has_excerpt()) { echo ''; } else{ ?>
        <div class="project-type"><?php the_excerpt(); ?></div>
      <?php } ?>

      <div style="clear:both; height:60px;">
        <a target="_blank" href="http://pmartindesigns.com/sfc" class="btn view-website-btn">View Website</a>
      </div>

      <div class="clear"></div>

      <div class="col-6 centerize">
        <div class="col">
          <h2>Project in Progress...</h2>
          <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/sfc/thumbnail-monitor.png" />
        </div>
      </div>

      <div id="website-view">
        <hr/>
        <div class="page-section centerize">
          <h2>Full Website</h2>
        </div>

        <iframe width="100%" height="1000px" src="http://pmartindesigns.com/sfc/">
        </iframe>

      </div>

    </div>
  </section>
  <script>
    function replace_page_name(){
      $('.page_name').text($('.bx-pager-link.active .pager-item').attr('data-name'));
    }
    $(document).ready(function(){
      $('.project-screens').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: true,

        nextText: '',
        prevText: '',
        keyboardEnabled: true,

        adaptiveHeight: true,

        auto: false,
        pause: 6000,
        autoHover: true,

        onSlideAfter: function($slideElement, oldIndex, newIndex) {
          replace_page_name();
        },
        buildPager: function(slideIndex){
          switch(slideIndex){
            <?php $count = 0; foreach($page_names as $name){ ?>
              case <?php echo $count++; ?>:
                return '<div data-name="<?php echo $name; ?>" class="pager-item"></div>';
            <?php } ?>
          }
        }
      });
      $('.bx-controls-direction a').click(function(){
        replace_page_name();
      });
    });
  </script>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
