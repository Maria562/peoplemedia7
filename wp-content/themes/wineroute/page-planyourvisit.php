<?php
/*
Template Name: Plan your visit
*/

get_header(); ?>



<section>
    <article class="intro">
        <?php if (have_rows('add_images',$post->ID)) : ?>
        <?php while (have_rows('add_images',$post->ID)) : the_row(); ?>
        <img src="<?php the_sub_field('image'); ?>" alt="Intro">
        <div class="intro-content container">
            <h1><?php the_field('slider_title',$post->ID); ?></h1>
            <p>
                <?php the_field('short_description',$post->ID); ?>
            </p>
            <hr>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>
    <?php

    while ( have_posts() ) : the_post();

        the_content($post->ID);

    endwhile;
    ?>

     <article class="visit-places">
        <div class="visit-places-content container">
            <div class="visit-places-box-main">
                <div class="row">
                    <div class="visit-places-box col-lg-4 col-md-6 col-12">
                        <img src="/wp-content/themes/wineroute/images/visit-a.png" alt="Visit" class="img-fluid">
                        <a href="<?php echo pll_e('Getting to Vayots Dzor path')?>"><?php echo pll_e('Getting to Vayots Dzor')?></a>
                      
                    </div>
                    <div class="visit-places-box col-lg-4 col-md-6 col-12">
                        <img src="/wp-content/themes/wineroute/images/visit-b.png" alt="Visit" class="img-fluid">
                        <a href="<?php echo pll_e('Festivals and Events path')?>"><?php echo pll_e('Festivals and Events')?></a>
                       
                    </div>
                 
                    <div class="visit-places-box col-lg-4 col-md-6 col-12">
                        <img src="/wp-content/themes/wineroute/images/visit-d.png" alt="Visit" class="img-fluid">
                        <a href="<?php echo pll_e('Hotels and B&Bspath')?>"><?php echo pll_e('Hotels and B&Bs')?></a>
                      
                    </div>
                    <div class="visit-places-box col-lg-4 col-md-6 col-12">
                        <img src="/wp-content/themes/wineroute/images/visit-e.png" alt="Visit" class="img-fluid">
                        <a href="<?php echo pll_e('Suggested Itineraries path')?>"><?php echo pll_e('Suggested Itineraries')?></a>
                      
                    </div>
                    <div class="visit-places-box col-lg-4 col-md-6 col-12">
                        <img src="/wp-content/themes/wineroute/images/visit-f.png" alt="Visit" class="img-fluid">
                        <a href="<?php echo pll_e('Vayots Dzor Travel Guide path')?>"><?php echo pll_e('Vayots Dzor Travel Guide')?></a>
                      
                    </div>
                    <div class="visit-places-box col-lg-4 col-md-6 col-12">
                        <img src="/wp-content/themes/wineroute/images/visit-g.png" alt="Visit" class="img-fluid">
                        <a href="<?php echo pll_e('Sites and Attractions in Vayots Dzor path')?>"><?php echo pll_e('Sites and Attractions in Vayots Dzor')?></a>
                     
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>









<?php get_footer(); ?>
