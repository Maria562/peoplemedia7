<?php
/*
Template Name: Our Wineries
*/

get_header(); ?>



<section>
    <article class="intro">

        <?php if (have_rows('add_images',$post->ID)) : ?>
        <?php while (have_rows('add_images',$post->ID)) : the_row(); ?>
        <img src="<?php the_sub_field('image'); ?>" alt="Intro">
        <div class="intro-content container">
            <h1><?php the_field('slider_title',$post->ID); ?></h1>
            <p><?php the_field('short_description',$post->ID); ?></p>
            <hr>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>


    <article class="info">
        <div class="info-content wineries-info container">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page-logo.png" alt="Page Logo">
            <?php

            while ( have_posts() ) : the_post();

                the_content($post->ID);

            endwhile;
            ?>
        </div>
    </article>



    <article class="wineries">
        <div class="wineries-content container">
            <div class="d-flex justify-content-between flex-wrap">

                <?php $args = array(
                    'post_type' => 'winery',
                    'posts_per_page' => -1,
                );


                $releaseQuery = new WP_Query( $args );



                if ( $releaseQuery->have_posts() ) :
                    while ( $releaseQuery->have_posts() ) :
                        $releaseQuery->the_post(); ?>

                    
                        <div class="wineries-box">
                        <a href="<?php echo get_permalink(); ?>">
                            <img src="<?php echo the_field('front_page_image'); ?>" alt="<?php the_title(); ?>">
                        	<span><?php the_title(); ?></span>	
                            <div class="wineries-box-border"></div>
                       </a>
                        </div>
                      


                    <?php endwhile; endif; ?>

            </div>
        </div>
    </article>
</section>

<?php get_footer(); ?>
