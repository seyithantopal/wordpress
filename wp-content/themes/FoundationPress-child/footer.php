<!-- Footer Start -->
<div id="footer">
	<div class="footer-container">
		<div class="footer-navbar-container">
			<?php
			$menu_meta = array(
				'menu' => 'navbar',
				'items_wrap' => '<ul id="" class="footer-navbar"><li>%3$s</li></ul>'
				);
			wp_nav_menu($menu_meta);
			?>
		</div>
		<?php
		$lastposts = get_posts( array(
			'posts_per_page' => 1,
			'orderby' => 'ID',
			'order' => 'DESC',
			'category' => 6
			));
		if($lastposts) {
			foreach ( $lastposts as $post ) :
				setup_postdata( $post ); ?>
			<p class="footer-text">BİZE ULAŞIN: <span class="emp"><?= the_title(); ?></span></p>
			<?php
			endforeach;
						//wp_reset_postdata();
		}
		?>

		<img src="<?= get_stylesheet_directory_uri(); ?>/img/sprite.png" class="footer-logo">
	</div>
</div>
<!-- Footer End -->
</div>
</body>
</html>