<link href="<?php echo base_url(); ?>assets/css/photoswipe_master/default-skin/default-skin.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/photoswipe.css" rel="stylesheet">
<!--<script src="<?php echo base_url(); ?>assets/js/photoswipe_master/jquery.min.js"></script>-->
      

      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space"><?php echo $nombre_album; ?></h2>
              <p class="lead">Postales</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      
        <!--Inicio sección del cuerpo-->
                 
       
			


             <div class="sep-top-2x sep-bottom-md">
                    <div class="container">
                      <div class="row">
                            <div class="col-md-12" style="text-align:center">
                  <div class="form-group sep-top-xs">
                      <a href="<?php echo base_url(); ?>#postales" class="btn btn-primary"><i class="fa fa-undo" ></i> &nbsp;Regresar álbums</a>
                  </div>
                                <br>
                    </div>
                        <div class="picture">
                          <?php 
                            
                            
                              //print_r( $widthImage[0]);
                          $j=1;
                            $k=1;
                          foreach($imagenes_postal as $postal){ 
                            $widthImage=getimagesize(base_url()."assets/uploads/postales/postales_albums/".$postal->ruta_imagen);
                            ?>
                            <div class="col-md-4">
                       
                               <figure itemprop="associatedMedia" itemscope>
                                    <a href="<?php echo base_url(); ?>assets/uploads/postales/postales_albums/<?php echo $postal->ruta_imagen;?>" itemprop="contentUrl" data-size="<?php echo $widthImage[0].'x'.$widthImage[1]; ?>" data-index="<?php echo $k;?>" data-informeichon="<?php echo $postal->pie_foto; ?>">
                                        <img src="<?php echo base_url(); ?>assets/uploads/postales/postales_albums/<?php echo $postal->ruta_imagen;?>" width="350" itemprop="thumbnail" alt="Beach">
                                    </a>
                                </figure>
                                <p style="text-align:center"><?php echo $postal->pie_foto; ?></p>
                            </div>
                            <?php if($k%3==0){ ?>
                                <div class="clearfix vivisible-lg" style="z-index:-1"></div><br>
                            <?php } ?>
                          <?php $k=$k+1; } ?>
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
        <!--Fin sección del cuerpo-->
      
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
    


      
 

  

