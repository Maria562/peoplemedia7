<?php
/*
Template Name: Suggested Itineraries
*/

get_header(); ?>

<?php $currentLanguage  = get_bloginfo('language');
  if ( $currentLanguage == "hy-AM" ) :  ?>
	<style>
		.itineraries-action-box h3 {
				font-size: 22px;
}
	</style>

<?php endif; ?>
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
    <article class="itineraries-action">
        <div class="itineraries-action-content container">

                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                );


                $releaseQuery = new WP_Query( $args );



                if ( $releaseQuery->have_posts() ) :
                    while ( $releaseQuery->have_posts() ) :
                        $releaseQuery->the_post(); ?>
                    <div class="row for_reverse">
                        <div class="itineraries-action-box col-md-5 col-12 order-1">
                            <img src="<?php echo get_field('front_page_image'); ?>" alt="See Also">
                            <div class="see-also-border-left"></div>
                        </div>
                        <div class="itineraries-action-box col-md-7 col-12 order-2">
                            <a href="<?php echo get_permalink(); ?>"> <h3><?php the_title(); ?></h3></a>
                            <p><?php echo get_field('short_description_of_blog_post'); ?></p>
                            <?php if ( $currentLanguage == "hy-AM" ) :  ?>
        <a href="<?php echo get_permalink(); ?>"><button> Իմանալ ավելին</button></a>
  <?php endif; ?>
 <?php if ( $currentLanguage == "en-US" ) :  ?>
      <a href="<?php echo get_permalink(); ?>"> <button>Learn more</button></a>
  <?php endif; ?>
                          
                        </div>
                    </div>

                    <?php endwhile; endif; ?>

            </div>
        </div>
    </article>
    <article class="full-page-image">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190693.10203292355!2d45.36069796794091!3d39.76462617593233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40157104b86ecf61%3A0x4237fae735ebf913!2sYeghegnadzor%2C+Armenia!5e0!3m2!1sen!2s!4v1510827025318"
                frameborder="0" style="border:0" allowfullscreen></iframe>
    </article>

</section>


<?php get_footer(); ?>
