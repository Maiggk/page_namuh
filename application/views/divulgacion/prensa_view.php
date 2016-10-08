<style>
	 .portada{
		width:100%;
		height:410px; 
	}
</style>
<link href="<?php echo base_url(); ?>assets/css/photoswipe_master/default-skin/default-skin.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/photoswipe.css" rel="stylesheet">
      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space">Prensa</h2>
              <!-- p class="lead">View your product</p -->
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      <!-- Start Shop Cart-->

      <!-- End Shop Cart-->

            <div class="sep-top-2x sep-bottom-md">
                <div class="container">
                  <div class="row">
                      <div class="picture">
						  <!-- Configuracion de imagenes -->
						  
							<?php foreach($caratulas as $caratula){
                                    $widthImage=getimagesize(base_url()."assets/uploads/prensa/articulos_revistas/".$caratula->foto_prensa_articulo); //Obtener la resolucion de las fotos de los articulos para el plugin
                          ?>
                          <div class="col-md-4 col-sm-6 col-xs-12 sep-bottom-lg">
                           <figure itemprop="associatedMedia" itemscope>
                           
                                    <a href="<?php echo base_url(); ?>assets/uploads/prensa/articulos_revistas/<?php echo $caratula->foto_prensa_articulo; ?>" itemprop="contentUrl" data-size="<?php echo $widthImage[0].'x'.$widthImage[1]; ?>" data-index="<?php echo $caratula->foto_prensa_caratula; ?>" data-informeichon="prueba <?php echo $caratula->foto_prensa_caratula; ?>">
                                        <img class="portada" src="<?php echo base_url(); ?>assets/uploads/prensa/caratulas_revistas/<?php echo $caratula->foto_prensa_caratula; ?>" width="350">
                                    </a>
                            </figure>
                          </div>
                          <?php } ?>
                      </div>
                  </div>
                </div>
              </div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
 
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
 
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
<!--                <button class="pswp__button pswp__button--share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>



<!-- inicio Sección de scripts para carrousel -->
            <script src="<?php echo base_url(); ?>assets/js/helios/jquery.dropotron.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/helios/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/helios/jquery.onvisible.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/helios/skel.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/helios/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url(); ?>assets/js/helios/main.js"></script>
<!-- fin Sección de scripts para carrousel -->


    



<!-- inicio Sección de scripts para photoswipe -->
     <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe-ui-default.min.js"></script>
   <script>
        var $pswp = $('.pswp')[0];
    var image = [];

    $('.picture').each( function() {
        var $pic     = $(this),
            getItems = function() {
                var items = [];
                $pic.find('a').each(function() {
                    var $href   = $(this).attr('href'),
                        $size   = $(this).data('size').split('x'),
                        $info_foto   = $(this).data('informeichon'),
                        $width  = $size[0],
                        $height = $size[1];

                    var item = {
                        src : $href,
                        w   : $width,
                        h   : $height,
                        title:$info_foto,
                    }

                    items.push(item);
                 //   console.log(item);
                });
                return items;
            }

        var items = getItems();

        $.each(items, function(index, value) {
            image[index]     = new Image();
            image[index].src = value['src'];
        });

        $pic.on('click', 'figure', function(event) {
            event.preventDefault();
            
            var $index = $( "figure" ).index( this );
            var options = {
                index: $index,
                bgOpacity: 0.7,
                showHideOpacity: true
            }
            //alert($index);
            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });
    });
      </script>
    
<!-- fin Sección de scripts para photoswipe -->


