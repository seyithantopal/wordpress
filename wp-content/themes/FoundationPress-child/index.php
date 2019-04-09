<?php
get_header(); ?>

<?php
//echo get_query_var('pagename');
//echo get_site_url();

//echo $wp_query->queried_object->ID;
//echo get_page_uri();
//echo get_template_directory_uri();
?>

<!-- Main Section Start -->
<div id="section">
	<div class="anchor-container">
		<div class="anchor">
			<p>SİZİ ARAYALIM</p>
		</div>
	</div>
	
	<div class="slide">
		<ul>
			<?php
			$lastposts = get_posts( array(
				'orderby' => 'ID',
				'order' => 'ASC',
				'category' => 5
				));

			if($lastposts) {
				foreach ( $lastposts as $post ) :
					setup_postdata( $post ); ?>
				<li data-bg=<?php the_content(); ?>></li>
				<?php
				endforeach;
						//wp_reset_postdata();
			}
			?>
		</ul>				
	</div>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.slide.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.slide').slide({
				'slideSpeed': 3000,
				'isShowArrow': true,
				'dotsEvent': 'mouseenter',
				'isLoadAllImgs': true
			});
		});
	</script>
</div>
<!-- Main Section End -->

<!-- Bottom Section End -->
<div id="bottom-section">
	<div class="bottom-section-container">
		<div class="gr">
			<?php
						//$cats = get_categories();
						/*$args = array(
							//'orderby' => '$cat_id',
							'order' => 'ASC',
							//'include' => '5,4,7,6'
						);
						$cats = get_categories($args);
						foreach($cats as $cat) {
							$cat_id = $cat->term_id;
							//if($cat->name == 'Sections') {
								echo "<h2>" . $cat->name . " - $cat_id</h2>";

								query_posts("cat=$cat_id");
								if(have_posts()) : while(have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<?php echo "<hr>"; ?>
								<?php the_title(); ?>
								<?php echo "<hr>"; ?>
							<?php endwhile; endif; ?>
						<?php
						}
					//}*/
						/* ------------------------------------------------ */

						/*$your_custom_query = new WP_Query( 'posts_per_page=10' );
 
						while( $your_custom_query->have_posts() ) : $your_custom_query->the_post();
							echo $your_custom_query->post->ID; // print post ID
							echo '<br>';
							echo $your_custom_query->post->title; // print post ID
							endwhile;*/

							/* ------------------------------------------------ */

							$lastposts = get_posts( array(
								'posts_per_page' => 3,
								'orderby' => 'ID',
								'order' => 'ASC',
								'category' => 3
								));

							if($lastposts) {
								foreach ( $lastposts as $post ) :
									setup_postdata( $post ); ?>
								<div class="single">
									<figure class="wp-block-image" style="width:300px;">
										<div class="bottom-list-img"><a href="<?php echo get_permalink($post->ID); ?>"><?= the_content(); ?></a></div>
									</figure>
									<div class="bottom-list-text"><a href="<?php echo get_permalink($post->ID); ?>"><span><?= the_title(); ?></span></a></div>
								</div>
								<?php
								endforeach;
						//wp_reset_postdata();
							}
							/* ------------------------------------------------ */
							?>					
						</div>
						<?php 
						$lastposts = get_posts( array(
							'posts_per_page' => 1,
							'orderby' => 'ID',
							'order' => 'DESC',
							'category' => 7
							));

						if($lastposts) {
							foreach ( $lastposts as $post ) :
								setup_postdata( $post ); ?>							
							<p class="bottom-text"><?php echo the_title(); ?></p>
							<?php
							endforeach;
						//wp_reset_postdata();
						}
						/* ------------------------------------------------ */
						?>
					</div>
				</div>
				<!-- Bottom Section End -->






				<?php
				get_footer(); ?>