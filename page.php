<?php get_header( ); ?>

		<div id="contents">

	<!-- Start the loop -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<?php the_content( ); ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?> 

<small>page.php</small>
<h1>this is where the sidebar</h1>

 
	</div>
  <?php get_sidebar( ); ?>
	<?php get_footer( ); ?>