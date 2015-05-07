<?php get_header( ); ?>

		<div id="contents">

	<!-- Start the loop -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2><?php the_title( ); ?></h2>

	 	<p>	<?php the_content( ); ?> </p>

	<!-- End the loop -->
		<?php endwhile; endif;  ?>

<small>page.php</small>
<?php get_sidebar( ); ?>

 
	</div>

	<?php get_footer( ); ?>