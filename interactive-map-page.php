<?php
/*
Template Name: Interactive Map Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<!-- main START -->
<main>
    <!-- page heading -->
    <section class="bg-dark text-center locations-container">
        <div class="container container--narrow">
            <p><a href="<?php echo get_home_url(); ?>">Khoj</a>&sol;<a href="<?php echo get_home_url(); ?>/interactive-map/">Interactive Map</a></p>
            <h2>Interactive Map</h2>
        </div>
    </section>
    <!-- content -->
    <section class="bg-white about-section">
        <div class="container interactive-map">
            <p>Interactive Map marks all of the carefully curated locations at Khoj. Use the toggle on the top left of the map to view the locations or filter them by category.</p>
            <!-- interactive map -->
            <iframe src="https://www.google.com/maps/d/embed?mid=1uYTku_MAlGWQKTIJX2PvPOvk4NwFlvU&ehbc=2E312F&noprof=1"></iframe>
            <p>For best experience, use fullscreen option on the map. Use Google Maps website for better compatibility.</p>
        </div>
    </section>
    <!-- /content -->
</main>
<!-- main END -->

<?php get_footer(); ?>