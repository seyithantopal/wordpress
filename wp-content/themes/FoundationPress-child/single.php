<?php

get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>
<?php
if(is_page('contact')) { ?>
<!-- Main Section Start -->
<div id="section">
	<div class="slide">
		<div id="map"></div>
		<script>
					// Initialize and add the map
					function initMap() {
					// The location of Uluru
					//39.873820, 32.703463
					var uluru = {lat: 39.863956, lng: 32.727640};
					// The map, centered at Uluru
					var map = new google.maps.Map(
						document.getElementById('map'), {zoom: 16, center: uluru});
					// The marker, positioned at Uluru
					var marker = new google.maps.Marker({position: uluru, map: map});
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmiTKv_ihG3jKYzCNpLYYBhVDVZgvpaY0&callback=initMap"></script>
		</div>
	</div>
	<!-- Main Section End -->
	<!-- Bottom Section End -->
	<div id="bottom-section">
		<div class="bottom-section-container">
			<div class="anchor2-container">
				<div class="anchor2">
					<p>İletişim</p>
				</div>
			</div>
			<div class="form">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<!-- Bottom Section End -->

	<?php
} else {
	?>
	<div class="empty-space">
		<h2><?php the_title(); ?></h2>
	</div>
	<?php } ?>

<?php endwhile;

else : 
	echo '<p>No content found</p>';
endif;
get_footer();
?>