<!DOCTYPE html>

<html>
	<head>
			<title>
				<?php
					wp_title( '-', true, 'right' );
					bloginfo( 'name' );
				?>
			</title>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0" >
	<?php wp_head(); ?>
	</head>
	
	<body>

		<div class="page-wrap">

			<header>
				
				<p>This is the header.php</p>
				
				<h1><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
				
				<h2><?php bloginfo('description'); ?></h2>

				<nav>
				<?php 
					//by adding the echo false line, you strip all the extra tags WP puts in the nav.
					//and then you echo the strip tags, and the second peramenter are the tags you want to keep
					//in this case the "a" tag.
					$args = array(
						'menu' => 'main-menu',
						'echo' => false
					);

					echo strip_tags(wp_nav_menu( $args ), '<a>');

				?>
				</nav>

			</header>