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
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap.min.css">
<!--          <link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets/css/googlecss.css">-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/font-awesome.css">

   <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!--    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main-responsive.css">
      <link href="<?php echo base_url(); ?>assets/js/toastr/toastr.min.css" rel="stylesheet" media="screen">
<link id="primary_color_scheme" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/theme_meadow.css">

            <!--menu movil-->
 <link href="<?php echo base_url(); ?>assets/galeria/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/galeria/assets/css/style-responsive.css" rel="stylesheet">
                 <link href="<?php echo base_url(); ?>assets/css/photoswipe_master/default-skin/default-skin.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalertAdmin/sweetalert.css'; ?>">
<script text="text/javascript" src="<?php echo base_url().'assets/js/sweetalert/sweetalert.min.js'; ?>"></script>
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
                            <?php
                                $ruta="./assets/uploads/productos/".$datosProducto->imagen;
                                if(file_exists($ruta)==true)
                                {
                                $widthImageGRande=getimagesize(base_url()."assets/uploads/productos/".$datosProducto->imagen);
                            ?>
                             <a onclick="IMGindex(<?php echo $i; ?>)"  href="<?php echo base_url();?>assets/uploads/productos/<?php echo $datosProducto->imagen; ?>"  itemprop="contentUrl" data-size="<?php echo $widthImageGRande[0].'x'.$widthImageGRande[1]; ?>" data-index="<?php echo $i; ?>">
    <img src="<?php echo base_url();?>assets/uploads/productos_baja_resolucion/<?php echo $datosProducto->imagen; ?>" class="sep-top-sm img-responsive" itemprop="thumbnail" alt="">
                            </a>
                            <?php } ?>


                        </div>
                    </div>
                    <!--End vista de imagen general-->
                    <!--Vistas en miniatura del producto-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">
                            <?php $i=1; ?>
                            <?php foreach ($detallesProducto as $detalleProducto){
                            $ruta1="./assets/uploads/galeria_productos/".$detalleProducto->ruta_foto;
                                if(file_exists($ruta1)==true)
                                {
                            $widthImage=getimagesize(base_url()."assets/uploads/galeria_productos/".$detalleProducto->ruta_foto);
                            ?>
                            <div class="col-xs-4 col-sm-2  col-md-2 col-lg-2">

                                  <a onclick="IMGindex(<?php echo $i; ?>)" href="<?php echo base_url();?>assets/uploads/galeria_productos/<?php echo $detalleProducto->ruta_foto; ?>"  itemprop="contentUrl" data-size="<?php echo $widthImage[0].'x'.$widthImage[1]; ?>" data-index="<?php echo $i; ?>">
                                        <img src="<?php echo base_url();?>assets/uploads/galeria_productos/<?php echo $detalleProducto->ruta_foto; ?>" class="sep-top-sm img-responsive" itemprop="thumbnail" alt="">
                                </a>
                            </div>

                              <?php $i=$i+1; } } ?>

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
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12"
                             style="border : solid 1px #dad7d7; height : 290px; overflow : auto; ">
                             <p class="lead" >
                                 <label><center><strong><?php echo $datosProducto->nombre;?></strong></center></label>
                             </p>
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

                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 sep-top-md">
                                    <input id="cantidadProducto" type="text" value="0" name="" class="qty">
                                </div>
                                <div class="col-md-9 col-sm-6 sep-top-md">
                                    <a href="#" onclick="mensajePreventivoAgregar()" class="btn btn-primary btn-xs">
                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                    </a>
                                </div>
                            </div>
                            <br>
                            <br>
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
<script src="<?php echo base_url(); ?>assets/js/helios/jquery.dropotron.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/jquery.scrolly.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/jquery.onvisible.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/skel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/util.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helios/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe-ui-default.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/toastr/toastr.min.js"></script>

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

    function mensajePreventivoAgregar()
    {
        swal({
        title: "",
        text: "¿Desea agregar este producto a su carrito?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#656668",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Aceptar",
        closeOnConfirm: true,
        closeOnCancel: true },
        function(isConfirm)
        {
            if (isConfirm)
            {
              addCart();
            } else
            {

            }
        }
        );
    }

    function addCart()
    {
        var cantidadProductos=$('#cantidadProducto').val();
        if(cantidadProductos>0)
        {
            $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:
                {
                    cantidadProductos: cantidadProductos
                },
                url:"<?= site_url('cargarCarrito') ?>",
                // url:base+"cargarComprobanteEs",
                async: true,
                success: function(response)
                {
                    if($.isNumeric(response))
                    {

                        if(response==0)
                        {
                            //mensaje de que se agregaron exitosamente
                            mensajeExitoso(cantidadProductos);
                        }
                        if(response==1)
                        {
                            //no hay piezas suficientes
                        }
                        if(response==2)
                        {
                            //No hay piezas
                        }
                    }else
                    {
                        //
                    }

                },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                    }
                });
        }else
        {
            mensajeError();
            //debe seleccionar almenos uno para poder agregar al carrito
        }

    }

    function mensajeExitoso(TotalProductos)
    {
        var mensaje="";
        if(TotalProductos>1)
            mensaje="Se agregaron con éxito "+TotalProductos+" productos a su carrito.";
        else
             mensaje="Se agregó con éxito "+TotalProductos+" producto a su carrito.";

        Command: toastr['success'](""+mensaje+"", "")

        toastr.options = {
          "closeButton": false,
          "positionClass": "toast-top-right",
          "onclick": null,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    }
    function mensajeError()
    {
        Command: toastr['error']("Debe agregar almenos un producto.", "Operación invalida.")

        toastr.options = {
          "closeButton": false,
          "positionClass": "toast-top-right",
          "onclick": null,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    }

    </script>


 <!--    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/queryloader2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.slitslider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.bootstrap-touchspin.min.js"></script>
-->

    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/queryloader2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.ba-cond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.slitslider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/idangerous.swiper.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.fitvids.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/TweenMax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/ScrollToPlugin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.scrollmagic.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.placeholder.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.easing.1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.waitforimages.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.fillparent.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap.js"></script>

<script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.bootstrap-touchspin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap-slider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap-rating-input.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/jquery.gmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/circle_diagram.js"></script>



    <script src="<?php echo base_url(); ?>assets/js/scripts/main.js"></script>

 <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'XX-XXXXXXXX-XX', 'auto');
      ga('send', 'pageview');
    </script>
