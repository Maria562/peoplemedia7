<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



<section>
	<article class="intro">
		<?php if (have_rows('add_images')) : ?>
			<?php while (have_rows('add_images')) : the_row(); ?>
				<img src="<?php the_sub_field('image'); ?>" alt="Intro">
				<div class="intro-content container">
					<h1><?php the_field('slider_title'); ?></h1>
					<p>
						<?php the_field('short_description'); ?>
					</p>
					<hr>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</article>

	<?php

	while ( have_posts() ) : the_post();

		the_content();

	endwhile;
	?>

	<article class="see-also">
		<div class="see-also-content container">
			
<?php $currentLanguage  = get_bloginfo('language');

  if ( $currentLanguage == "hy-AM" ) :  ?>
     <h3>ԱՎԵԼԻՆ</h3>
  <?php endif; ?>
 <?php if ( $currentLanguage == "en-US" ) :  ?>
    <h3>SEE ALSO</h3>
  <?php endif; ?>
			<hr>
			<div class="d-flex justify-content-md-between justify-content-center flex-wrap">

				<?php $args = array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'orderby' => 'rand',
					'post__not_in' => array( $post->ID )

				);


				$releaseQuery = new WP_Query( $args );



				if ( $releaseQuery->have_posts() ) :
					while ( $releaseQuery->have_posts() ) :
						$releaseQuery->the_post(); ?>

						<div class="see-also-box">
							<div class="see-also-img">
								<img src="<?php echo get_field('front_page_image'); ?>" alt="See Also">
								<div class="see-also-border-left"></div>
							</div>
							<div class="see-also-caption">
								<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo get_field('short_description_of_blog_post'); ?></p>
<?php  if ( $currentLanguage == "hy-AM" ) :  ?>
      <a href="<?php echo get_permalink(); ?>"> <button>Իմանալ ավելին</button></a>
  <?php endif; ?>
 <?php if ( $currentLanguage == "en-US" ) :  ?>
      <a href="<?php echo get_permalink(); ?>"><button>Learn more</button></a>
  <?php endif; ?>
								
							</div>
						</div>

					<?php endwhile; endif; ?>


			</div>
		</div>
	</article>
</section>


<?php get_footer(); ?>
