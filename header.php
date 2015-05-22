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
					<a href="<?php echo get_home_url( ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Lunatic Sugar Logo"></a>
					<!-- Use abolute path if for the logo if something goes wrong -->
					<h1>Lunatic Sugar</h1>
				</div>
				<?php    /**
					* Displays a navigation menu
					*/
					wp_nav_menu( array(
					'theme_location' => '',
					'container' => 'nav',
					'container_id'=>'nav-main',
					'menu_id'=>'main-menu-items',
					'menu_class'=>'',
				
					) );
				?>
			</header>