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
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_image_src($thumbID, 'largue');
$precio = get_field('precio');
$banio = get_field('banios');
$cuarto = get_field('cuartos');
$direccion = get_field('direccion');
//Obteniendo las imagenes_detalle
//Disponibles 4 imagénes.
for ($i = 0; $i < 4; $i++) {
	$temp = get_field('imagen_detalle_' . ($i + 1));
	if (!empty($temp)) {
		foreach ($temp as $val) {
			if (!is_array($val)) {
				if (strlen($val) > 10) {
					$imagenes[$i] = $val;
				}
			}
		}
	}
}
?>
<style>
	.contenedor-imagen{
		overflow:hidden;
		width: 100%;
		height: 31em;
		text-align: center;
	}
	.contenedor-detalles{
		height: 10em;
		overflow:hidden;
		width: 100%;
		text-align: center;
	}
	.imagen{
		padding: 0.5em 0.5em 0.5em 0.5em;
		border-radius: 0.5em;
		width: 80%;
	}
	.detalles{
		width: 20%;
		padding: 0.8em 0.5em 0.5em 0.5em;
		border-radius: 0.5em;
	}
	.detalles:hover{
		border-top: 2px solid #1B4978;
		border-bottom: 2px solid #1B4978;
	}
	.seleccionado{
		border-top: 2px solid #1B4978;
		border-bottom: 2px solid #1B4978;
	}

	@media screen and (max-width: 768px) {
		.contenedor-imagen{
			height: 11em;
		}
		.contenedor-detalles{
			height: 6em;
		}
	}
</style>
<div class="row inmueble_row">
	<br><br>
	<div class="col-md-12">
		<div class="contenedor-imagen">
			<img src="<?php echo $imgDestacada[0] ?>" class="imagen">
		</div>
		<?php if (!empty($imagenes)) {?>
		<div class="contenedor-detalles">
			<?php
			echo '<img src="' . $imgDestacada[0] . '" class="detalles seleccionado">';
			foreach ($imagenes as $valor) {
				echo '<img src="' . $valor . '" class="detalles">';
			}
			?>
		</div>
		<?php }?>
	</div>
	<div class="col-md-12">
		<header class="entry-header">
			<div class="text-bg">
				<div class="h3"><strong><?php the_title(); ?></strong></div>
				<div class="info">
					<p>
						<?php
						the_content(sprintf(
							/* translators: %s: Name of current post. */
							wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'pangolion-ui'), array('span' => array('class' => array()))),
							the_title('<span class="screen-reader-text">"', '"</span>', false)
							));

						wp_link_pages(array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'pangolion-ui'),
							'after' => '</div>',
							));
							?>
						</p>
					</div>
					<br>
					<div class="h4"><strong>Dirección:</strong></div>
					<p><?php echo $direccion; ?></p>
					<ul class="steps">
						<li title="Baños">
							<strong>
								<small>Baños :</small>
							</strong>
							<?php echo $banio; ?></li>
							<li title="Recamaras"><strong>
								<small>Recámaras :</small>
							</strong><?php echo $cuarto; ?></li>
							<li title="Precio"><strong>
								<small>Precio :</small>
							</strong> <?php echo $precio; ?></li>
						</ul>
					</div>
				</header>
			</div>
		</div>
	</div>

	<script>
		jQuery(document).ready(function($) {
			$(".detalles").click(function () {
				$(".detalles").each(function () {
					$(this).removeClass('seleccionado');
				});
				$(this).addClass('seleccionado');
				$(".imagen").attr('src',$(this).attr('src'));
			});
		});
	</script>
