<?php get_header(); ?>

<!-- main START -->
<main>
	<!-- page heading -->
	<section class="bg-dark text-center locations-container">
		<div class="container container--narrow">
			<p><a href="<?php echo get_home_url(); ?>">Khoj</a>&sol;<a href="<?php echo get_home_url(); ?>">Home</a></p>
			<h2>Home</h2>
		</div>
	</section>
	<!-- content -->
	<?php the_content(); ?>
	<!-- /content -->
</main>
<!-- main END -->

<?php get_footer(); ?>