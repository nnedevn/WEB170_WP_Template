<?php get_header( ); ?>

		<div id="contents">

	<!-- Start the loop -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2><a href="<?php the_permalink();?>"><?php the_title( ); ?></h2></a>

	 	<p>	<?php the_content( ); ?> </p>

	<!-- End the loop -->
		<?php endwhile; endif;  ?>

<small>front-page.php</small>
<?php get_sidebar( ); ?>

 
	</div>

	<?php get_footer( ); ?>