<?php get_header( ); ?>

		<div id="contents">

<!-- TODO: Crate the flexslider -->
<!-- Begin flexslider -->

			<!-- THIS IS WHERE THE FLEX-SLIDER NEED TO GO -->
		<div class="flexslider">

			<ul class="slides">

				<li src="<?php bloginfo('template_directory'); ?>/"></li>
				<li src="<?php bloginfo('template_directory'); ?>/"></li>
				<li src="<?php bloginfo('template_directory'); ?>/"></li>
				<li src="<?php bloginfo('template_directory'); ?>/"></li>

			</ul> <!-- end slides -->

		</div> <!-- End #flexslider -->

<!-- End flexslider -->

	<!-- Start the loop 1 which will show the latest post's title and content-->
	 <?php query_posts('showposts=1' ); ?>
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h1>Laset post:</h1> <br>
		<h1><?php the_title( ); ?></h1>
		<p><?php the_content(); ?></p>
<
	<!-- End the loop 1-->
		<?php endwhile; endif;  ?>

<!-- Rewind the posts -->
	<?php rewind_posts(); ?>

<!-- Show the latest four posts' thumbnail and excerpt -->
  <?php query_posts('showposts=4' ); ?>

<!-- Start secondary loop -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div id="left-column">

		<h2><a href="<?php the_permalink(); ?>">	<?php the_title( ); ?></h2></a>
		<?php the_post_thumbnail('thumbnail' ); ?> 
	  <p><?php the_excerpt(); ?></p>
	  <br>

	</div>
	<!-- End the loop 2-->

		<?php endwhile; endif;  ?>

<small>front-page.php</small>

	<!-- <?php get_sidebar( ); ?> -->
 
	</div> <!-- End #contents -->

	<?php get_footer( ); ?>