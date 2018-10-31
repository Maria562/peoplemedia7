<?php
/**
 * The template for displaying pages
 *
 
 */

get_header(); ?>


<section>

	<article class="intro">

	</article>


	<article class="intro">

	</article>

	<article class="page">
		<div class="page-content container">


		<?php

		while ( have_posts() ) : the_post();

			the_content();

		endwhile;
		?>
			
        </div>
	</article>
</section>

<?php get_footer(); ?>


