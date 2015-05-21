<?php get_header( ); ?>

		<div id="contents">

	<!-- Start the loop -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="post-excerpt">
			
			<h2><a href="<?php the_permalink();?>"><?php the_title( ); ?></h2></a>

			<small>Posted on the date in the category</small>

	 		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail' )?>;</a>
	 	<p><?php the_excerpt(); ?></p>
</article>
	<!-- End the loop -->
		<?php endwhile; endif;  ?>

<small>index.php</small>
<?php get_sidebar( ); ?>

 
	</div>

	<?php get_footer( ); ?>