<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description' ); ?> | <?php bloginfo('name' ); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.js"></script>
	<!-- Start WP head-->
<?php wp_head(); ?>
	<!-- End wp head -->
</head>
<body <?php body_class( ); ?>>
<div id="container">
	<header>
		<div id="logo">
			<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Lunatic Sugar Logo"></a>
			<!-- Use abolute path if for the logo if something goes wrong -->
			<h1>Lunatic Sugar</h1>
		</div>

<?php    /**
	* Displays a navigation menu
	* @param array $args Arguments
	*/
	wp_nav_menu( array(
	            'theme_location' => '',
	            'container' => 'nav',
	            'container_id'=>'nav-main',
	            'menu_id'=>'main-menu-items',
	            'menu_class'=>'show',
	            

	            
	            ) ); ?>

	</header>
	
		<div id="contents">
	<!-- Start the loop -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2><a href="<?php the_permalink();?>"><?php the_title( ); ?></h2></a>

	 	<p>	<?php the_content( ); ?> </p>

	<!-- End the loop -->
		<?php endwhile; endif;  ?>


<!-- <h2 style="color:red"> <?php the_title($post->post_parent ); ?></h2> -->





<br>

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
 
	</div>
	<!-- <div id="contents">
		<div class="contents-home">
			<a href="page2.html"><img src="<?php bloginfo('template_directory'); ?>/img/img01.jpg" alt=""></a>
			<img src="<?php bloginfo('template_directory'); ?>/img/img02.jpg" alt="">
			<img src="<?php bloginfo('template_directory'); ?>/img/img03.jpg" alt="">
			<img src="<?php bloginfo('template_directory'); ?>/img/img04.jpg" alt="">
			<p class="highlight">Hi! I'm Ivo. In my spare time, I enjoy taking pictures of things I like - nature, my tohou figures collection, my plushies, people I meet at anime conventions. I'll be updating this as soon as I'm able. If you have any questions for me, don't hesitate to <a href="contact.html">drop me a line!</a></p>
		</div> -->
	</div>
	<footer>
		<ul>
			<li>all work © 2013 lunatic sugar</li>
			<li>design © 2013 n.nedev </li>
			<li><a href="">sitemap</a></li>
		</ul>
		
	</footer>
</div>	
<!-- wp footer -->
<?php wp_footer(); ?>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</html>