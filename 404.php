<?php get_header(); ?>

<!-- main START -->
<main>
	<!-- page heading -->
	<section class="bg-dark text-center locations-container">
		<div class="container container--narrow">
			<p>Khoj &sol; Error</p>
			<h2>404 Error</h2>
		</div>
	</section>
	<!-- 404 error message -->
	<section class="bg-white about-section">
		<div class="container">
			<h2>404 Error</h2>
			<p>The page you are looking for does not exists</p>
			<p>Something has gone wrong and the page you're looking for can't be found.</p>
			<p>You could visit <a href="<?php echo get_home_url(); ?>">the Homepage</a> to navigate to what you're looking for.</p>
		</div>
	</section>
</main>
<!-- main END -->

<?php get_footer(); ?>