<small>sidebar.php</small>

<div id="sidebar">

<!-- This is where the rest of the navigation will go -->

<!-- Begins sub-navigation -->

<?php if (is_page(  )): ?>
	
<h2 style="color:red"><?php get_the_title( $post->post_parent ); ?></h2>

<ul>
<?php 
// Displays a sidebar menu

if ($post->post_parent) {

       wp_list_pages(array(
              'child_of'=> $post->post_parent,
              'title_li' => '',

              ) );

} else{
	wp_list_pages(array(
              'child_of'=> $post->ID,
              'title_li' => '',

              ) );

} ?>
</ul>

<?php endif; ?>

<?php if (!is_page( ) || is_404() ) : ?>
<ul>

<?php wp_list_categories(array('
	title_li' => '',
	)); ?>

</ul>	

<?php endif ?>

<!-- Insert the dynamic sidebar -->
<?php dynamic_sidebar('Main Sidebar'); ?>


<!-- Block quote section -->
<?php if (get_post_meta(get_the_id(), 'Quote', true)): ?>

	<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>

<?php endif ?>
<!-- End of blockquote section -->

</div> <!-- End sidebar -->
