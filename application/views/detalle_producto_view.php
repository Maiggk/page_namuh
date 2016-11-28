<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>NAMUH | Productos</title>

      <!-- ====Favicons==== -->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
      <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">


      <meta name="description" content="Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- <link href="< ?php echo base_url(); ?>assets/css/menuNamuh.css" rel="stylesheet">-->
     <link href="<?php echo base_url(); ?>assets/css/menuNamuh/menu.css" rel="stylesheet">
<!--       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap.min.css">-->
<!--          <link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets/css/googlecss.css">-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/font-awesome.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!--    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main-responsive.css">


            <!--menu movil-->
 <link href="<?php echo base_url(); ?>assets/galeria/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/galeria/assets/css/style-responsive.css" rel="stylesheet">
                 <link href="<?php echo base_url(); ?>assets/css/photoswipe_master/default-skin/default-skin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/photoswipe.css" rel="stylesheet">
     <style type='text/css'>
.subM
{
}
.subM1
{
}
</style>

<!--<script src="<?php echo base_url(); ?>assets/js/photoswipe_master/jquery.min.js"></script>-->
      <style type="text/css">
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
  text-align: center;
}

body {
  display: table;
  width: 100%;
}
.clase-general{
  display: table-row;
}
 footer {
   background: #222222; height: 200px;
 }


          .font_color{
              color: #909090;
          }
          .font_color_slogan{
              color: #909090;
          }
          .font_color:hover{
              color: #fff;
          }
          .mantente_contacto{
              color: #ffffff;
                font-family: 'Montserrat', sans-serif;
              font-size: 0.8em;
                line-height: 1.1;
          }
          .color_icon {
  color:#909090;
}
          .color_icon:hover {
  color:#fff;
}

 </style>
  </head>

<body>

     <header class="header black-bg" >

            <div class="top-menu">
            <br/>
                <ul   class="nav pull-right top-menu" style="text-align:center;">

                </ul>

            <div class="">

                <div class="col-md-12">

                    <a href="<?php echo base_url(); ?>index.php/galeria" > <img src="<?php echo base_url();?>assets/img/logo_Main.png" width="15%"> </a>
                    <div class="row"> </div>
                </div>
            <div class="col-md-6">

           <!-- <a href="#" class="btn btn-default"   id="return1" role="button">Menu</a>-->

            </div>
                </div>
            <!--<ul class="nav pull-right top-menu">

                </ul>
            <!--
            <ul class="nav pull-right top-menu">
                     <a href="#" class="btn btn-default" onclick="ocultar()" style="display:none;" id="return2" role="button">Ocultar Menu</a>
                </ul>-->
            </div>
    </header>

<!--

<section class="header-section fading-title parallax">
    <div class="section-shade sep-top-5x sep-bottom-3x">
      <div class="container">
        <div class="section-title upper light">
          <h2 class="small-space">Políticas</h2>
        </div>
      </div>
    </div>
 </section>-->

<div class="sep-top-2x">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">



                  <!--Seccion boton regresar -->
                    <div class="row mt">
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">
                              <a id="regresar" href="<?php echo base_url(); ?>index.php/galeria" style="color: #ffffff; background-color: #909090; border-color: #dad7d7;" name="regresar" class="btn btn-primary">Regresar a productos</a>
                        </div>
                    </div>
                    <!--End Seccion boton regresar -->




                <!--Seccion de galeria -->

                 <?php $i=0; ?>
                <div class="picture col-xs-12 col-sm-8  col-md-8 col-lg-8" id="imagenesdiv">
                    <figure itemprop="associatedMedia" itemscope>
                    <!--Vista de imagen general-->

                    <div class="row">
                        <div class=" col-xs-12 col-sm-12  col-md-12 col-lg-12">
                            <?php    $widthImageGRande=getimagesize(base_url()."assets/uploads/productos/".$datosProducto->imagen);
                           // echo '$w'.$widthImageGRande[0];

                            ?>
                             <a onclick="IMGindex(<?php echo $i; ?>)"  href="<?php echo base_url();?>assets/uploads/productos/<?php echo $datosProducto->imagen; ?>"  itemprop="contentUrl" data-size="<?php echo $widthImageGRande[0].'x'.$widthImageGRande[1]; ?>" data-index="<?php echo $i; ?>">
    <img src="<?php echo base_url();?>assets/uploads/productos_baja_resolucion/<?php echo $datosProducto->imagen; ?>" class="sep-top-sm img-responsive" itemprop="thumbnail" alt="">
                            </a>


                        </div>
                    </div>
                    <!--End vista de imagen general-->
                    <!--Vistas en miniatura del producto-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">
                            <?php $i=1; ?>
                            <?php foreach ($detallesProducto as $detalleProducto){
                            $widthImage=getimagesize(base_url()."assets/uploads/galeria_productos/".$detalleProducto->ruta_foto);
                            ?>
                            <div class="col-xs-4 col-sm-2  col-md-2 col-lg-2">

                                  <a onclick="IMGindex(<?php echo $i; ?>)" href="<?php echo base_url();?>assets/uploads/galeria_productos/<?php echo $detalleProducto->ruta_foto; ?>"  itemprop="contentUrl" data-size="<?php echo $widthImage[0].'x'.$widthImage[1]; ?>" data-index="<?php echo $i; ?>">
                                        <img src="<?php echo base_url();?>assets/uploads/galeria_productos/<?php echo $detalleProducto->ruta_foto; ?>" class="sep-top-sm img-responsive" itemprop="thumbnail" alt="">
                                </a>
                            </div>

                              <?php $i=$i+1;  } ?>

                        </div>
                    </div>
                    </figure>
                    <!--End vistas en miniatura del producto-->
                </div>
                <!--end seccion de galeria -->

                <!--seccion descripcion del producto -->
                <div class="col-xs-12 col-sm-4  col-md-4 col-lg-4">


                    <div class="row mt">
                    </div>
                    <!--Seccion descripcion del producto -->
                     <div class="row mt">
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12" style="border : solid 1px #dad7d7; height : 290px; overflow : auto; ">

                             <p class="lead" >
                                 <label><center><strong><?php echo $datosProducto->nombre;?></strong></center></label></p>

                                 <label style="text-align:justify;"><?php echo $datosProducto->descripcion;?></label>
                            </p>



                        </div>
                    </div>
                    <!--End Seccion descripcion del producto -->

                     <!--Seccion precio producto -->
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">

                             <div class="openSans" style="font-style: italic;font-size: 15px;text-align:center">

                                <?php if( $datosProducto->estado_promocion==0){ ?>
                            Precio:<span><?php echo '$'.decimales_ceros($datosProducto->precio,2);?></span><br>
                                <?php } ?>
                                <?php if( $datosProducto->estado_promocion==1){ ?>
                                 Precio:<span style="text-decoration: line-through;"><?php echo '$'.decimales_ceros($datosProducto->precio,2);?></span><br>
                                <strong> Precio de promoción :<span><?php echo '$'.decimales_ceros($datosProducto->nuevo_precio,2);?></span></strong><br>

                                <?php } ?>
                                <br>

                            </div>
                        </div>
                    </div>
                    <!--End Seccion precio producto -->

                </div>
                <!--END seccion descripcion del producto -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

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
            <button class="pswp__button pswp__button--arrow--left" style="position: fixed;" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" style="position: fixed;"  title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>









    </div>
</div>






    <footer class="clase-general">
        <div class="col-md-12" style="text-align:center"><br>
                <img src="<?php echo base_url();?>assets/img/logo_Main.png" width="15%"><br>
                <label class="font_color_slogan">Cada Pieza es una Historia</label>
                <h6 class="mantente_contacto">MANTENTE EN CONTACTO CON NOSOTROS</h6>
                    <ul class="social-icon sep-top-xs">
                        <li ><a  href="https://es.pinterest.com/Namuhmex/" target="_blank" class="color_icon fa fa-pinterest fa-2x"></a></li>
                        <li><a href="https://www.facebook.com/Namuh-384417778289934/?fref=tsw" target="_blank" class=" color_icon fa fa-facebook fa-2x"></a></li>
                        <li><a href="https://goo.gl/Cj84JC" target="_blank" class="color_icon fa fa-map-marker fa-2x"></a></li>
                        <li><a href="https://www.instagram.com/namuhmex/" target="_blank" class="color_icon fa fa-instagram fa-2x"></a></li>
                    </ul>
            <div class="row" style="text-align:center">
                <div class="col-md-4 col-md-offset-4">
                    <div class="col-md-2">
                        <small class=""><br><a class="font_color" href="<?php echo base_url(); ?>index.php/nosotros">Nosotros</a></small>
                    </div>
                    <div class="col-md-2">
                        <small class=""><br><a  class="font_color" href="<?php echo base_url(); ?>index.php/politicas">Políticas</a></small>
                    </div>
                    <div class="col-md-2">
                          <small class=""><br><a  href="<?php echo base_url(); ?>index.php/divulgacion/prensa" class="font_color">Prensa</a></small>
                    </div>
                     <div class="col-md-6">
                        <small class=""><br><a class="font_color" href="<?php echo base_url(); ?>index.php/unete">Únete a nuestro equipo</a></small><br>
                     </div>

                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <small class="font_color">
                   </small>
                 <small style="color:#fff">Copyright 2016 © NAMUH. Todos los derechos reservados. Desarollado por <a class="font_color"  target="_blank" href="http://cerbero.com.mx">Cerbero Soluciones Informáticas</a></small>

            </div>
        </div>
    </footer>

</body>






<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/jquery.min.js"></script>

<!--  Scripts scroll  -->
<script src="<?php echo base_url(); ?>assets/js/helios/jquery.dropotron.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/jquery.scrolly.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/jquery.onvisible.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/skel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php echo base_url(); ?>assets/js/helios/main.js"></script>

  <!-- <script src="<?php echo base_url(); ?>assets/css/menuNamuh/menu.js" type="text/javascript"></script> -->
 <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap.js"></script>
<!--    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/script-min.js"></script>-->


        <!--menu movil
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/galeria/assets/js/jquery.dcjqaccordion.2.7.js"></script>
   <script src="<?php echo base_url(); ?>assets/galeria/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/galeria/assets/js/common-scripts.js"></script>-->
      <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe-ui-default.min.js"></script>

<!--<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>-->
<script>
    var indiceImagen=0;
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
           // alert(index+value.src);
        });

        $pic.on('click', 'figure', function(event) {


            var $index = $(this).index();


       event.preventDefault();
            var options = {
                index: indiceImagen,
                bgOpacity: 0.7,
                showHideOpacity: true
            }

            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });
    });
});

    function IMGindex(num)
    {
       // alert(num);
        indiceImagen=num;
    }

    </script>


