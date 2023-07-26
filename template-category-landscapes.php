<?php
/*
Template Name: Natural Landscapes Category
Template Post Type: page
*/
?>

<?php
$args = array('category_name' => 'natural-landscapes');
$the_query = new WP_Query($args);
?>

<?php get_header(); ?>

<main>
    <section class="bg-dark text-center category natural-landscapes">
        <div class="container container--narrow">
            <p>Locations &sol; Natural Landscapes</p>
            <h2>Natural Landscapes</h2>
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