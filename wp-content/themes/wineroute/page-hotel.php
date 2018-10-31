<?php
/*
Template Name: Hotel
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



   

    <article class="info">
        <div class="info-content container"><img src="/wp-content/themes/wineroute/images/page-logo.png" alt="Page Logo" />

    <?php $args = array(
        'post_type' => 'hotel',
        'posts_per_page' => -1,
    );


    $releaseQuery = new WP_Query( $args );



    if ( $releaseQuery->have_posts() ) :
        while ( $releaseQuery->have_posts() ) :
            $releaseQuery->the_post(); ?>

            <div class="visit-site-info">

                    <h3><?php the_title(); ?></h3>
                    <hr/>
                   <?php if (get_field('number_of_rooms')) : ?>
                     <p><b><?php echo pll_e('Number of rooms')?></b> <span><?php echo the_field('number_of_rooms'); ?></span></p>
                   <?php endif; ?>
                <?php if (get_field('amenities')) : ?>
                    <p><b><?php echo pll_e('Amenities')?></b> <span><?php echo the_field('amenities'); ?></span></p>
                <?php endif; ?>
                <?php if (get_field('for_an_additional_fee')) : ?>
                    <p><b><?php echo pll_e('For an additional fee')?></b> <span><?php echo the_field('for_an_additional_fee'); ?></span></p>
                <?php endif; ?>
                <?php if (get_field('address')) : ?>
                    <p> <i class="fa fa-map-marker fa_icon" aria-hidden="true"></i> <span><?php echo the_field('address'); ?></span></p>
                <?php endif; ?>
                <?php if (get_field('mail')) : ?>
                    <p> <i class="fa fa-envelope fa_icon" aria-hidden="true"></i> <span><?php echo the_field('mail'); ?></span></p>
                <?php endif; ?>
                <?php if (get_field('phone')) : ?>
                    <p> <i class="fa fa-phone fa_icon" aria-hidden="true"></i>  <span>  <?php echo the_field('phone'); ?></span></p>
                <?php endif; ?>
                <?php if (get_field('website_name')) : ?>
                    <p><i class="fa fa-globe fa_icon" aria-hidden="true"></i>
                        <span><a href="<?php echo the_field('website'); ?>" target="_blank"><?php echo the_field('website_name'); ?></a></span>
                    </p>
                <?php endif; ?>
                <?php if (get_field('tripadvisor')) : ?>
                <?php echo the_field('tripadvisor'); ?>
                <?php endif; ?>
                </div>

        <?php endwhile; endif; ?>

        </div>
    </article>
</section>






<?php get_footer(); ?>
