<?php
/*
Template Name: Stories Eng
*/

get_header(); ?>



<section>

    <article class="wineries">
        <div class="wineries-content container">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="contact-box container stories">
                    <ul>
                <?php $args = array(
                    'post_type' => 'story',
                    'posts_per_page' => -1,
                );


                $releaseQuery = new WP_Query( $args );



                if ( $releaseQuery->have_posts() ) :
                    while ( $releaseQuery->have_posts() ) :
                        $releaseQuery->the_post(); ?>




                                <li>
                                    <a target="_blank" href="<?php echo the_field('url'); ?>"><?php echo the_field('link_name'); ?></a>
                                </li>






                    <?php endwhile; endif; ?>
                </ul>
            </div>
            </div>
        </div>
    </article>
</section>









<?php get_footer(); ?>
