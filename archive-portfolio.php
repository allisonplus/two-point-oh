<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">

      <?php // Start the loop ?>

        <div class="items-archive">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div class="portfolioItem-archive">

            <?php $image = get_field('featured_img'); ?>
            
            <img class="portfolioImage-archive" src="<?php echo $image['sizes']['portfolio-archive']; ?> " alt="">

            <div class="portfolioContent-archive">
              <h2><a href="<?php the_permalink(); ?>"><?php the_field('project_type'); ?></a></h2>
            
              <p><?php the_field('blurb'); ?></p>
           
              <ul class="tech-archive">
                  <?php $taxonomyItems = get_the_terms($post->ID, 'technologies', '', ',', '');
                  //performs one time for each taxonomy item
                  foreach ($taxonomyItems as $taxonomyItem) {
                    // prints the taxonomy name wrapped in a list item
                    echo '<li>'.$taxonomyItem->name.'</li>';
                   };
                  ?>
              </ul> <!--/.tech-->
          </div> <!--/.portfolioContent-archive-->
              <a class="button archive-btn" href="<?php the_permalink(); ?>">View Details</a>
        </div> <!--/.portfolioItem-archive-->

           <?php endwhile; // end the loop?>
      </div> <!--/.items-archive-->
    </div><!--/content-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>