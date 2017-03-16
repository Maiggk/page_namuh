<link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalertAdmin/sweetalert.css'; ?>">
<script text="text/javascript" src="<?php echo base_url().'assets/js/sweetalert/sweetalert.min.js'; ?>"></script>
<section class="header-section fading-title parallax">
    <div class="section-shade sep-top-5x sep-bottom-3x">
      <div class="container">
        <div class="section-title upper light">
          <h2 class="small-space"></h2>
        </div>
      </div>
    </div>
 </section>
<div class="sep-top-2x">
     <?php if(count($productos,1)>0){ ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
            </div>
        </div>
        <div class="row">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-6 col-md-6">
                <div class="cart_totals sep-top-lg">
                    <h5 class="upper">Cart Totals</h5>
                <div class="sep-top-sm">
                  <table class="table table-bordered table-condensed table-responsive">
                    <tbody>
                      <tr>
                        <td class="upper">Cart Subtotal</td>
                        <td class="upper">
                          <h5>$ <?php echo decimales_ceros($montoTotal,2); ?></h5>
                        </td>
                      </tr>
                      <tr>
                        <td class="upper">Shipping and Handling</td>
                        <td>Free Shipping</td>
                      </tr>
                      <tr class="evidence">
                        <td class="upper">
                          <h5>Order Total</h5>
                        </td>
                        <td class="upper">
                          <h5>$<?php echo decimales_ceros($montoTotal,2);?></h5>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="sep-top-sm text-right">
                    <a href="<?php echo base_url();  ?>index.php/metodoDePago" class="btn btn-primary btn-xs">
                        Continuar proceso de pago
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <br/>
            <br/>
        </div>
    </div>
    <?php }else{ ?>
    <br/>
    <br/>
    <div class="form-group">
        <center>
            <p class="text-small">
                No tiene ningún producto en su carrito, visité la sección de  productos o de click en el siguiente link:
            </p>
            <a href="<?php echo base_url(); ?>index.php/galeria"
                class="btn btn-primary btn-o btn-wide">
				Sección productos<i class="fa fa-arrow-circle-right"></i>
            </a>
        </center>
    </div>
    <?php } ?>


</div>









<script>

    function EliminarProductoLista(idProducto)
    {
        swal({
        title: "¿Está seguro que desea quitar este producto de su carrito?",
        text: "La siguiente acción quitara permanentemente el elemento seleccionado.",
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
                eliminarProducto(idProducto);
            } else
            {

            }
        }
        );
    }
    function eliminarProducto(idProducto)
    {
         $.ajax({
            type: "POST",
            data:{
                id_producto: idProducto
            },
            url:"<?= site_url('eliminarProducto') ?>",
            async: true,
            success: function(response)
            {
             $('#allProductos').html(response);
            },
            error: function (obj, error, objError){
                alert("Error: " + objError);
            }
            });
    }
</script>
