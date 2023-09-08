<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main id="home">
	<?php $first_section = get_field('section-1');
	$hero_image = get_field('hero-image');
	$second_section = get_field('section-2');
	$third_section = get_field('section-3');
	$fourth_section = get_field('section-4');
	$fifth_section = get_field('section-5');
	$sixth_section = get_field('section-6'); ?>
	<section>
		<h2><?php echo $first_section['heading']; ?></h2>
		<p><?php echo $first_section['sub-heading']; ?></p>
		<a href="<?php echo esc_url($first_section['cta']); ?>">Get Started</a>
	</section>
	<img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
	<section>
		<h3><?php echo $second_section['heading']; ?></h3>
	</section>
	<section>
		<figure><img src="<?php echo esc_url($third_section['section-image']['url']); ?>" alt="<?php echo esc_attr($third_section['section-image']['alt']); ?>">
		</figure>
		<div class="content-container">
			<h3><?php echo $third_section['heading']; ?></h3>
			<p><?php echo $third_section['sub-heading']; ?></p>
			<a href="<?php echo esc_url($third_section['section-link']); ?>">Open Locations</a>
		</div>
	</section>
	<section>
		<figure>
			<img src="<?php echo esc_url($fourth_section['section-image']['url']); ?>" alt="<?php echo esc_attr($fourth_section['section-image']['alt']); ?>">
		</figure>
		<div class="content-container">
			<h3><?php echo $fourth_section['heading']; ?></h3>
			<p><?php echo $fourth_section['sub-heading']; ?></p>
			<a href="<?php echo esc_url($fourth_section['section-link']); ?>">Open Featurette</a>
		</div>
	</section>
	<section>
		<figure>
			<img src="<?php echo esc_url($fifth_section['image']['url']); ?>" alt="<?php echo esc_attr($fifth_section['image']['alt']); ?>">
		</figure>
		<div class="content-container">
			<h3><?php echo $fifth_section['heading']; ?></h3>
			<p><?php echo $fifth_section['sub-heading']; ?></p>
			<a href="<?php echo esc_url($fifth_section['section-link']); ?>">Open Khoj Map</a>
		</div>
	</section>
	<section>
		<h3><?php echo $sixth_section['heading']; ?></h3>
		<a href="<?php echo esc_url($sixth_section['community-link']); ?>">Join Khoj Community</a>
	</section>
</main>

<?php get_footer(); ?>