<?php
/*
Template Name: About Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php $about_image = get_field('about-image');
$g20_logo = get_field('g20-logo'); ?>

<!-- main START -->
<main>
    <!-- page heading -->
    <section class="bg-dark text-center locations-container">
        <div class="container container--narrow">
            <p><a href="<?php echo get_home_url(); ?>">Khoj</a>&sol;<a href="<?php echo get_home_url(); ?>/about/">About</a></p>
            <h2>About</h2>
        </div>
    </section>
    <!-- content -->
    <section class="bg-white about-section">
        <div class="container">
            <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
            <p><?php echo esc_html(get_field('about-content-1')); ?></p>
            <p><?php echo esc_html(get_field('about-content-2')); ?></p>
            <img src="<?php echo esc_url($g20_logo['url']); ?>" alt="<?php echo esc_attr($g20_logo['alt']); ?>">
            <p><?php echo esc_html(get_field('about-content-3')); ?></p>
            <p><?php echo esc_html(get_field('about-content-4')); ?></p>
            <p><?php echo esc_html(get_field('about-content-5')); ?></p>
        </div>
    </section>
    <!-- /content -->
</main>
<!-- main END -->

<?php get_footer(); ?>