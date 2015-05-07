<div id='sidebar'>

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

}

 ?>
</ul>

<?php endif; ?>

<?php if (!is_page( ) || is_404() ) : ?>
<ul>

<?php wp_list_categories(array(
															'title_li' => '',
	)); ?>

</ul>	
<?php endif ?>
</div> <!-- end sidebar -->