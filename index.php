<?php get_header(); ?>

<!-- content START -->
<main>
	<section class="bg-dark text-center locations-container">
		<div class="container container--narrow">
			<p><a href="<?php echo get_home_url(); ?>">Khoj</a>&sol;<a href="<?php echo get_home_url(); ?>">Home</a></p>
			<h2>Home</h2>
		</div>
	</section>
	<?php the_content(); ?>
</main>
</body>

<?php get_footer(); ?>