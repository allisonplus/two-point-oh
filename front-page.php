<?php //front-page ?>
<?php get_header(); ?>

<div class="main">

    <section class="welcome" id="about">
	    <h2>Welcome!</h2>
	    <div class="container short-about">
	    	<?php $bio = get_field('bio_photo', '5'); ?>
	      <img class="welcome-photo" src="<?php echo $bio['sizes']['about']; ?> " alt="">
	      <div class="intro"><?php the_field('brief_intro', '5'); ?></div>
	    	
			</div> <!--/.container-->
    </section> <!--/.welcome-->

    <section class="portfolio" id="portfolio">
    	<div class="container">
	    	<h2>Portfolio</h2>

	    	<?php $portfolioQuery = new WP_Query(array(
	    	    'posts_per_page' => 4, 
	    	    'post_type' => 'portfolio',
	    	    'post__not_in' => array( $post->ID )  
	    	) ); ?>

	    	<?php if ( $portfolioQuery->have_posts() ) : ?>

	    	  <?php while ( $portfolioQuery->have_posts() ) : $portfolioQuery->the_post(); ?> 
	    	        
	    	<div class="portfolioItem">

	    	  <?php $image = get_field('featured_img'); ?>

					<div class="portfolioImage-container">
	    			<img class="portfolioImage" src="<?php echo $image['sizes']['portfolio-front']; ?> " alt="">
	    		</div>

	    	  <div class="portfolioContent">
	    	  	<!-- <!-- <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->
	    	  	<h3><a href="<?php the_permalink(); ?>"><?php the_field('project_type'); ?></a></h3>
	    	  
	    	    <p><?php the_field('blurb'); ?></p>

	    			<!-- <a class="live" href="<?php the_field('url'); ?>" target="_blank">View Live</a> -->
	    	  </div> <!--/.portfolioContent-->
	    	</div> <!--/.portfolioItem-->

	    	  <?php endwhile; ?>

	    	    <?php wp_reset_postdata(); ?>

	    	<?php else:  ?>
	    	  
	    	<?php endif; ?>

	    	<a class="button full-portfolio" href="http://localhost:8888/portfolio2015/portfolio" target="_blank">See Full Portfolio</a>
			</div> <!--/.container-->

    </section> <!--/.portfolio-->

  <section class="contact" id="contact">
    <div class="container">
    	<h2>Contact</h2>
	    <div class="contact-info">
	    	<p>I am currently accepting projects. If you have cool stuff to share or want to talk shop over a coffee, I'd love to hear from you!</p>
	      <a class="emailMe" href="mailto:hello@allisontarr.com">hello@allisontarr.com</a>
	    </div> <!--/.contact-info-->

    </div> <!--/.container-->

    	<div class="contact-form">

	    	<form action="sendEmail.php" method="POST" class="myForm" autocomplete="off" name="myForm">
					<input type="text" name="text" placeholder="Name">
					<input type="email" name="email" placeholder="Email">
					<input type="text" name="subject" placeholder="Subject">
					<label for="message">Message</label>
					<textarea name="message" cols="25" rows="10"></textarea>
					<input class="fpbtn" type="submit">
	    	</form>

	   </div> <!--/.contact-form-->
    	
  </section> <!--/.contact--> 		

</div> <!-- /.main -->

<?php get_footer(); ?>