<?php get_header(); ?>

<div class="main">
<!--   <div class="container"> -->

    <div class="content-blog">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>

          <div class="meta-data">
            <p class="date"><?php echo get_the_date(); ?> in </p>
            
            <?php 
            $category = get_the_category(); 

            if($category[0]){
            echo '<a class="category" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
            } ?>
            </div> <!--/.meta-data-->

          <div class="entry-content">

            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <?php $post_tags = get_the_tags($post->ID);
          if(!empty($post_tags)) {
            echo '<i class="fa fa-tags"></i>';
          }
          ?> 
          <?php the_tags( '<ul class="tags"><li>', ',</li><li>', '</li></ul>' ); ?>

        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '<span class="before-after">Previous Post:</span> %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '<span class="before-after">Next Post:</span> %title'); ?></p>
        </div><!-- #nav-below -->

    </div> <!-- /.content -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>


  <!-- </div>  --><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>