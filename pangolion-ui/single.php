<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pangolion-ui
 */

get_header(); ?>

	<div id="primary" class="container">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single');

			// the_post_navigation();

		endwhile; // End of the loop.
		?>

	</div><!-- #primary -->

<?php
get_footer();
