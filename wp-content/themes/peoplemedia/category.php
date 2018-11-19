<?php
/**
 * A Simple Category Template
 */

get_header(); ?>

                <section class="latest-post-area pb-120">
                    <div class="container no-padding">
                        <div class="row">
                            <div class="col-lg-8 post-list">
                                <div class="popular-post-wrap">
                                    <?php
                                    $cat_id = get_queried_object_id();
                                    $child = get_category($cat_id);
                                    $parent = $child->parent;
                                    if ($parent == 0) {
                                        echo '<h4 class="title">';
                                        single_cat_title();
                                        echo '</h4>';
                                    } ?>

                                    <?php if (have_posts()) :
                                        while (have_posts()) : the_post(); ?>
                                                <?php if (get_field('top')) : ?>
                                                    <div class="feature-post relative">
                                                        <a href="<?php echo get_permalink(); ?>">
                                                            <div class="feature-img relative">
                                                                <div class="overlay overlay-bg"></div>
                                                                <img class="img-fluid"
                                                                     src="<?php echo get_field('top_image') ?>" alt="<?php the_title(); ?>">
                                                            </div>
                                                            <div class="details">
                                                                <ul class="tags">
                                                                    <?php
                                                                    $cat_id = get_queried_object_id();
                                                                    $id = get_the_id();
                                                                    $terms = get_the_terms($id, 'category');
                                                                    foreach ($terms as $term) {
                                                                        if ($term->parent == $cat_id) {
                                                                            echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '>' . $term->name . '</a></li>';
                                                                        }
                                                                    }
                                                                    $child = get_category($cat_id);
                                                                    $parent = $child->parent;

                                                                    if ($parent != 0) {
                                                                        echo '<li><a class="cat-hover" href=' . get_category_link($cat_id) . '>';
                                                                        single_cat_title();
                                                                        echo ' </li></a>';
                                                                    }
                                                                    ?>
                                                                </ul>
                                                                    <h3><?php the_title(); ?></h3>
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

                                                <?php endif; endwhile; endif; ?>
                                        <div class="row mt-20 medium-gutters">

                                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                            $wp_query = new WP_Query();
                                            $wp_query->query('showposts=10&post_type=post&paged='.$paged.'&cat='.$cat_id);
                                            while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
                                             <?php if (!get_field('top')) : ?>
                                                    <div class="col-lg-6 single-popular-post for-margin-bottom">
                                                        <a href="<?php echo get_permalink(); ?>">
                                                            <div class="feature-img-wrap relative">
                                                                <div class="feature-img relative">
                                                                    <div class="overlay overlay-bg"></div>
                                                                    <img class="img-fluid"
                                                                         src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                                         alt="<?php the_title(); ?>">
                                                                </div>
                                                                <ul class="tags">
                                                                    <?php
                                                                    $cat_id = get_queried_object_id();
                                                                    $id = get_the_id();
                                                                    $terms = get_the_terms($id, 'category');
                                                                    foreach ($terms as $term) {
                                                                        if ($term->parent == $cat_id) {
                                                                            echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '>' . $term->name . '</a></li>';

                                                                        }
                                                                    }

                                                                    $child = get_category($cat_id);
                                                                    $parent = $child->parent;
                                                                    if ($parent != 0) {
                                                                        echo '<li><a class="cat-hover" href=' . get_category_link($cat_id) . '>';
                                                                        single_cat_title();
                                                                        echo ' </li></a>';
                                                                    }

                                                                    ?>
                                                                </ul>
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
                                                                <p class="excert">
                                                                    <?php echo  get_field('short_description') ?>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php  endif;  endwhile; ?>

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
            </div>
    </section>


<?php get_footer(); ?>