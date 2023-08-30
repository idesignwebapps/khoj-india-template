<?php
/*
Template Name: About Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php $about_image = get_field('about-image'); ?>

<main>
    <section class="bg-dark text-center locations-container">
        <div class="container container--narrow">
            <p><a href="<?php echo get_home_url(); ?>">Khoj</a>&sol;<a href="<?php echo get_home_url(); ?>/about/">About</a></p>
            <h2>About</h2>
        </div>
    </section>
    <section class="bg-white about-section">
        <div class="container">
            <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
            <p><?php echo esc_html(get_field('about-content-1')); ?></p>
            <p><?php echo esc_html(get_field('about-content-2')); ?></p>
        </div>
    </section>
</main>

<?php get_footer(); ?>