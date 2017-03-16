  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/slit-slider-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/slit-slider-custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/idangerous.swiper.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/yamm.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap-slider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/device-mockups2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main-responsive.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/theme_meadow.css">
     <link href="<?php echo base_url(); ?>assets/css/alertifyjs/css/alertify.css" rel="stylesheet" type="text/css" media="all" >
      <style type="text/css">
    .requerido_name {display: none;color: red;}
    .requerido_phone {display: none;color:red}
    .requerido_email {display: none;color: #EE0000;}
    .requerido_comment {display: none;color: #EE0000;}

</style>
      <style type="text/css">
        .fondo_galeria_encabezado {
            background-image: url('<?php echo base_url(); ?>assets/img/arq_01.jpg');

          }
      </style>
        <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/alertifyjs/alertify.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/alertifyjs/alertify.min.js"></script>
    <noscript>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/styleNoJs.css">

    </noscript>

<table id="allProductos"
                       class=" table table-bordered table-condensed table-striped shop-table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Producto</th>
                            <!-- <th>Descripción</th>-->
                            <th>Cantidad</th>
                            <th style="text-align: right;">Precio</th>
                            <th style="text-align: right;">Total</th>
                            <!--<th style="text-align: right;">Eliminar</th>-->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                        $pos=0;
                        foreach($productos as $producto)
                        {
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <a title="" href="#"
                                   onclick="EliminarProductoLista(<?php  echo $pos; ?>)"  class="remove-button">
                                    <span class="fa-stack fa-md">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <a href="#" class="img-prod">
                                    <img src="<?php echo $producto['imagen']; ?>"
                                         alt="Dublin Blue Shirt" width="45" class="img-responsive">
                                </a>
                                <?php echo $producto['nombre']; ?>
                            </td>
                            <!-- <td><?php echo $producto['descripcion']; ?></td>-->
                            <td>
                                <input type="text" value="<?php echo $producto['cantidad']; ?>" name="" class="qty">
                            </td>
                            <td style="text-align: right;">
                                <?php echo '$ '.decimales_ceros($producto['precio'],2); ?>
                            </td>
                            <td style="text-align: right;">
                                <?php echo '$ '.decimales_ceros($producto['total'],2); ?>
                            </td>
                        <!--<td style="text-align: right;">
                                <a href="#" class="btn btn-primary btn-xs"
                                    onclick="EliminarProductoLista(<?php  echo $pos; ?>)">Eliminar</a>
                            </td>-->
                        </tr>
                            <?php $i=$i+1; $pos=$pos+1; } ?>
                    </tbody>
                </table>



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

    <script src="<?php echo base_url(); ?>assets/js/alertifyjs/alertify.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert/sweetalert.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
