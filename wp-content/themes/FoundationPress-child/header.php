<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/jquery.slide.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<!-- Banner Start -->
		<div id="banner">
			<div id="top-logo-banner">
				<div class="top-logo-container">
					<a href="<?= get_site_url() . '/index'; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.png" class="top-logo"></a>

					<ul class="social-media">
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.png" class="facebook"></a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.png" class="instagram"></a></li>
						<?php
						$lastposts = get_posts( array(
							'posts_per_page' => 1,
							'orderby' => 'ID',
							'order' => 'DESC',
							'category' => 6
							));
						echo $lastposts->ID;

						if($lastposts) {
							foreach ( $lastposts as $post ) :
								setup_postdata( $post ); ?>
							<li><p class="str">BİZE ULAŞIN: <span class="emp"><?= the_title(); ?></span></p></li>
							<?php
							endforeach;
							//wp_reset_postdata();
						}
						?>
					</ul>
				</div>
			</div>

			<div id="logo-banner">
				<div class="logo-container">
					<a href="<?= get_site_url() . '/index'; ?>" class="logo-link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.png" class="logo"></a>

					<div class="navbar-container">
						<?php
						$menu_meta = array(
							'menu' => 'navbar',
							'items_wrap' => '<ul id="" class="navbar"><li>%3$s</li></ul>'
							);
						wp_nav_menu($menu_meta);
						?>
					</div>
				</div>
			</div>	
		</div>
		<!-- Banner End -->