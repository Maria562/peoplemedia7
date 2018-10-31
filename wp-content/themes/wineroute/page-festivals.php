<?php
/*
Template Name: Festivals and Events
*/

get_header(); ?>

<section class="festival-page">


    <article class="intro">
        <?php if (have_rows('add_images',$post->ID)) : ?>
        <?php while (have_rows('add_images',$post->ID)) : the_row(); ?>
        <img src="<?php the_sub_field('image'); ?>" alt="Intro">
        <div class="intro-content container">
            <h1 class="festivals"> <?php the_field('slider_title',$post->ID); ?> </h1>
            <p>
                <?php the_field('short_description',$post->ID); ?>
            </p>
            <hr>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>




    <article class="info">
        <div class="info-content festival-info container">
            <hr>
                <?php

                while ( have_posts() ) : the_post();

                    the_content($post->ID);

                endwhile;
                ?>
        </div>
    </article>



    <?php $args = array(
        'post_type' => 'festival',
        'posts_per_page' => -1,
    );


    $releaseQuery = new WP_Query( $args );



    if ( $releaseQuery->have_posts() ) :
        while ( $releaseQuery->have_posts() ) :
            $releaseQuery->the_post(); ?>


            <article class="festivals">
                <div class="festivals-content container">
                    <h3><?php the_title(); ?></h3>
                    <hr>
                   <p><?php echo the_field('description'); ?> </p>
                </div>
            </article>


            <?php if (get_field('image_part_width')) : ?>
            <article class="part-page-image margin_image container">
                <img src="<?php echo the_field('image_part_width'); ?>" alt="Part Page">
            </article>
           <?php endif; ?>

    <?php if (get_field('image_full_width')) : ?>
            <article class="full-page-image margin_image">
                <img src="<?php echo the_field('image_full_width'); ?>" alt="Part Page">
            </article>
    <?php endif; ?>
    <?php if (get_field('youtube_url')) : ?>
            <article class="part-page-video container">
                <iframe width="560" height="315" src="<?php echo the_field('youtube_url'); ?>"
                        frameborder="0" allowfullscreen></iframe>
            </article>
        <?php endif; ?>

            <?php if (get_field('slider')) : ?>
            <article class="part-page-image margin_image container">
                <?php echo the_field('slider'); ?>
            </article>
        <?php endif; ?>

        <?php endwhile; endif; ?>

</section>













<?php get_footer(); ?>
