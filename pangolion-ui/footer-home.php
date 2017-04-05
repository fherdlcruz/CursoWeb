<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pangolion-ui
 */

?>

	</div><!-- #content -->
  <section class="container-fluid"  id="steps">
  <div class="container">
  <div class="h3 row"><strong>¿qué debo hacer?</strong></div>
    <div class="step">
      <div class="icon-steps">
        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
      </div>
      <div class="text-steps">
        <div class="h4">Selecciona</div>
      </div>
    </div>
    <div class="step">
      <div class="icon-steps">
        <i class="fa fa-paper-plane" aria-hidden="true"></i>
      </div>
      <div class="text-steps">
        <div class="h4">Contactanos</div>
      </div>
    </div>
    <div class="step">
      <div class="icon-steps">
        <i class="fa fa-handshake-o" aria-hidden="true"></i>
      </div>
      <div class="text-steps">
        <div class="h4">Contrata</div>
      </div>
    </div>
    <div class="step">
      <div class="icon-steps" id="home-icon">
        <i class="fa fa-home" aria-hidden="true"></i>    
        <i class="fa fa-check-circle" aria-hidden="true"></i>      
      </div>
      <div class="text-steps">
        <div class="h4">Listo</div>
      </div>
    </div>
  </div>
</section>

	
    <!-- Pie de Página-->
    <a href="#" aria-hidden="true" class="scrollup fa fa-arrow-up"></a>
    <footer id="footer-bg" class="footer">
      <div class="container-fluid">
        <div class="container superior">
          <div class="row">
            <div class="ib-col col-md-4 col-sm-4 col-xs-4">
              <div class="columna">
                <div class="h4">Contactanos</div>
                <ul>
                    <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                      <a href="#">ventas@gmail.com</a>
                </li>
                    <li>
                      <i class="fa fa-phone-square" aria-hidden="true"></i>
                      <a href="#">(993) 398 7964</a>
                </li>
                    <li>
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
            <a href="#">Villahermosa, Tab.</a>
          </li>
                </ul>
              </div>
            </div>
            <div class="ib-col col-md-4 col-sm-4 col-xs-4">
              <div class="columna">
                <div class="h4"> Sitio </div>
                <ul>
                  <li><a href="#">Acerca de nosotros</a></li>
                  <li><a href="#">Servicios</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </div>
            </div>
            <div class="ib-col col-md-4 col-sm-4 col-xs-4">
              <div class="row">
                <div class="ib-col columna col-md-12 col-sm-12 col-xs-6">
                  <div class="h4">Encuentranos en</div>
                  <div class="social-buttons"><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a><a href="#" class="social-button instagram"><i class="fa fa-instagram"></i></a><a href="#" class="social-button youtube"><i class="fa fa-youtube"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> 
</div><!-- #page -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick/slick.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  jQuery(document).ready(function($) {
        $('#header-carousel').slick({
          autoplay:true,
          autoplaySpeed:1600,
          dots: true,
          infinite: true,
          speed: 600,
          fade: true,
          cssEase: 'linear',
          nextArrow:'<i class="fa fa-chevron-right" aria-hidden="true" id="next-carousel"></i>',
          prevArrow:'<i class="fa fa-chevron-left" aria-hidden="true" id="prev-carousel"></i>'
      });
            $('.center').slick({
        autoplay:true,
        autoplaySpeed:1800,
        centerMode: true,
        speed: 800,
        centerPadding: '60px',
        slidesToShow: 3,
        nextArrow:'<i class="fa fa-chevron-right" aria-hidden="true" id="next-carousel"></i>',
        prevArrow:'<i class="fa fa-chevron-left" aria-hidden="true" id="prev-carousel"></i>',
        responsive: [
          {
            breakpoint: 992,
            settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2
          }
        },
        {
        breakpoint: 692,
          settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
          },
          {
        breakpoint: 392,
          settings: {
            centerMode: true,
            centerPadding: '5px',
            slidesToShow: 1
          }
          }
        ]
      });
  });
</script>
<script>

	jQuery(document).ready(function($) {
			$(window).scroll(function(){
      	    if ($(this).scrollTop() > 100) {
      	        $('.scrollup').fadeIn().addClass('bounce');
      	    } else {
      	        $('.scrollup').fadeOut().removeClass('bounce');
      	    }
      	});
      
      	$('.scrollup').click(function(){
      	    $("html, body").animate({ scrollTop: 0 }, 600);
      	    return false;
      	});
	});
</script>
<?php wp_footer(); ?>

</body>
</html>
