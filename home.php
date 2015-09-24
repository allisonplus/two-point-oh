<?php //Blog ?>

<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content-blog">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="post">
        	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
        	  echo get_the_post_thumbnail($post->ID);
        	} else {
        	   echo main_image();
        	} ?>

          <div class="blog-post-text">
            <h2><?php the_title(); ?></h2>
            
            <div class="meta-data">
    	        <p class="date"><?php echo get_the_date(); ?> in </p>

    	        <?php 
    	        $category = get_the_category(); 

    	        if($category[0]){
    	        echo '<a class="category" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
    	        } ?>
    	        </div> <!--/.meta-data-->

            <?php the_excerpt(); ?> 
          </div> <!--/blog-post-text-->
        </div> <!--/.post-->

      <?php endwhile; // end the loop?>
    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>