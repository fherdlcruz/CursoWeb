<?php
/*Template Name: Home-2*/
/**
 * The template for displaying all pages
 *
 * @package pangolion-ui
 */

get_header('home');
  
 get_template_part( 'template-parts/content', 'slider' );

 echo do_shortcode('[contact-form-7 id="35" title="newsletter"]' ); 

 get_template_part( 'template-parts/content', 'market' );
 ?>
 


<?php
// get_sidebar();
get_footer('home');
