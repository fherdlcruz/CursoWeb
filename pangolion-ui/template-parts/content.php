<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pangolion-ui
 */

?>
<?php 
	 global $post;
	$thumbID = get_post_thumbnail_id( $post->ID );
	$imgDestacada = wp_get_attachment_image_src( $thumbID, 'largue' );
	$precio =  get_field('precio');
	$banio =  get_field('banios');
	$cuarto =  get_field('cuartos');
	$direccion =  get_field('direccion');
?>
<div class="row inmueble_row">
	<div class="col-md-6">
		<div class="img-archivo">
			<img src="<?php echo $imgDestacada[0] ?>" alt="">
		</div>
	</div>
	<div class="col-md-6">
		<header class="entry-header">
			<h2><?php the_title(); ?></h2>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pangolion-ui' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pangolion-ui' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<div class="direccion">
			<strong><small>Dirección:</small></strong>
			<br>
			<?php echo $direccion ?>
		</div>

		<footer>

			<p>
				<strong><small>Precio:</small></strong>
				<?php echo $precio ?>
			</p>
			<p>
				<strong><small>Baños:</small></strong>
				<?php echo $banio ?>
			</p>
			<p>
				<strong><small>Cuartos</small></strong>
				<?php echo $cuarto ?>
			</p><strong><a href="<?php echo get_permalink(); ?>"class="btn btn-primary">Más información</a></strong>
		</footer>


		
	</div>	
</div>