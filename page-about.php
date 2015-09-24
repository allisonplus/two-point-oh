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

				<div class="about-skills">
					<h2>Skills</h2>
	    	  <p><?php the_field('skills'); ?></p>
        </div> <!--/.about-skills-->

      <?php endwhile; // end the loop?>

    </div><!--/.about-->
   </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>