<?php get_header( ); ?>
<div id="contents">
	<!-- Start the loop -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<h2><?php the_title( ); ?></h2>
	<small>Posted on <?php the_time('F j, Y' ); ?> in <?php the_category(', ' ); ?> by <?php the_author( ); ?> </small>
	<p>	<?php the_content( ); ?> </p>
	<!-- End the loop -->
	<?php endwhile; endif;  ?>
	<small>single.php</small>
	<?php get_sidebar( ); ?>
	
</div>
Ï
<?php get_footer( ); ?>