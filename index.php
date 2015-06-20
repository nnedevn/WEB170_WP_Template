<?php get_header( ); ?>
<div id="contents">
	<!-- Start the loop -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="post-excerpt">
		<h2><a href="<?php the_permalink();?>" title="A link to <?php the_title( ); ?>"><?php the_title( ); ?>>
		</a></h2>
		<small>Posted on <?php the_time('F j, Y' ); ?> in <?php the_category(', ' ); ?> by <?php the_author( ); ?> </small>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail( 'thumbnail' )?>;</a>
		<p>
			<?php echo strip_tags(get_the_excerpt()); ?>
		</p>
		<p class="read-more"><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title( ); ?>">Read More &gt;&gt;</a>
	</p>
</article>
<!-- End the loop -->
<?php endwhile; endif; ?>
<small>index.php</small>

</div>
<?php ?>
<?php get_sidebar( ); ?>
<?php get_footer( ); ?>