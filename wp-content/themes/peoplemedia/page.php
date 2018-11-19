<?php
/**
 * The template for displaying pages
 *
 
 */

get_header(); ?>


<section class="latest-post-area pb-120">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-8 post-list">
                <div class="popular-post-wrap">
                    <?php

                    while ( have_posts() ) : the_post();

                        the_content();

                    endwhile;
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>


