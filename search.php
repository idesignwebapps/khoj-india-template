<?php get_header(); ?>

<!-- content START -->
<div id="content">

<?php if (have_posts()) : ?>

	<h2>Search Results</h2>

	<div class="navigation">
		<div><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>


	<?php while (have_posts()) : the_post(); ?>
		<article>
			<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_time('l, F jS, Y') ?></p>
			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		</article>

	<?php endwhile; ?>

	<div class="navigation">
		<div><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

<?php else : ?>

	<article>		<h2>Nothing Found</h2>		<p>Try a different search?.</p>		<?php include (TEMPLATEPATH . "/searchform.php"); ?>	</article>

<?php endif; ?>

</div>
<!-- content END -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>