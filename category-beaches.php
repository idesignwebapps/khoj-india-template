<?php
/*
Template Name: Coast and Beaches Category
Template Post Type: page
*/
?>

<?php
$args = array(
    'category_name' => 'coast-and-beaches',
    'posts_per_page' => -1,
    'orderby' => 'date title',
    'order' => 'ASC'
);
$the_query = new WP_Query($args);
?>

<?php get_header(); ?>

<!-- main START -->
<main>
    <!-- page heading -->
    <section class="bg-dark text-center category coast-and-beaches">
        <div class="container container--narrow">
            <p><a href="<?php echo get_home_url(); ?>/locations/">Locations</a>&sol;<a href="<?php echo get_home_url(); ?>/locations/coast-and-beaches-2/">Coast and Beaches</a></p>
            <h2>Coast And Beaches</h2>
        </div>
    </section>
    <!-- content -->
    <?php if ($the_query->have_posts()) : ?>
        <div class="category-container">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <!-- location card -->
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
        <!-- /content -->
</main>
<!-- main END -->

<?php get_footer(); ?>