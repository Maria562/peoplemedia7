<?php
/**
 * Template part for displaying multimedia.

 */

?>

<section class="latest-post-area pb-120">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-8 post-list">
                <div class="latest-post-wrap">
                    <h4 class="cat-title"><?php  single_cat_title(); ?></h4>
                    <div class="single-latest-post row align-items-center">
                        <?php
                        $cat_id=get_queried_object_id();
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $wp_query = new WP_Query();
                        $wp_query->query('showposts=10&post_type=post&paged='.$paged.'&cat='.$cat_id);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                            <div class="col-lg-6 single-popular-post img-video">
                                <a href="<?php echo get_permalink(); ?>">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative container2">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <div class="overlaymultimedia">
                                                <div class="details text">
                                                    <h4><?php the_title(); ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details details2">
                                            <ul class="meta multi-date">
                                                <li><span class="lnr lnr-calendar-full"></span><?php the_time('F j, Y') ?></li>
                                                <?php
                                                $comments_count = wp_count_comments($post->ID);
                                                if ($comments_count->total_comments != 0)
                                                    echo " <li><span class='lnr lnr-bubble'></span>" . $comments_count->total_comments . "</li>";
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        <?php endwhile; ?>
                    </div>

                    <?php
                    global $wp_query;

                    $big = 999999999; // need an unlikely integer
                    echo '<div class="paginate-links">';
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'prev_text' => __('<<'),
                        'next_text' => __('>>'),
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) );
                    echo '</div>';
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
</section>
