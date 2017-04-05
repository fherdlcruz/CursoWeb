

 <!--Market-->
<?php $query = new WP_Query( 'showposts=8&orderby=post_date&order=desc' ); ?>

     <div id="market_home" class="container-fluid">
      <div class="container pb-md">
        <div class="h3 row"><strong>Inmuebles Recientes</strong></div>
         <div class="row center">

   	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      global $post;
  		$thumbID = get_post_thumbnail_id( $post->ID );
  		$imgDestacada = wp_get_attachment_image_src( $thumbID, 'largue' );
  		$precio =  get_field('precio');
  		$banio =  get_field('banios');
  		$cuarto =  get_field('cuartos');
  		$direccion =  get_field('direccion');

  	?>
	
          <div class="col-md-4">
            <div class="well well-sm">
              <div>
            	  	<div class="tipo">
          	     	<?php foreach((get_the_category()) as $category) {
		        		if ($category->cat_name != "Slider") { echo $category->cat_name;} } ?>
  	    			</div>
              <div class="img-mkt">
              	<img src="<?php echo $imgDestacada[0] ?>" alt="a" class="img-responsive"></div>
	            </div>
              <div class="info-mkt">
                  <a href="<?php echo get_permalink(); ?>" class="h4"> <strong><?php the_title(); ?></strong></a>
                  <div class="direccion-mkt">
                    <p><?php echo $direccion ?></p>
                  </div>
              </div>
              <div class="info-footer-mkt">
                <div class="h5 pull-left"><strong><?php echo $precio ?> <small>MXN</small></strong></div>
                <a href="<?php echo get_permalink(); ?>" class="btn btn-primary pull-right">Ver detalle</a>
              </div>
            </div>
          </div>
          
 <?php endwhile; ?>
  </div>
</div>
</div>
 <?php wp_reset_postdata();
 else : ?>

 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
<!--Fin Market-->