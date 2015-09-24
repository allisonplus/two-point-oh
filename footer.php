<footer>
	<div class="container">
		<div class="social-icons">
	    <a href=mailto:<?php the_field('email', 'option'); ?>><i class="fa fa-envelope-o"></i></a>
	    <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
	    <a href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin"></i></a>
	    <a href="<?php the_field('github', 'option'); ?>"><i class="fa fa-github"></i></a>
	    <a href="<?php the_field('codepen', 'option'); ?>"><i class="fa fa-codepen"></i></a>
		</div>	<!--/.social-icons-->
    <p>&copy; Allison Tarr <?php echo date('Y'); ?></p>

	<div class="backToTop-container">
   <a class="backToTop" href="#top"><i class="fa fa-angle-up"></i></a>
  </div> <!--/.back-->

  </div> <!--/.container-->
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>