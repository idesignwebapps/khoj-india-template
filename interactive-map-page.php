<?php
/*
Template Name: Interactive Map Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main>
    <section class="bg-dark text-center locations-container">
        <div class="container container--narrow">
            <p>Khoj &sol; Interactive Map</p>
            <h2>Interactive Map</h2>
        </div>
    </section>
    <section class="bg-white about-section">
        <div class="container">
            <p>Interactive Map marks all of the carefully curated locations on the website. Use the toggle on the top left of the map to view the locations or filter them by category.</p>
            <iframe src="https://www.google.com/maps/d/embed?mid=1uYTku_MAlGWQKTIJX2PvPOvk4NwFlvU&ehbc=2E312F&noprof=1"></iframe>
        </div>
    </section>
</main>

<?php get_footer(); ?>