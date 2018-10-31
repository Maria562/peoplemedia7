<?php
/*
Template Name: Armenia's wine heritage
*/

get_header(); ?>

<section>


    <article class="intro">
        <?php if (have_rows('add_images',$post->ID)) : ?>
        <?php while (have_rows('add_images',$post->ID)) : the_row(); ?>
        <img src="<?php the_sub_field('image'); ?>" alt="Intro">
        <div class="intro-content container">
            <h1> <?php the_field('slider_title',$post->ID); ?> </h1>
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




</section>

<?php get_footer(); ?>
