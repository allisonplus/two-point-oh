<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Raleway:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

  <?php // If it's the Front Page ?>
  <?php
  if (is_front_page())
  {?>

  <?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'highlight', true);
    $thumb_url = $thumb_url_array[0];
  ?>

  <div class="hero" style="background-image:url(<?= $thumb_url ?>)">
    <div class="heroContent">
      <h3>
        <i class="fa fa-star-o"></i> <?php echo get_bloginfo ( 'description' );  ?> <i class="fa fa-star-o"></i>
      </h3>
      <h1><?php bloginfo( 'name' ); ?></h1>
    </div> <!-- /.heroContent -->
  </div> <!--/.hero-->

  <nav>
    <div class="nav-container">
      <a href="#" class="mobile-icon">&#9776;</a>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'left',
        'menu' => 'left'
      )); ?>

      <a class="home-icon" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/home-icon.png" alt="Allison Tarr Home Icon"></a>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'right',
        'menu' => 'right'
      )); ?>
    </div> <!--/.nav-container-->
  </nav>

  <?php // If it's the Blog ?>
  <?php } elseif (is_home() ) { ?>

    <nav>
      <div class="nav-container">
        <a href="#" class="mobile-icon">&#9776;</a>
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'left',
          'menu' => 'left'
        )); ?>

        <a class="home-icon" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/home-icon.png" alt="Allison Tarr Home Icon"></a>

        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'right',
          'menu' => 'right'
        )); ?>
      </div> <!--/.nav-container-->
    </nav>

    <?php 
      $thumb_id = get_post_thumbnail_id(8);
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'page', true);
      $thumb_url = $thumb_url_array[0];
    ?>

    <div class="beta-hero" style="background-image: url(<?= $thumb_url ?>)">
    <h3 class="pg-title"><?php echo get_the_title('8'); ?></h3>
    </div>

  <?php // If it's a Single Blog Post ?>
  <?php } elseif (is_singular('post') ) { ?>

  <nav>
    <div class="nav-container">
      <a href="#" class="mobile-icon">&#9776;</a>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'left',
        'menu' => 'left'
      )); ?>

      <a class="home-icon" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/home-icon.png" alt="Allison Tarr Home Icon"></a>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'right',
        'menu' => 'right'
      )); ?>
    </div> <!--/.nav-container-->
  </nav>

  <?php $blogImage = get_field('blog_header_image', 'option'); ?>

  <div class="beta-hero" style="background-image: url(<?php echo $blogImage['sizes']['page']; ?>)">
  </div>

  <?php // If it's the Portfolio Archive Page ?>
  <?php } elseif (get_post_type() == 'portfolio' && is_archive()) { ?>

  <nav>
    <div class="nav-container">
      <a href="#" class="mobile-icon">&#9776;</a>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'left',
        'menu' => 'left'
      )); ?>

      <a class="home-icon" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/home-icon.png" alt="Allison Tarr Home Icon"></a>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'right',
        'menu' => 'right'
      )); ?>
    </div> <!--/.nav-container-->
  </nav>

  <?php $portfolioImage = get_field('portfolio_header_image', 'option'); ?>
  <div class="portfolio-hero" style="background-image: url(<?php echo $portfolioImage['sizes']['page']; ?>)">
    <h3 class="pg-title"><?php post_type_archive_title(); ?></h3>
  </div>


  <?php // If it's a Single Portfolio Page ?>
  <?php } elseif (is_singular('portfolio') ) { ?>

  <nav>
    <div class="nav-container">
      <a href="#" class="mobile-icon">&#9776;</a>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'left',
        'menu' => 'left'
      )); ?>

      <a class="home-icon" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/home-icon.png" alt="Allison Tarr Home Icon"></a>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'right',
        'menu' => 'right'
      )); ?>
    </div> <!--/.nav-container-->
  </nav>


  <?php // If it's any other page ?>
  <?php } else { ?>

  <nav>
    <div class="nav-container">
      <a href="#" class="mobile-icon">&#9776;</a>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'left',
        'menu' => 'left'
      )); ?>

      <a class="home-icon" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/home-icon.png" alt="Allison Tarr Home Icon"></a>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'right',
        'menu' => 'right'
      )); ?>
    </div> <!--/.nav-container-->
  </nav>

  <?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'page', true);
    $thumb_url = $thumb_url_array[0];
  ?>

  <div class="beta-hero" style="background-image: url(<?= $thumb_url ?>)">
  </div>

  <?php } ?>

</header><!--/.header-->

