<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stepForm/styles.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalertAdmin/sweetalert.css'; ?>">
<script text="text/javascript" src="<?php echo base_url().'assets/js/sweetalert/sweetalert.min.js'; ?>"></script>

<!-- start: WIZARD DEMO -->
<div class="">
    <div class="row">
        <div class="col-md-12">
            <h5 class="over-title margin-bottom-15">Wizard <span class="text-bold">demo</span></h5>
            <p>
                Some textboxes in this example is required.
            </p>
            <!-- start: WIZARD FORM -->
            <form action="#" role="form" class="smart-wizard" id="form">
                <div id="wizard" class="swMain">
				<!-- start: WIZARD SEPS -->
				    <ul>
				        <li>
				            <a href="#step-1">
				                <div class="stepNumber">
								    1
								</div>
				                <span class="stepDesc"><small> Personal Information </small></span>
				            </a>
				        </li>
				        <li>
				            <a href="#step-2">
								<div class="stepNumber">
				                    2
								</div>
								<span class="stepDesc"> <small> Create an account </small></span>
				            </a>
				        </li>
				        <li>
				            <a href="#step-3">
				                <div class="stepNumber">
								    3
								</div>
								<span class="stepDesc"> <small> Billing details </small> </span>
				            </a>
				        </li>
				        <li>
				            <a href="#step-4">
				                <div class="stepNumber">
				                    4
								</div>
				                <span class="stepDesc"> <small> Complete </small> </span>
				            </a>
				        </li>
				    </ul>
				<!-- end: WIZARD SEPS -->
				<!-- start: WIZARD STEP 1 -->
				    <div id="step-1">
				        <div class="row">
				            <div class="col-md-12">
				                <div class="col-md-6 padding-30">
								    <h2 class="StepTitle"><i class=""></i>Productos</h2>
								        <p>
								            This is an added measure against fraud and to help with billing issues.
								        </p>
								        <p class="text-small">
								            Enter security questions in case you lose access to your account.
								        </p>
								</div>
                                <div class="col-md-6">
                                    <div class="form-group">
								        <a href="#" class="btn btn-primary btn-o next-step btn-wide pull-right">
																Contiuar<i class="fa fa-arrow-circle-right"></i>
				                        </a>
				                    </div>
				                </div>
				            </div>
                            <div class="col-md-12">
                                <table id="allProductos" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th style="text-align: right;">Precio</th>
                                            <th style="text-align: right;">Total</th>
                                            <th style="text-align: right;">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    $pos=0;
                                    foreach($productos as $producto)
                                    { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $producto['nombre']; ?></td>
                                            <td><?php echo $producto['descripcion']; ?></td>
                                            <td><?php echo $producto['cantidad']; ?></td>
                                            <td style="text-align: right;">
                                                <?php echo decimales_ceros($producto['precio'],2); ?>
                                            </td>
                                            <td style="text-align: right;">
                                                <?php echo decimales_ceros($producto['total'],2); ?>
                                            </td>
                                            <td style="text-align: right;">
                                                <a href="#" class="btn btn-primary btn-xs"
                                                   onclick="EliminarProductoLista(<?php  echo $pos; ?>)">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php $i=$i+1; $pos=$pos+1; } ?>
                                    </tbody>
                                </table>
                            </div>

				        </div>
				    </div>
				<!-- end: WIZARD STEP 1 -->
				<!-- start: WIZARD STEP 2 -->
				    <div id="step-2">
				        <div class="row">
				            <div class="col-md-12">
                                <div class="col-md-4">
				                <div class="form-group">
                                    <center>
				                    <!--<button class="btn btn-primary btn-o back-step btn-wide   btn-xs">-->
                                     <a href="#" class="btn btn-primary btn-o  back-step btn-wide   btn-xs">
								        <i class="fa fa-circle-arrow-left"></i> Regresar
								    </a>
                                    </center>
								    <!--  <button class="btn btn-primary btn-o next-step btn-wide pull-right">
								        Next <i class="fa fa-arrow-circle-right"></i>
								    </button>-->
								</div>
				                </div>
				                <div class="padding-30 col-md-8">
								    <h3 class="StepTitle">
                                        Seleccionar forma de pago. <span class="text-large block"></span>
                                    </h3>
								    <p>
								        You’ll enjoy personal services and great benefits including:
								    </p>
								    <p class="text-small">
								        <ul class="no-margin">
								            <li>
                                                <a href="#"
                                                onclick="advertenciaMetodoPago(1)" class="btn btn-primary btn-sm next-step">
                                                    Tiendas de conveniencia
                                                </a>
                                                 <!--       <a href="<?php echo base_url(); ?>index.php/Metodo_tiendas"
                                                           class="btn btn-primary btn-sm">
                                                            Tiendas de conveniencia
                                                        </a>-->
                                                <br/>
                                                <br/>
								            </li>
								            <li>
                                                <a href="#"
                                                onclick="advertenciaMetodoPago(2)" class="btn btn-primary btn-sm next-step">
                                                    Bancos
                                                </a>
                                                <!--        <a href="<?php echo base_url(); ?>index.php/Metodo_banco"
                                                           class="btn btn-primary btn-sm">Bancos</a>-->
                                                <br/>
                                                <br/>
								            </li>
                                            <li>
                                                <a href="#"
                                                onclick="advertenciaMetodoPago(3)" class="btn btn-primary btn-sm next-step">
                                                    Método tarjeta
                                                </a>
                                                <!--
                                                        <a href="<?php echo base_url(); ?>index.php/Metodo_tarjeta"
                                                           class="btn btn-primary btn-xs">Método tarjeta</a>-->
								            </li>
								        </ul>
								    </p>
								</div>


				            </div>
                           <!-- <div class="col-md-12">
                                <div class="col-md-12">
                                    <br/>
                            <br/>
                            <br/>
                                    <div class="col-md-4">
                                        <center>
                                            <a href="<?php echo base_url(); ?>index.php/Metodo_tarjeta"  class="btn btn-primary btn-sm">Método tarjeta</a>
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <a href="<?php echo base_url(); ?>index.php/Metodo_tiendas"  class="btn btn-primary btn-sm">
                        Tiendas de conveniencia
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <a href="<?php echo base_url(); ?>index.php/Metodo_banco"  class="btn btn-primary btn-sm">Bancos</a>
                                        </center>
                                    </div>
                                </div>
                            </div>-->

				        </div>
				    </div>
				<!-- end: WIZARD STEP 2 -->
                <!-- start: WIZARD STEP 3 -->
				    <div id="step-3">
				        <div class="row">
				            <div class="col-md-12">
				                <div class="col-md-8 padding-30">
								    <h2 class="StepTitle">Enter billing details</h2>
								        <p class="text-large">
								            You will need to enter your billing address and select your payment method.
								        </p>
								        <p class="text-small">
								            You can use most major credit card, as well as PayPal.
								        </p>
								</div>
                                <div class="col-md-4">
				                <div class="form-group">
                                    <a href="#" class="btn btn-primary btn-o  back-step btn-wide pull-left btn-xs">
								   <!-- <button class="btn btn-primary btn-o back-step btn-wide pull-left btn-xs">-->
								        <i class="fa fa-circle-arrow-left"></i> Back
								    </a>
                                     <a href="#" class="btn btn-primary btn-o  next-step btn-wide pull-right btn-xs">
								    <!--<button class="btn btn-primary btn-o next-step btn-wide pull-right btn-xs">-->
								        Next <i class="fa fa-arrow-circle-right"></i>
								    </a>
								</div>
				            </div>
				            </div>
                            <div id="resultado"  class="col-md-12">

                            </div>

				        </div>
				    </div>
				<!-- end: WIZARD STEP 3 -->
				<!-- start: WIZARD STEP 4 -->
				    <div id="step-4">
				        <div class="row">
				            <div class="col-md-12">
				                <div class="text-center">
								    <h1 class=" ti-check block text-primary"></h1>
								    <h2 class="StepTitle">Congratulations!</h2>
								    <p class="text-large">
								        Your tutorial is complete.
								    </p>
								    <p class="text-small">
								        Thank you for your registration. Your transaction has been completed, and a receipt for your purchase has been emailed to you.  You may log into your account to view details of this transaction.
								    </p>
								    <a class="btn btn-primary btn-o go-first" href="javascript:void(0)">
								        Back to first step
								    </a>
								</div>
				            </div>
				        </div>
				    </div>
				<!-- end: WIZARD STEP 4 -->
				</div>
            </form>
            <!-- end: WIZARD FORM -->
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/stepForm/jquery-smart-wizard/jquery.smartWizard.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: JavaScript Event Handlers for this page -->
<script src="<?php echo base_url(); ?>assets/stepForm/form-wizard.js"></script>

<script>
    jQuery(document).ready(function()
    {
        FormWizard.init();
    });
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
               // parent.location.href="<?php echo base_url();?>index.php/Admin/clasificacion";
            },
            error: function (obj, error, objError){
                alert("Error: " + objError);
            }
            });
    }
    function advertenciaMetodoPago(opcion)
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
               redirigirMetodoPago(opcion);
            } else
            {

            }
        }
        );
    }
    function redirigirMetodoPago(opcion)
    {
       $.ajax({
            type: "POST",
            data:{
                opcionPago: opcion
            },
            url:"<?= site_url('opcionDePago') ?>",
            async: true,
            success: function(response)
            {
             $('#resultado').html(response);
               // parent.location.href="<?php echo base_url();?>index.php/Admin/clasificacion";
            },
            error: function (obj, error, objError){
                alert("Error: " + objError);
            }
            });
    }




</script>
