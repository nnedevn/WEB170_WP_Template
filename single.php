<?php get_header( ); ?>

		<div id="contents">

	<!-- Start the loop -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2><?php the_title( ); ?></h2>
			<small>The thingie goes in here</small>
			<?php get_the_post_thumbnail( $post_id, 'large'); ?>

	 	<p>	<?php the_content( ); ?> </p>

	<!-- End the loop -->
		<?php endwhile; endif;  ?>

<small>single.php</small>
<?php get_sidebar( ); ?>

 
	</div>

	<?php get_footer( ); ?>