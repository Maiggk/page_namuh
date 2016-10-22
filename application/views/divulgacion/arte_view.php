<style>
	 .portada{
		width:100%;
		height:100%;
	}
</style>
<link href="<?php echo base_url(); ?>assets/css/photoswipe_master/default-skin/default-skin.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/photoswipe.css" rel="stylesheet">
      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
           <div class="row">
                <div class="col-md-12" style="text-align:center">
<!--                   <img class="small-space" src="<?php echo base_url(); ?>assets/img/Logo_Galeria.png" width="10%"> -->
<!--                //    <h2 class="" style="text-align:center">  small-space-->
                        <img class="" src="<?php echo base_url(); ?>assets/img/Logo_Galeria.png" width="15%">
<!--                    </h2>-->
               </div>
                <div class="col-md-3"  style="float:right;">
                    <div class="ajusta_imagen_centro">

                    </div>
                </div>
            </div>

              <!-- p class="lead">View your product</p -->
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      <!-- Start Shop Cart-->

      <!-- End Shop Cart-->
      <div class="sep-top-2x">
        <div class="container">
         <div class="row">
              
              
              

            
            
                   <?php
           // var_dump($Artistas);
    $i=0;
        foreach($Artistas as $Artista)
        {
    ?> 
            
             
          
              <div class="col-md-12">
                <label class="titulos" style="text-align : justify;font-size: 15px;">
                    <?php echo $Artista['nombre_galeria'];?>
                    
                   
                  </label>
                  <br/>
             <label class="cuerpo" style="text-align : justify;"><?php echo ''.$Artista['nombreCompleto'];?></label>
             <br/>
                    <br/>
              <div class="row mt"> </div>
              </div>
           
             

  
                 
                <!-- Configuracion de imagenes -->
				<?php 
            $i=1;
            foreach($Artista['galerias'] as $galeria)
                {
                 //Obtener la resolucion de las fotos de los articulos para el plugin
                    $widthImage=getimagesize(base_url()."assets/uploads/galeria_artistas/".$galeria['foto']);
   
                ?>
                 <div class=" picture">
                   <div class="col-md-4 col-sm-4 col-lg-4  sep-bottom-lg">
                        <figure itemprop="associatedMedia" itemscope>
                            <a href="<?php echo base_url(); ?>assets/uploads/galeria_artistas/<?php echo $galeria['foto']; ?>"
                               itemprop="contentUrl" data-size="<?php echo $widthImage[0].'x'.$widthImage[1]; ?>"
                               data-index="<?php echo $galeria['foto']; ?>" data-informeichon="">
                                        <img class="portada" src="<?php echo base_url(); ?>assets/uploads/galeria_artistas/<?php echo $galeria['foto']; ?>" width="100">
                            </a>
                        </figure>
                       <div class="cuerpo">
                           <center>
                            <?php echo $galeria['detalles']; ?>
                           </center>
                       </div>
                    </div>
                 </div>
            
                <?php if($i%3==0){ ?>
            <div class="clearfix vivisible-lg" style="z-index:-1"></div>
            <?php } ?>
             <?php
                 $i=$i+1;
            } ?>
                      
 
            
            
           
       <div class="clearfix vivisible-lg" style="z-index:-1"></div>
 <?php
        }
    ?>
         </div>
        </div>
      </div>
      <!-- Start call to action section-->
      












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
