<?php get_header(); ?>

<!-- content START -->
<main id="home">
	<?php the_content(); ?>
	<a href="<?php echo esc_url(get_permalink(get_page_by_path('gurez-valley'))); ?>"></a>
</main>
</body>

<?php get_footer(); ?>