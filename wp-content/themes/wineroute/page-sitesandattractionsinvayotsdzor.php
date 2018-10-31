<?php
/*
Template Name: Sites and Attractions in Vayots Dzor
*/

get_header(); ?>

<section>
    <article class="intro">
        <?php if (have_rows('add_images',$post->ID)) : ?>
        <?php while (have_rows('add_images',$post->ID)) : the_row(); ?>
        <img src="<?php the_sub_field('image',$post->ID); ?>" alt="Intro">
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
    

    <article class="visit-site-intro">
        <div class="visit-site-intro-content container">
            <?php

            while ( have_posts() ) : the_post();

                the_content($post->ID);

            endwhile;
            ?>

        </div>
    </article>

    <article class="sites-page">
    <?php $args = array(
        'post_type' => 'sites',
        'posts_per_page' => -1,
    );


    $releaseQuery = new WP_Query( $args );



    if ( $releaseQuery->have_posts() ) :
        while ( $releaseQuery->have_posts() ) :
            $releaseQuery->the_post(); ?>


            <article class="visit-site">
                <div class="visit-site-content container">
                    <h3><?php the_title(); ?></h3>
                    <hr>
                    <p><?php echo the_field('descripition'); ?> </p>
                </div>
            <?php if (get_field('slider_part')) : ?>
                <div class="part-page-carousel">
                    <?php echo the_field('slider_part'); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('slider')) : ?>
                <div class="full-page-image width_slider">
                <?php echo the_field('slider'); ?>
                </div>
            <?php endif; ?>
            </article>



        <?php endwhile; endif; ?>

</article>

</section>

<?php get_footer(); ?>
