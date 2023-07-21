<?php get_header(); ?>

<!-- content START -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		<?php endwhile;
	endif; ?>
			</article>
</div>
<!-- content END -->

<?php get_footer(); ?>