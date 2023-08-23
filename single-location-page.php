<?php
/*
Template Name: Single Post Location
Template Post Type: post
*/
?>

<?php get_header(); ?>

<?php $hero = get_field('hero-section'); ?>

<main>
	<section class="bg-dark text-center">
		<img src="<?php echo esc_url($hero['featured-image']['url']); ?>"
			alt="<?php echo esc_attr($hero['featured-image']['alt']); ?>">
		<div class="container container--narrow">
			<p>
				<?php echo $hero['location-state']; ?>
			</p>
			<h2>
				<?php echo $hero['location-title']; ?>
			</h2>
			<a href="#travel">Get Me There <img src="<?php echo get_template_directory_uri(); ?>/images/location.png"
					alt=""></a>
		</div>
	</section>

	<?php $first_section = get_field('section-1'); ?>

	<section class="bg-primary">
		<div class="container">
			<div class="split">
				<div>
					<h2>
						<?php echo $first_section['first-sub-title']; ?>
					</h2>
					<p>
						<?php echo $first_section['first-content-1']; ?>
					</p>
					<p>
						<?php echo $first_section['first-content-2']; ?>
					</p>
				</div>
				<div>
					<img src="<?php echo esc_url($first_section['image-1']['url']); ?>"
						alt="<?php echo esc_attr($first_section['image-1']['alt']); ?>">
					<p>
						<?php echo $first_section['first-content-3']; ?>
					</p>
					<p>
						<?php echo $first_section['first-content-4']; ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<?php $second_section = get_field('section-2'); ?>

	<section class="bg-white">
		<div class="container">
			<h2 class="text-center">
				<?php echo $second_section['second-sub-title']; ?>
			</h2>
			<div class="split">
				<div>
					<p>
						<?php echo $second_section['second-content-1']; ?>
					</p>
				</div>
				<div>
					<img src="<?php echo esc_url($second_section['image-2']['url']); ?>"
						alt="<?php echo esc_attr($second_section['image-2']['alt']); ?>">
				</div>
				<div>
					<p>
						<?php echo $second_section['second-content-2']; ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<?php $third_section = get_field('section-3'); ?>

	<section class="bg-primary" id="travel">
		<div class="container">
			<div class="split">
				<div>
					<h2>Getting There</h2>
					<p><span class="material-symbols-outlined">location_city</span>
						<?php echo $third_section['nearest-city']; ?>
					</p>
					<p><span class="material-symbols-outlined">flight</span>
						<?php echo $third_section['nearest-airport']; ?>
					</p>
					<p><span class="material-symbols-outlined">directions_car</span>
						<?php echo $third_section['nearest-road-distance']; ?>
					</p>
					<p><span class="material-symbols-outlined">train</span>
						<?php echo $third_section['nearest-train-station']; ?>
					</p>
				</div>
				<div>
					<img src="<?php echo esc_url($third_section['image-3']['url']); ?>"
						alt="<?php echo esc_attr($third_section['image-3']['alt']); ?>">
					<p>
						<?php echo $third_section['get-to-prompt']; ?>
					</p>
					<a href="<?php echo esc_url($third_section['google-maps-link']); ?>" target="_blank">Get Me
						There<img src="<?php echo get_template_directory_uri(); ?>/images/google-maps.png"
							alt=""></a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>