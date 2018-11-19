<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="site-main-container">
    <?php
          $postidleft = get_field('header_right__left',146);
          $postidrighttop = get_field('header_right',146);
          $postidrightbottom = get_field('header_right__bottom',146);
          $mardik = get_field('mardik',146);
          $arcax = get_field('arcax',146);
          $motivacia = get_field('motivacia',146);
          $turizm = get_field('turizm',146);
          $multimedia = get_field('multimedia',146);

    ?>
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row small-gutters">
                <div class="col-lg-8 top-post-left">
                    <a  href="<?php echo get_permalink($postidleft[0]); ?>">
                    <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <?php if ( get_field('top_left_image',$postidleft[0])!= ""): ?>
                        <img class="img-fluid" src="<?php echo get_field('top_left_image',$postidleft[0])?>" alt="<?php echo get_the_title($postidleft[0]); ?>">
                        <?php else: ?>
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($postidleft[0]); ?>" alt="<?php echo get_the_title($postidleft[0]); ?>">
                        <?php endif; ?>
                    </div>
                    </a>
                    <div class="top-post-details">
                        <ul class="tags">
                            <?php
                            $id = $postidleft[0];
                            $terms = get_the_terms($postidleft[0], 'category');
                            foreach ($terms as $term) {
                                if ($term->parent !=0) {
                                    echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                }
                            }

                            ?>
                        </ul>
                        <a href="<?php echo get_permalink($postidleft[0]); ?>">
                            <h3><?php echo get_the_title($postidleft[0]); ?></h3>
                        </a>
                        <ul class="meta">
                            <a href="<?php echo get_permalink($postidleft[0]); ?>">
                            <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$postidleft[0]) ?></li>
                            <?php
                            if ( get_comments_number( $postidleft[0]) != 0): ?>
                                <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $postidleft[0])?></li>
                            <?php endif ?>
                            </a>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 top-post-right">
                    <a  href="<?php echo get_permalink($postidrighttop[0]); ?>">
                    <div class="single-top-post">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <?php if ( get_field('right_image_top',$postidrighttop[0])!= ""): ?>
                                <img class="img-fluid" src="<?php echo get_field('right_image_top',$postidrighttop[0])?>" alt="<?php echo get_the_title($postidleft[0]); ?>">
                            <?php else: ?>
                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($postidrighttop[0]); ?>" alt="<?php echo get_the_title($postidleft[0]); ?>">
                            <?php endif; ?>
                        </div>
                    </a>
                        <div class="top-post-details">
                            <ul class="tags">
                                <?php
                                $id = $postidrighttop[0];
                                $terms = get_the_terms($postidrighttop[0], 'category');
                                foreach ($terms as $term) {
                                    if ($term->parent !=0) {
                                        echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                    }
                                }

                                ?>
                            </ul>
                            <a href="<?php echo get_permalink($postidrighttop[0]); ?>">
                                <h4><?php echo get_the_title($postidrighttop[0]); ?></h4>
                            </a>
                            <ul class="meta">
                                <a href="<?php echo get_permalink($postidrighttop[0]); ?>">
                                    <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$postidrighttop[0]) ?></li>
                                    <?php
                                    if ( get_comments_number( $postidrighttop[0]) != 0): ?>
                                        <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $postidrighttop[0])?></li>
                                    <?php endif ?>
                                </a>
                            </ul>
                        </div>

                    </div>
                    <div class="single-top-post mt-10">
                        <a  href="<?php echo get_permalink($postidrightbottom[0]); ?>">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <?php if ( get_field('right_image_bottom',$postidrightbottom[0])!= ""): ?>
                                <img class="img-fluid" src="<?php echo get_field('right_image_bottom',$postidrightbottom[0])?>" alt="<?php echo get_the_title($postidleft[0]); ?>">
                            <?php else: ?>
                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($postidrightbottom[0]); ?>" alt="<?php echo get_the_title($postidleft[0]); ?>">
                            <?php endif; ?>
                        </div>
                        </a>
                        <div class="top-post-details">
                            <ul class="tags">
                                <?php
                                $id = $postidrightbottom[0];
                                $terms = get_the_terms($postidrightbottom[0], 'category');
                                foreach ($terms as $term) {
                                    if ($term->parent !=0) {
                                        echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                    }
                                }

                                ?>
                            </ul>
                            <a href="<?php echo get_permalink($postidrightbottom[0]); ?>">
                                <h4><?php echo get_the_title($postidrightbottom[0]); ?></h4>
                            </a>
                            <ul class="meta">
                                <a href="<?php echo get_permalink($postidrighttop[0]); ?>">
                                    <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$postidrighttop[0]) ?></li>
                                    <?php
                                    if ( get_comments_number( $postidrighttop[0]) != 0): ?>
                                        <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $postidrighttop[0])?></li>
                                    <?php endif ?>
                                </a>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap">
                        <a href="/peoplemedia/topics/մարդիկ/"> <h4 class="title">Մարդիկ</h4></a>
                        <div class="row mt-20 medium-gutters">
                            <div class="col-lg-6 single-popular-post">

                                <div class="feature-img-wrap relative">
                                    <a  href="<?php echo get_permalink($mardik[0]); ?>">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($mardik[0]); ?>" alt="<?php echo get_the_title($mardik[0]); ?>">
                                    </div>
                                    </a>
                                    <ul class="tags">
                                        <?php
                                        $id = $mardik[0];
                                        $terms = get_the_terms($mardik[0], 'category');
                                        foreach ($terms as $term) {
                                            if ($term->parent==3) {
                                                echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                            }
                                        }

                                        ?>
                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink($mardik[0]); ?>">
                                <div class="details">
                                        <h4><?php echo get_the_title($mardik[0]); ?></h4>
                                    <ul class="meta">
                                            <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$mardik[0]) ?></li>
                                            <?php
                                            if ( get_comments_number( $mardik[0]) != 0): ?>
                                                <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $mardik[0])?></li>
                                            <?php endif ?>
                                    </ul>
                                    <p class="excert">
                                        <?php echo  get_field('short_description', $mardik[0]) ?>
                                    </p>
                                </div>
                                </a>
                            </div>

                            <?php if($mardik[1]!=0) :?>
                           <div class="col-lg-6 single-popular-post">

                                <div class="feature-img-wrap relative">
                                    <a  href="<?php echo get_permalink($mardik[1]); ?>">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($mardik[1]); ?>" alt="<?php echo get_the_title($mardik[1]); ?>">
                                        </div>
                                    </a>
                                    <ul class="tags">
                                        <?php
                                        $id = $mardik[1];
                                        $terms = get_the_terms($mardik[1], 'category');
                                        foreach ($terms as $term) {
                                            if ($term->parent==3) {
                                                echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                            }
                                        }

                                        ?>
                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink($mardik[1]); ?>">
                                    <div class="details">
                                        <h4><?php echo get_the_title($mardik[1]); ?></h4>
                                        <ul class="meta">
                                            <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$mardik[1]) ?></li>
                                            <?php
                                            if ( get_comments_number( $mardik[1]) != 0): ?>
                                                <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $mardik[1])?></li>
                                            <?php endif ?>
                                        </ul>
                                        <p class="excert">
                                            <?php echo  get_field('short_description', $mardik[1]) ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End popular-post Area -->

                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap mt-30">
                        <a href="/peoplemedia/topics/արցախ/"> <h4 class="title">Արցախ</h4></a>
                        <div class="row mt-20 medium-gutters">
                            <div class="col-lg-6 single-popular-post">

                                <div class="feature-img-wrap relative">
                                    <a  href="<?php echo get_permalink($arcax[0]); ?>">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($arcax[0]); ?>" alt="<?php echo get_the_title($arcax[0]); ?>">
                                        </div>
                                    </a>
                                    <ul class="tags">
                                        <?php
                                        $id = $arcax[0];
                                        $terms = get_the_terms($arcax[0], 'category');
                                        foreach ($terms as $term) {
                                            if ($term->parent==11) {
                                                echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                            }
                                        }

                                        ?>
                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink($arcax[0]); ?>">
                                    <div class="details">
                                        <h4><?php echo get_the_title($arcax[0]); ?></h4>
                                        <ul class="meta">
                                            <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$arcax[0]) ?></li>
                                            <?php
                                            if ( get_comments_number( $arcax[0]) != 0): ?>
                                                <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $arcax[0])?></li>
                                            <?php endif ?>
                                        </ul>
                                        <p class="excert">
                                            <?php echo  get_field('short_description', $arcax[0]) ?>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <?php if($arcax[1]!=0) :?>
                                <div class="col-lg-6 single-popular-post">

                                    <div class="feature-img-wrap relative">
                                        <a  href="<?php echo get_permalink($arcax[1]); ?>">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($arcax[1]); ?>" alt="<?php echo get_the_title($arcax[1]); ?>">
                                            </div>
                                        </a>
                                        <ul class="tags">
                                            <?php
                                            $id = $arcax[1];
                                            $terms = get_the_terms($arcax[1], 'category');
                                            foreach ($terms as $term) {
                                                if ($term->parent==11) {
                                                    echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                                }
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                    <a href="<?php echo get_permalink($arcax[1]); ?>">
                                        <div class="details">
                                            <h4><?php echo get_the_title($arcax[1]); ?></h4>
                                            <ul class="meta">
                                                <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$arcax[1]) ?></li>
                                                <?php
                                                if ( get_comments_number( $arcax[1]) != 0): ?>
                                                    <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $arcax[1])?></li>
                                                <?php endif ?>
                                            </ul>
                                            <p class="excert">
                                                <?php echo  get_field('short_description', $arcax[1]) ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End popular-post Area -->


                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap mt-30">
                        <a href="/peoplemedia/topics/մոտիվացիա/"> <h4 class="title">Մոտիվացիա</h4></a>
                        <div class="row mt-20 medium-gutters">
                            <div class="col-lg-6 single-popular-post">

                                <div class="feature-img-wrap relative">
                                    <a  href="<?php echo get_permalink($motivacia[0]); ?>">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($motivacia[0]); ?>" alt="<?php echo get_the_title($motivacia[0]); ?>">
                                        </div>
                                    </a>
                                    <ul class="tags">
                                        <?php
                                        $id = $motivacia[0];
                                        $terms = get_the_terms($motivacia[0], 'category');
                                        foreach ($terms as $term) {
                                            if ($term->parent==8) {
                                                echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                            }
                                        }

                                        ?>
                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink($motivacia[0]); ?>">
                                    <div class="details">
                                        <h4><?php echo get_the_title($motivacia[0]); ?></h4>
                                        <ul class="meta">
                                            <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$motivacia[0]) ?></li>
                                            <?php
                                            if ( get_comments_number( $motivacia[0]) != 0): ?>
                                                <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $motivacia[0])?></li>
                                            <?php endif ?>
                                        </ul>
                                        <p class="excert">
                                            <?php echo  get_field('short_description', $motivacia[0]) ?>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <?php if($motivacia[1]!=0) :?>
                                <div class="col-lg-6 single-popular-post">

                                    <div class="feature-img-wrap relative">
                                        <a  href="<?php echo get_permalink($motivacia[1]); ?>">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($motivacia[1]); ?>" alt="<?php echo get_the_title($motivacia[1]); ?>">
                                            </div>
                                        </a>
                                        <ul class="tags">
                                            <?php
                                            $id = $motivacia[1];
                                            $terms = get_the_terms($motivacia[1], 'category');
                                            foreach ($terms as $term) {
                                                if ($term->parent==8) {
                                                    echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                                }
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                    <a href="<?php echo get_permalink($motivacia[1]); ?>">
                                        <div class="details">
                                            <h4><?php echo get_the_title($motivacia[1]); ?></h4>
                                            <ul class="meta">
                                                <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$motivacia[1]) ?></li>
                                                <?php
                                                if ( get_comments_number( $motivacia[1]) != 0): ?>
                                                    <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $motivacia[1])?></li>
                                                <?php endif ?>
                                            </ul>
                                            <p class="excert">
                                                <?php echo  get_field('short_description', $motivacia[1]) ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End popular-post Area -->

                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap mt-30">
                        <a href="/peoplemedia/topics/տուրիզմ/"> <h4 class="title"><span>Տուրիզմ</span></h4></a>
                        <div class="row mt-20 medium-gutters">
                            <div class="col-lg-6 single-popular-post">

                                <div class="feature-img-wrap relative">
                                    <a  href="<?php echo get_permalink($turizm[0]); ?>">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($turizm[0]); ?>" alt="<?php echo get_the_title($turizm[0]); ?>">
                                        </div>
                                    </a>
                                    <ul class="tags">
                                        <?php
                                        $id = $turizm[0];
                                        $terms = get_the_terms($turizm[0], 'category');
                                        foreach ($terms as $term) {
                                            if ($term->parent==14) {
                                                echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                            }
                                        }

                                        ?>
                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink($turizm[0]); ?>">
                                    <div class="details">
                                        <h4><?php echo get_the_title($turizm[0]); ?></h4>
                                        <ul class="meta">
                                            <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$turizm[0]) ?></li>
                                            <?php
                                            if ( get_comments_number( $turizm[0]) != 0): ?>
                                                <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $turizm[0])?></li>
                                            <?php endif ?>
                                        </ul>
                                        <p class="excert">
                                            <?php echo  get_field('short_description', $turizm[0]) ?>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <?php if($turizm[1]!=0) :?>
                                <div class="col-lg-6 single-popular-post">

                                    <div class="feature-img-wrap relative">
                                        <a  href="<?php echo get_permalink($turizm[1]); ?>">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($turizm[1]); ?>" alt="<?php echo get_the_title($turizm[1]); ?>">
                                            </div>
                                        </a>
                                        <ul class="tags">
                                            <?php
                                            $id = $turizm[1];
                                            $terms = get_the_terms($turizm[1], 'category');
                                            foreach ($terms as $term) {
                                                if ($term->parent==14) {
                                                    echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                                }
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                    <a href="<?php echo get_permalink($turizm[1]); ?>">
                                        <div class="details">
                                            <h4><?php echo get_the_title($turizm[1]); ?></h4>
                                            <ul class="meta">
                                                <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$turizm[1]) ?></li>
                                                <?php
                                                if ( get_comments_number( $turizm[1]) != 0): ?>
                                                    <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $turizm[1])?></li>
                                                <?php endif ?>
                                            </ul>
                                            <p class="excert">
                                                <?php echo  get_field('short_description', $turizm[1]) ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End popular-post Area -->

                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap mt-30">
                        <a href="/peoplemedia/topics/մուլտիմեդիա/"> <h4 class="title">Մուլտիմեդիա</h4></a>
                        <div class="row mt-20 medium-gutters">
                            <div class="col-lg-6 single-popular-post">

                                <div class="feature-img-wrap relative">
                                    <a  href="<?php echo get_permalink($multimedia[0]); ?>">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($multimedia[0]); ?>" alt="<?php echo get_the_title($multimedia[0]); ?>">
                                        </div>
                                    </a>
                                    <ul class="tags">
                                        <?php
                                        $id = $multimedia[0];
                                        $terms = get_the_terms($multimedia[0], 'category');
                                        foreach ($terms as $term) {
                                            if ($term->parent==19) {
                                                echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                            }
                                        }

                                        ?>
                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink($multimedia[0]); ?>">
                                    <div class="details">
                                        <h4><?php echo get_the_title($multimedia[0]); ?></h4>
                                        <ul class="meta">
                                            <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$multimedia[0]) ?></li>
                                            <?php
                                            if ( get_comments_number( $multimedia[0]) != 0): ?>
                                                <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $multimedia[0])?></li>
                                            <?php endif ?>
                                        </ul>
                                        <p class="excert">
                                            <?php echo  get_field('short_description', $multimedia[0]) ?>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <?php if($multimedia[1]!=0) :?>
                                <div class="col-lg-6 single-popular-post">

                                    <div class="feature-img-wrap relative">
                                        <a  href="<?php echo get_permalink($multimedia[1]); ?>">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($multimedia[1]); ?>" alt="<?php echo get_the_title($multimedia[1]); ?>">
                                            </div>
                                        </a>
                                        <ul class="tags">
                                            <?php
                                            $id = $multimedia[1];
                                            $terms = get_the_terms($multimedia[1], 'category');
                                            foreach ($terms as $term) {
                                                if ($term->parent==19) {
                                                    echo ' <li><a class="cat-hover" href=' . get_term_link($term) . '><span>' . $term->name . '</span></a></li>';
                                                }
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                    <a href="<?php echo get_permalink($multimedia[1]); ?>">
                                        <div class="details">
                                            <h4><?php echo get_the_title($multimedia[1]); ?></h4>
                                            <ul class="meta">
                                                <li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y',$multimedia[1]) ?></li>
                                                <?php
                                                if ( get_comments_number( $multimedia[1]) != 0): ?>
                                                    <li><span class='lnr lnr-bubble'></span><?php echo get_comments_number( $multimedia[1])?></li>
                                                <?php endif ?>
                                            </ul>
                                            <p class="excert">
                                                <?php echo  get_field('short_description', $multimedia[1]) ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End popular-post Area -->


                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>




<?php get_footer(); ?>
