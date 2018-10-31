<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
   <style>
  .our-wines-box .carousel-caption {
    height: 440px;
}
</style>


<?php if ($post->ID==347 || $post->ID==346) : ?>

	<style>
		.our-wines-box .carousel-caption {
			height: 90px;
		}

		.our-wines-box .carousel-caption p {
			text-align: center;
		}

	</style>

<?php endif; ?>


<?php if ($post->ID==349 || $post->ID==348) : ?>

	<style>
		.our-wines-box .carousel-caption {
			height: 160px;
		}


	</style>

<?php endif; ?>

<?php if ($post->ID==353 || $post->ID==352) : ?>

	<style>
		.our-wines-box .carousel-caption {
			height: 200px;
		}


	</style>

<?php endif; ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightbox.min.css">
<section>

	<article class="intro">
		<?php if (have_rows('add_images')) : ?>
		<?php while (have_rows('add_images')) : the_row(); ?>
		<img src="<?php the_sub_field('image'); ?>" alt="Intro">
		<div class="intro-content container">
			<h1><?php the_field('slider_title'); ?></h1>
			<p><?php the_field('short_description'); ?></p>
			<hr>
		</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</article>

	<article class="info">
		<div class="info-content container">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page-logo.png" alt="Page Logo">
			<h3><?php the_title(); ?></h3>
			<hr>
			<p>
               <?php the_field('description'); ?>
                
			</p>

		</div>
		<div class="our-wines-box container">
<?php $currentLanguage  = get_bloginfo('language');

  if ( $currentLanguage == "hy-AM" ) :  ?>
       <h3>Մեր գինիները</h3>
  <?php endif; ?>
 <?php if ( $currentLanguage == "en-US" ) :  ?>
       <h3>Our wines</h3>
  <?php endif; ?>
			
			<hr>
			<div id="carousel2" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">

                    <?php if (have_rows('description_slider')) : ?>
                        <?php while (have_rows('description_slider')) : the_row(); ?>

                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
                                <div class="carousel-caption">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p>
                                        <?php the_sub_field('short_description'); ?>
                                    </p>
                                </div>
                            </div>



                        <?php endwhile; ?>
                    <?php endif; ?>

				</div>
				<a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</article>

	<article class="page">
		<div class="page-content container">
<?php if ( $currentLanguage == "hy-AM" ) :  ?>
       <h3>Տեսադարան</h3>
  <?php endif; ?>
 <?php if ( $currentLanguage == "en-US" ) :  ?>
     <h3>Photo Gallery</h3>
  <?php endif; ?>
			
			<hr>
		</div>
		<div class="wineries-gallery container">
			<div class="grid row grid_height">
				<div class="grid-sizer"></div>

				<?php if (have_rows('add_gallery')) : ?>
					<?php while (have_rows('add_gallery')) : the_row(); ?>
						<div class="grid-item">
							<a href="<?php the_sub_field('image'); ?>" data-lightbox="image-1">
								<img src="<?php the_sub_field('image'); ?>" alt="gallery">
							</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</article>
	<article class="page">
		<div class="page-content container">			
<?php if ( $currentLanguage == "hy-AM" ) :  ?>
       <h3>Կոնտակտային տվյալներ</h3>
  <?php endif; ?>
 <?php if ( $currentLanguage =="en-US") :  ?>
    <h3>Contact information</h3>
  <?php endif; ?>
			<hr>
			<p>
                <?php the_field('description2'); ?>
			</p>
			<div class="contact-box container">
				<p>
					<i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field('email'); ?></p>
				<p>
					<i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('phone_number'); ?></p>
				<p>
					<i class="fa fa-globe" aria-hidden="true"></i> <?php the_field('website'); ?></p>
				<p>
					<i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('address'); ?></p>
				<?php if (get_field('open_hours') ) : ?>
				<p>
					<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_field('open_hours'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</article>
</section>




		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>




		<?php endwhile;?>



<?php get_footer(); ?>



