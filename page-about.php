<?php get_header();  ?>

<div class="main">
  <div class="container">

   <div class="content">

    <div class="about">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div class="about-info">
	        <?php $bio = get_field('work_photo'); ?>
	        <img src="<?php echo $bio['sizes']['portfolio-front']; ?> " alt="">
	    		<h2>About Allison</h2>
	        <?php the_content(); ?>

        </div> <!--/.about-info-->

				<div class="about-things">
					<h2>Things To Know</h2>

          <?php while( has_sub_field('factoids') ): ?>
            <div class="factoid">
              <?php the_sub_field('icon'); ?>
              <div class="fact-content">
                <h3><?php the_sub_field('fact_title'); ?></h3>
                <p><?php the_sub_field('fact'); ?></p>
              </div>
            </div> <!--/.factoid-->
          <?php endwhile; ?>
        </div> <!--/.about-skills-->

      <?php endwhile; // end the loop?>

    </div><!--/.about-->
   </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>