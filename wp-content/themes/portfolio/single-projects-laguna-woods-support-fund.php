<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section id="project">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php if (!has_excerpt()) { echo ''; } else{ ?>
        <div class="project-type"><?php the_excerpt(); ?></div>
      <?php } ?>

        <a href="#website-view" class="btn view-website-btn">Final Design</a>
        <div class="clear"></div>
      <div>
        <div class="col-6">
          <div class="col">
            <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/thumbnail-monitor.png" />
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <h2 class="page-headline">Re-skinning a custom template design to match client branding</h2>
            <p>This project is focused on redesigning a custom template design to match an established company brand.</p>

            <div class="col"></div>
            <h3>Table of Contents</h3>
            <ul id="table-of-contents">
              <li><a href="#section-context">Context</a></li>
              <li>
                <a href="#section-project">The Project</a>
                <ul>
                  <li><a href="#section-goal">The Goal</a></li>
                  <li><a href="#section-results">The Results</a></li>
                </ul>
              </li>
              <li>
                <a href="#section-solution">Redesign Solution</a>
                <ul>
                  <li><a href="#key-improvements">Key Fixes & Improvements</a></li>
                </ul>
              </li>
              <li><a href="#website-view">Final Design</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="clear"></div>

      <hr/>
      <div id="section-context" class="page-section centerize">
        <h2>Context</h2>
      </div>
      <div class="centerize">
        <h2><strong>Reusable Template Design</strong></h2>
        <p>There was a goal for my design agency at the time to create <strong>custom, donation-based websites</strong> for nonprofit and charity-based organizations in an effort to assist them in improving their online presence and better promote their humanitarian ambitions and goals.
          <br/>To accomplish this goal, we needed a custom web template design that we can continually reuse as a visual basis for different projects.
        </p>
      </div>
      <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/demo-template.png" />

      <hr/>
      <div id="section-project" class="page-section centerize">
        <h2>The Project</h2>
      </div>
      <div class="centerize">
        <img class="none" style="width:300px;max-width:100%;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/lw-title.png" />
        <p>Our first client for this service, The Laguna Woods Civic Support Fund, is a nonprofit public benefit corporation established to raise and distribute funds to support programs, projects, and services of the City.</p>
      </div>

      <div id="section-goal" class="centerize">
        <h2><strong>The Goal</strong></h2>
        <p>My job was to use the custom template design as a skeleton for designing Laguna Wood’s Civic Support Fund website. The idea is for me to re-skin the custom template design to fit our clients’ branding.</p>
      </div>

      <img style="padding:30px; box-sizing:border-box;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/brand.png" />
      <div class="centerize">
        <p>Our client wanted a fresh and simple website that stays true to their existing brand, with rich imagery and elegant layouts similar to the custom design we’ve provided.</p>
      </div>

      <div id="section-results" class="centerize">
        <h2><strong>The Results</strong></h2>
        <p>Below is an overview of the custom template design with the applied branding.</p>
      </div>
      <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/new-template.png" />

      <hr/>
      <div id="section-solution" class="page-section centerize">
        <h2>Redesign Solution</h2>
      </div>
      <div class="centerize">
        <h3>Applying the <strong style="margin:8px 0 20px 0;display:block; clear:both;font-size:1.75em;">Laguna Woods Brand</strong></h3>
        <p>Below is a side-by-side visual comparison between the custom template design of our company and the new design for Laguna Wood’s donation-based website.</p>
      </div>

      <div>
        <div class="col-6">
          <div class="col">
            <h3>OLD DESIGN</h3>
            <div class="img-fixed-height">
              <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/custom-home.png" />
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <h3><strong>NEW DESIGN</strong></h3>
            <div class="img-fixed-height">
              <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/home.png" />
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="col-6">
          <div class="col">
            <h3>OLD DESIGN</h3>
            <div class="img-fixed-height">
              <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/custom-campaigns.png" />
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <h3><strong>NEW DESIGN</strong></h3>
            <div class="img-fixed-height">
              <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/campaigns.png" />
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="col-6">
          <div class="col">
            <h3>OLD DESIGN</h3>
            <div class="img-fixed-height">
              <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/custom-donation.png" />
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <h3><strong>NEW DESIGN</strong></h3>
            <div class="img-fixed-height">
              <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/donation.png" />
            </div>
          </div>
        </div>
      </div>

      <div class="col"></div>

      <style>
        #key-improvements h3{
          font-weight: 600;
          padding: 10px;
          margin-bottom: 10px;
          box-sizing: border-box;
          background: #f7f7f7;
          text-align: center;
        }
      </style>
      <div id="key-improvements">
        <div class="centerize">
          <h2><strong style="margin:8px 0 40px 0;display:block; clear:both;font-size:1.25em;">Key Fixes & Improvements</strong></h2>
        </div>

        <h3>HOMEPAGE</h3>
        <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/analysis-homepage.png" />
        <div class="col"></div>
        <h3>DONATION PAGE</h3>
        <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/analysis-donation.png" />
        <div class="col"></div>
        <h3>FORM POP-UP</h3>
        <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/lagunawoods/analysis-form.png" />
      </div>


      <div id="website-view">
        <hr/>
        <div class="page-section centerize">
          <h2>Final Design</h2>
        </div>
        <div class="page_name_container">
          <span class="page_name">Home Page</span>
        </div>

        <div id="project-details">
          <?php $field_group = get_group('project_item');  ?>
          <div class="project-screens">
            <?php
              $count = 1;
              $page_names = array();
              foreach($field_group as $field){
              array_push($page_names, $field['project_item_title'][1]); ?>

              <div class="screen-item">
                <img src="<?php echo get('project_item_image',$count,$field); ?>" />
              </div>
            <?php $count++; } ?>
          </div>
        </div>
      </div>



      <!-- <hr/>
      <div class="page-section centerize">
        <h2>Lessons Learned</h2>
      </div> -->

      <!-- <div>
        <div class="col-6 learned">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Personality is Everything</span>
                I've learned that it is important for any kind of website to have a visual focus that users can easily familiarize with.
                To achieve this, the designer's responsibility is:
                <ul>
                  <li>to incorporate a high level of consistency and uniformity on all visual components</li>
                  <li>to use color, typography, and imagery effectively so that they compliment one another rather than create distractions</li>
                  <li>to grant key elements or content types their own exclusive visual identity.
                    This can help users make distinctions between different types of content.</li>
                </ul>
              </li>
              <li class="list-item-main"><span class="list-title">Overlooking the Entire Website is Important</span>
                It is easy to just get started designing page by page without addressing the entire scope of a site.
                However, I've learned that it is important to first take a step back and visualize how pages
                are connected with one another in the hierarchy - an understanding that is ultimately reflected on how the pages will be designed.
              </li>
            </ul>
          </div>
        </div>

        <div class="col-6 learned">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Have Creative Control</span>
                It was a challenging task for me to limit my tendencies to 'overdesign'.
                Because I didn't start the project with a completely empty canvas, I had to be able to utilize the peak of my creativity strictly within the constraints of an already-established concept (presented as the homepage for this project).
                <br/>This was quite a learning curve for me because I always had the tendency to over-populate a website with several features to the point where the aesthetics became very 'busy'.
                I've realized that that's where the website loses it's personality - it tries to be everything it's not, rather than be one thing that it is.
              </li>
            </ul>
          </div>
        </div>
      </div> -->

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
