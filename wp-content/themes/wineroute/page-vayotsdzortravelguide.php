<?php
/*
Template Name: Vayots Dzor Travel Guide
*/

get_header(); ?>



<section>
    <article class="intro">
        <?php if (have_rows('add_images',$post->ID)) : ?>
        <?php while (have_rows('add_images',$post->ID)) : the_row(); ?>
        <img src="<?php the_sub_field('image'); ?>" alt="Intro">
        <div class="intro-content container">
            <img src="<?php the_field('slider_title_image',$post->ID); ?>" class="intro-book-img" alt="Book">
            <h1><?php the_field('slider_title',$post->ID); ?></h1>
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
</section>









<?php get_footer(); ?>
