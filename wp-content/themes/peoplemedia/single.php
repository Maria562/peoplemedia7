<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



<div class="site-main-container">
    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start single-post Area -->
                    <?php

                    while ( have_posts() ) : the_post(); ?>



                    <div class="popular-post-wrap single-post-wrap">
                        <div class="feature-post">
                            <div  class="feature-img-thumb feature-img   relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="<?php echo get_field('main_image') ?>" alt="">
                            </div>
                        </div>
                        <div class="content-wrap">

                            <a href="#">
                                <h3> <?php  the_title(); ?></h3>
                            </a>
                            <ul class="meta pb-20">
                                <li><span class="lnr lnr-calendar-full"></span><?php the_time('F j, Y') ?></li>

                                        <?php

                                        $comments_count = wp_count_comments($post->ID);
                                        if ($comments_count->total_comments!=0)
                                        echo " <li><span class='lnr lnr-bubble'></span>" . $comments_count->total_comments. "</li>";
                                        ?>


                            </ul>

                            <?php  the_content(); ?>
                            <div class="entry-bottom">
                                <ul class="tags mt-10">
                                    <?php
                                    $id = get_the_id();
                                    $terms = get_the_terms( $id, 'category' );
                                    // print_r( $terms );

                                    foreach($terms as $term) {
                                        if ($term->parent != 0) {
                                            echo ' <li><a href=' . get_term_link($term) . '>' . $term->name . '</a></li>';
                                        }
                                    }
                                    ?>

                                </ul>
                                <span class="categories for-display"><?php the_tags('Tags: ', ', ', ''); ?></span>
                            </div>


                            <div class="navigation-wrap justify-content-between d-flex">
                                <?php next_post(); ?>
                                <?php previous_post(); ?>
                            </div>



                            <?php

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            ?>

                            <?php  endwhile;
                            ?>




                        </div>
                    </div>
                    <!-- End single-post Area -->




                </div>
                <?php get_sidebar(); ?>
                </div>
        </div>
            <div class="mt-30">
                <div class="popular-post-wrap ">
            <h4 class="title">Նմանատիպ հոդվածներ</h4>
            <div class="single-latest-post row align-items-center">
                <?php
                $cat_id=3;
                $wp_query = new WP_Query();
                $wp_query->query('showposts=3&post_type=post&paged='.$paged.'&cat='.$cat_id);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <div class="col-lg-4 single-popular-post">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="feature-img-wrap relative">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid"
                                         src="<?php echo get_the_post_thumbnail_url(); ?>"
                                         alt="<?php the_title(); ?>">
                                </div>
                            </div>
                            <div class="details">
                                <h4><?php the_title(); ?></h4>
                                <ul class="meta">
                                    <li><span class="lnr lnr-calendar-full"></span><?php the_time('F j, Y') ?></li>
                                    <?php
                                    $comments_count = wp_count_comments($post->ID);
                                    if ($comments_count->total_comments!=0)
                                        echo " <li><span class='lnr lnr-bubble'></span>" . $comments_count->total_comments. "</li>";
                                    ?>
                                </ul>
                            </div>
                        </a>
                    </div>


                <?php endwhile; ?>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>



<section>




    <?php get_footer(); ?>
