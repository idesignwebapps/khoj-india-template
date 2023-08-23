<?php
/*
Template Name: Locations Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php $hero_location = get_field('hero-section'); ?>

<main>
	<section class="bg-dark text-center locations-container">
		<div class="container container--narrow">
			<p>
				<?php echo $hero_location['sub-heading']; ?>
			</p>
			<h2>
				<?php echo $hero_location['heading']; ?>
			</h2>
		</div>
	</section>
	<div class="card-container">

		<?php $grid_first_section = get_field('grid-section-1');
		$grid_second_section = get_field('grid-section-2');
		$grid_third_section = get_field('grid-section-3');
		$grid_fourth_section = get_field('grid-section-4');
		$grid_fifth_section = get_field('grid-section-5');
		$grid_sixth_section = get_field('grid-section-6'); ?>

		<div class="card">
			<img src="<?php echo esc_url($grid_first_section['grid-image']['url']); ?>"
				alt="<?php echo esc_attr($grid_first_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_first_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_first_section['grid-sub-title']; ?>
				</p>
				<a href="<?php echo esc_url($grid_first_section['grid-link']); ?>">Discover</a>
			</div>
		</div>
		<div class="card">
			<img src="<?php echo esc_url($grid_second_section['grid-image']['url']); ?>"
				alt="<?php echo esc_attr($grid_second_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_second_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_second_section['grid-sub-title']; ?>
				</p>
				<a href="<?php echo esc_url($grid_second_section['grid-link']); ?>">Discover</a>
			</div>
		</div>
		<div class="card">
			<img src="<?php echo esc_url($grid_third_section['grid-image']['url']); ?>"
				alt="<?php echo esc_attr($grid_third_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_third_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_third_section['grid-sub-title']; ?>
				</p>
				<a href="<?php echo esc_url($grid_third_section['grid-link']); ?>">Discover</a>
			</div>
		</div>
		<div class="card">
			<img src="<?php echo esc_url($grid_fourth_section['grid-image']['url']); ?>"
				alt="<?php echo esc_attr($grid_fourth_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_fourth_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_fourth_section['grid-sub-title']; ?>
				</p>
				<a href="<?php echo esc_url($grid_fourth_section['grid-link']); ?>">Discover</a>
			</div>
		</div>
		<div class="card">
			<img src="<?php echo esc_url($grid_fifth_section['grid-image']['url']); ?>"
				alt="<?php echo esc_attr($grid_fifth_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_fifth_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_fifth_section['grid-sub-title']; ?>
				</p>
				<a href="<?php echo esc_url($grid_fifth_section['grid-link']); ?>">Discover</a>
			</div>
		</div>
		<div class="card">
			<img src="<?php echo esc_url($grid_sixth_section['grid-image']['url']); ?>"
				alt="<?php echo esc_attr($grid_sixth_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_sixth_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_sixth_section['grid-sub-title']; ?>
				</p>
				<a href="<?php echo esc_url($grid_sixth_section['grid-link']); ?>">Discover</a>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>