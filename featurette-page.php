<?php
/*
Template Name: Featurette Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main>
        <section class="bg-dark text-center locations-container">
                <div class="container container--narrow">
                        <p><a href="<?php echo get_home_url(); ?>">Khoj</a>&sol;<a href="<?php echo get_home_url(); ?>/featurette/">Featurette</a></p>
                        <h2>Featurette</h2>
                </div>
        </section>
        <section class="bg-white about-section">
                <div class="container">
                        <p><?php echo esc_html(get_field('page-intro')); ?></p>
                        <div class="featurette-section">
                                <?php $content_1 = get_field('content-1');
                                $content_2 = get_field('content-2');
                                $content_3 = get_field('content-3');
                                $content_4 = get_field('content-4');
                                $content_5 = get_field('content-5');
                                $content_6 = get_field('content-6');
                                $content_7 = get_field('content-7');
                                $content_8 = get_field('content-8');
                                $content_9 = get_field('content-9');
                                $content_10 = get_field('content-10');
                                $content_11 = get_field('content-11');
                                $content_12 = get_field('content-12'); ?>

                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_1['youtube-link']['url']); ?>" title="<?php echo $content_1['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_1['youtube-title']; ?></p>
                                        <p><?php echo $content_1['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_2['youtube-link']['url']); ?>" title="<?php echo $content_2['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_2['youtube-title']; ?></p>
                                        <p><?php echo $content_2['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_3['youtube-link']['url']); ?>" title="<?php echo $content_3['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_3['youtube-title']; ?></p>
                                        <p><?php echo $content_3['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_4['youtube-link']['url']); ?>" title="<?php echo $content_4['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_4['youtube-title']; ?></p>
                                        <p><?php echo $content_4['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_5['youtube-link']['url']); ?>" title="<?php echo $content_5['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_5['youtube-title']; ?></p>
                                        <p><?php echo $content_5['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_6['youtube-link']['url']); ?>" title="<?php echo $content_6['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_6['youtube-title']; ?></p>
                                        <p><?php echo $content_6['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_7['youtube-link']['url']); ?>" title="<?php echo $content_7['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_7['youtube-title']; ?></p>
                                        <p><?php echo $content_7['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_8['youtube-link']['url']); ?>" title="<?php echo $content_8['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_8['youtube-title']; ?></p>
                                        <p><?php echo $content_8['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_9['youtube-link']['url']); ?>" title="<?php echo $content_9['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_9['youtube-title']; ?></p>
                                        <p><?php echo $content_9['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_10['youtube-link']['url']); ?>" title="<?php echo $content_10['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_10['youtube-title']; ?></p>
                                        <p><?php echo $content_10['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_11['youtube-link']['url']); ?>" title="<?php echo $content_11['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_11['youtube-title']; ?></p>
                                        <p><?php echo $content_11['youtube-creator']; ?></p>
                                </div>
                                <div class="feature-card"><iframe width="560" height="315" src="<?php echo esc_url($content_12['youtube-link']['url']); ?>" title="<?php echo $content_12['youtube-title']; ?>" allowfullscreen></iframe>
                                        <p><?php echo $content_12['youtube-title']; ?></p>
                                        <p><?php echo $content_12['youtube-creator']; ?></p>
                                </div>
                        </div>
                </div>
        </section>
</main>

<?php get_footer(); ?>