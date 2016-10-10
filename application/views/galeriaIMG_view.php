           <link href="<?php echo base_url(); ?>assets/css/photoswipe_master/default-skin/default-skin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/photoswipe.css" rel="stylesheet">
<!--<link href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" rel="stylesheet">-->
 
   
 
 
 <div class="container">
 
        <div class="row">
 
            <?php  ?>
 <?php $i=1;
              foreach($IMG as $imagen)
                {   $widthImage=getimagesize(base_url()."assets/uploads/productos/".$imagen->imagen);
               //  echo 'asc: '.$widthImage[0];
                // echo 'ddd: '.$widthImage[1];
                    ?>
             <div class="picture col-lg-4 col-md-4 col-sm-4" style="text-align:center" id="imagenesdiv">
                        <figure itemprop="associatedMedia" itemscope>
                            <a href="<?php echo base_url();?>assets/uploads/productos/<?php echo $imagen->imagen;?>"  itemprop="contentUrl" data-size="1000x667" data-index="<?php echo $i; ?>">
    <img src="<?php echo base_url();?>assets/uploads/productos_baja_resolucion/<?php echo $imagen->imagen;?>" width="230" itemprop="thumbnail" alt="">
                            </a>
                             
                            <br>
                            <div class="openSans" style="font-style: italic;font-size: 15px;text-align:center">
                            <label><?php echo $imagen->nombre;?></label><br>
                            Precio:<span><?php echo '$'.decimales_ceros($imagen->precio,2);?></span><br>
                            <span><?php echo $imagen->descripcion;?></span><br>
                             
                            </div>
                        </figure>
                 <br>
                 <br>
                </div>
            
            
            <?php if($i%3==0){ ?>
                 <div class="clearfix vivisible-lg" style="z-index:-1"></div>
            <?php } ?>

            <?php 
                  $i=$i+1;
              }
            ?>
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
 
 
 
 
 
        </section>
      </section>
 
 <!--<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>-->
   <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe-ui-default.min.js"></script>
     
<!--<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>-->
<script>
    $(document).ready(function () {
  //  alert('prueba');
    var $pswp = $('.pswp')[0];
    var image = [];
 
    $('.picture').each( function() {
        var $pic     = $(this),
            getItems = function() {
                var items = [];
                $pic.find('a').each(function() {
                    var $href   = $(this).attr('href'),
                        $size   = $(this).data('size').split('x'),
                        $width  = $size[0],
                        $height = $size[1];
 
                    var item = {
                        src : $href,
                        w   : $width,
                        h   : $height
                    }
 
                    items.push(item);
                  //  console.log(item);
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
             
            var $index = $(this).index();
            var options = {
                index: $index,
                bgOpacity: 0.7,
                showHideOpacity: true
            }
 
            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });
    });
});
    /*$('.login').fancybox({
                    maxWidth    : '750px',
                    maxHeight   : '550px',
                    autoSize    : true,
                    padding:    ['1','1','1','1'],
                    autoCenter  : true,
                    closeClick  : false,
                    openEffect  : 'elastic',
                    closeEffect : 'elastic',
                    scrollOutside:false,
                    // modal:true,
                    type: 'iframe',
                    beforeLoad:function() {
                        $('#navbar').removeClass('in');
                    },
                }); */
    </script>
