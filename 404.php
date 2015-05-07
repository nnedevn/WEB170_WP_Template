<?php get_header( ); ?>

		<div id="contents">

	<!-- Start the loop -->

			<h2><a href="<?php the_permalink();?>"><?php the_title( ); ?></h2></a>

<h2>There is nothing here, you might wanna try this search here</h2>

	<!-- End the loop -->
<?php get_search_form( ); ?>

<small>404.php</small>
<?php get_sidebar( ); ?>

 
	</div>

	<?php get_footer( ); ?>