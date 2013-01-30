<!DOCTYPE html>
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
  		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicon.png" />

		<!-- Foundation CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/foundation/stylesheets/foundation.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/foundation/stylesheets/app.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/foundation/stylesheets/offcanvas.css">
		

		<!-- Custom Modernizr for Foundation -->
		<script src="<?php echo get_template_directory_uri()?>/foundation/javascripts/modernizr.foundation.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />

	<?php if(is_singular()) {
		// Include thumbnail image for social sharing
		global $post;
		$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
		?>
		<meta name="title" content="<?php echo $post->post_title ?>" />
		<meta name="description" content="<?php echo $post->post_content ?>" />
		<meta property="og:image" content="<?php echo $url[0] ?>" />
		<link rel="image_src" type="image/jpeg" href="<?php echo $url[0] ?>" />
	<?php }?>

		<title><?php bloginfo('name')?></title>
	</head>
	<body class="off-canvas hide-extras">
		<div class="container">
			<header class="hide-for-small" id="header">
				<div class="row">
					<div class="four columns phone-two">
						<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="banner" />
					</div>
					<div class="eight columns">
						<?php
						$options = array(
							'container'			=> 'nav',
							'container_class'	=> 'hide-for-small',
							'menu_class'		=> 'nav-bar'
						);
						wp_nav_menu($options);
						?>
						<!--<h4><?php echo strtolower(get_bloginfo('description')) ?></h4>--> 
					</div>
				</div>
			</header>
			<section role="main">
				<div id="header-mobile" class="show-for-small">
					<a class="sidebar-button button" id="sidebarButton" href="#sidebar" ></a>
					<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="banner" />
				</div>