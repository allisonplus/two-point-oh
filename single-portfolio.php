<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php $image = get_field('featured_img'); ?>

          <img class="single-portfolio-image" src="<?php echo $image['sizes']['portfolio']; ?> " alt="">

          <div class="single-whole-content">
            <div class="single-left-content">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
              <p><?php the_field('description'); ?></p>

            </div> <!--/.single-left-content-->

            <div class="single-right-content">
              <h2>Skills Used</h2>
              <ul class="tech">
                  <?php $taxonomyItems = get_the_terms($post->ID, 'technologies', '', ',', '');
                  //performs one time for each taxonomy item
                  foreach ($taxonomyItems as $taxonomyItem) {
                    // prints the taxonomy name wrapped in a list item
                    echo '<li>'.$taxonomyItem->name.'</li>';
                   };
                  ?>
              </ul> <!--/.tech-->
            <a class="button project-link" href="<?php the_field('url'); ?>" target="_blank">Project Link</a>

            </div> <!--/.single-right-content-->
          </div> <!--/single-whole-content-->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

        </div><!-- #post-## -->

        <div id="nav-below" class="navigation-archive">
          <p class="nav-previous"><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '<i class="fa fa-angle-right"></i>'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>