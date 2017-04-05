<!--Carousel-->

<?php $query = new WP_Query( 'cat=3&&posts_per_page=3' ); ?>
<div id="content-carousel">
  <div id="header-carousel">
 	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<?php global $post;
		$thumbID = get_post_thumbnail_id( $post->ID );
		$imgDestacada = wp_get_attachment_image_src( $thumbID, 'largue' );
		$precio =  get_field('precio');
		$banio =  get_field('banios');
		$cuarto =  get_field('cuartos');
	?>
    <div style="background-image:url(<?php echo $imgDestacada[0] ?>)" class="bg">
      <div class="info-carousel">
        <div class="container">
          <div class="text-bg">
            <div class="h1"> <strong><?php the_title(); ?></strong></div>
            <div class="info">
            </div>
            	<p><?php the_field('direccion'); ?></p>
          </div>
          <ul class="steps">
            <li title="Baños"><?php echo $banio; ?></li>
            <li title="Recamaras"><?php echo $cuarto; ?></li>
            <li title="Precio"><?php echo $precio; ?></li>
          </ul><a href="<?php echo get_permalink(); ?>"class="btn btn-primary btn-lg">Más información</a>
        </div>
      </div>
    </div>
 <?php endwhile; ?>
  </div>
</div>
 <?php wp_reset_postdata();
 else : ?>

 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
<!--Fin Carousel-->