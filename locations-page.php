<?php
/*
Template Name: Locations Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<!-- main START -->
<main>
	<!-- page heading -->
	<section class="bg-dark text-center locations-container">
		<div class="container container--narrow">
			<p><a href="<?php echo get_home_url(); ?>">Khoj</a>&sol;<a href="<?php echo get_home_url(); ?>/locations/">Locations</a></p>
			<h2>Locations</h2>
		</div>
	</section>
	<!-- content -->
	<div class="card-container">

		<?php $grid_first_section = get_field('grid-section-1');
		$grid_second_section = get_field('grid-section-2');
		$grid_third_section = get_field('grid-section-3');
		$grid_fourth_section = get_field('grid-section-4');
		$grid_fifth_section = get_field('grid-section-5');
		$grid_sixth_section = get_field('grid-section-6'); ?>

		<!-- category card -->
		<a class="card" href="<?php echo esc_url($grid_first_section['grid-link']); ?>">
			<img src="<?php echo esc_url($grid_first_section['grid-image']['url']); ?>" alt="<?php echo esc_attr($grid_first_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_first_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_first_section['grid-sub-title']; ?>
				</p>
				<button>Discover</button>
			</div>
		</a>
		<!-- category card -->
		<a class="card" href="<?php echo esc_url($grid_second_section['grid-link']); ?>">
			<img src="<?php echo esc_url($grid_second_section['grid-image']['url']); ?>" alt="<?php echo esc_attr($grid_second_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_second_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_second_section['grid-sub-title']; ?>
				</p>
				<button>Discover</button>
			</div>
		</a>
		<!-- category card -->
		<a class="card" href="<?php echo esc_url($grid_third_section['grid-link']); ?>">
			<img src="<?php echo esc_url($grid_third_section['grid-image']['url']); ?>" alt="<?php echo esc_attr($grid_third_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_third_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_third_section['grid-sub-title']; ?>
				</p>
				<button>Discover</button>
			</div>
		</a>
		<!-- category card -->
		<a class="card" href="<?php echo esc_url($grid_fourth_section['grid-link']); ?>">
			<img src="<?php echo esc_url($grid_fourth_section['grid-image']['url']); ?>" alt="<?php echo esc_attr($grid_fourth_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_fourth_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_fourth_section['grid-sub-title']; ?>
				</p>
				<button>Discover</button>
			</div>
		</a>
		<!-- category card -->
		<a class="card" href="<?php echo esc_url($grid_fifth_section['grid-link']); ?>">
			<img src="<?php echo esc_url($grid_fifth_section['grid-image']['url']); ?>" alt="<?php echo esc_attr($grid_fifth_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_fifth_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_fifth_section['grid-sub-title']; ?>
				</p>
				<button>Discover</button>
			</div>
		</a>
		<!-- category card -->
		<a class="card" href="<?php echo esc_url($grid_sixth_section['grid-link']); ?>">
			<img src="<?php echo esc_url($grid_sixth_section['grid-image']['url']); ?>" alt="<?php echo esc_attr($grid_sixth_section['grid-image']['alt']); ?>">
			<div class="card-content">
				<h2>
					<?php echo $grid_sixth_section['grid-title']; ?>
				</h2>
				<p>
					<?php echo $grid_sixth_section['grid-sub-title']; ?>
				</p>
				<button>Discover</button>
			</div>
		</a>
	</div>
	<!-- /content -->
</main>
<!-- main END -->

<?php get_footer(); ?>