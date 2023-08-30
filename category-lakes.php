<?php
/*
Template Name: Lakes And Waterfalls Category
Template Post Type: page
*/
?>

<?php
$args = array(
    'category_name' => 'lakes-and-waterfalls',
    'posts_per_page' => -1
);
$the_query = new WP_Query($args);
?>

<?php get_header(); ?>

<main>
    <section class="bg-dark text-center category lakes-and-waterfalls">
        <div class="container container--narrow">
            <p><a href="<?php echo get_home_url(); ?>/locations/">Locations</a>&sol;<a href="<?php echo get_home_url(); ?>/locations/lakes-and-waterfalls-2/">Lakes and Waterfalls</a></p>
            <h2>Lakes And Waterfalls</h2>
        </div>
    </section>
    <?php if ($the_query->have_posts()) : ?>
        <div class="category-container">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="category-card stacked">
                        <?php the_post_thumbnail(); ?>
                        <div class="category-content">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <?php wp_reset_query(); ?>
</main>

<?php get_footer(); ?>