<?php include 'includes/header.php'; ?>

<?php if(is_front_page()) { ?>

<section>
  <div class="container">

    <h2 class="home-section-title">Client Projects + Case Study</h2>
    <?php
    $args = array(
      'posts_per_page' => 9,
      'post_type'   => 'projects',
      'category__not_in' => 2
    );
    $projects = new WP_Query( $args );

    if ( $projects->have_posts() ) { ?>
      <div id="projects">
        <?php	while ( $projects->have_posts() ) { $projects->the_post(); ?>
          <div class="col-6 project-item">
            <div class="col">
              <?php if ( has_post_thumbnail() ) : ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" />
                  </a>
              <?php endif; ?>
              <div class="project-info">
                <p><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></p>
                <?php if (!has_excerpt()) { echo ''; } else{ ?>
                  <div class="project-summary"><?php the_excerpt(); ?></div>
                <?php } ?>
              </div>
              <!-- <a class="btn" href="<?php //echo the_permalink(); ?>">View Project</a> -->
            </div>
          </div>
        <?php } wp_reset_postdata(); ?>
      </div>
    <?php } else {
    	// no posts found
    }
    ?>

    <h2 class="home-section-title">Passion Projects</h2>
    <?php
    $args = array(
      'posts_per_page' => 6,
      'post_type'   => 'projects',
      'category_name' => 'Featured'
    );
    $projects = new WP_Query( $args );

    if ( $projects->have_posts() ) { ?>
      <div id="projects" class="columns">
        <?php	while ( $projects->have_posts() ) { $projects->the_post(); ?>
          <div class="col-6 project-item">
            <div class="col">
              <?php if ( has_post_thumbnail() ) : ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" />
                  </a>
              <?php endif; ?>
              <div class="project-info">
                <p><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></p>
                <?php if (!has_excerpt()) { echo ''; } else{ ?>
                  <div class="project-summary"><?php the_excerpt(); ?></div>
                <?php } ?>
              </div>
              <!-- <a class="btn" href="<?php //echo the_permalink(); ?>">View Project</a> -->
            </div>
          </div>
        <?php } wp_reset_postdata(); ?>
      </div>
    <?php } else {
    	// no posts found
    }
    ?>

  </div>
</section>
<?php } ?>
    </body>
</html>
