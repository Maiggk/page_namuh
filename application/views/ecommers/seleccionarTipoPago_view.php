<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stepForm/styles.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalertAdmin/sweetalert.css'; ?>">
<script text="text/javascript" src="<?php echo base_url().'assets/js/sweetalert/sweetalert.min.js'; ?>"></script>


<section class="header-section fading-title parallax">
    <div class="section-shade sep-top-5x sep-bottom-3x">
      <div class="container">
        <div class="section-title upper light">
          <h2 class="small-space">Selecionar un método de pago</h2>
        </div>
      </div>
    </div>
 </section>





<form class="form-horizontal" style="display:none;">
    <fieldset>
        <legend></legend>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>
            <div class="col-md-4">
                <input type="text"
                    class="form-control input-md inputText disableOnSubmit" id="apiKey"
                    value="pk_42a53c504bdd451fa783f0ce149e7e9e"
				    size="50" />
                <span class="help-block"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>
            <div class="col-md-4">
                <input type="text"
                    class="form-control input-md inputText disableOnSubmit"
                    id="id" value="mdk69ifh7gkdr8czjl2o" size="50" />
                <span class="help-block"></span>
            </div>
        </div>
    </fieldset>
</form>

<div class="sep-top-2x">
    <!--Formulario Direcciones-->
    <div class="container">
        <center>
            <a id="mostrarFormularioDirecciones" name="mostrarFormularioDirecciones" class="">Agregar direcciones</a>
        </center>
    <div class="col-md-12">
        <form id="formularioDirecciones"
              style="<?php if($imprime==0)echo 'display:none'; else echo 'display: block;'; ?>"
              action="<?php echo base_url() . 'index.php/guardarDireccionEnvio'; ?>"
              method="post" class="form-horizontal">
            <fieldset>
                <legend></legend>
                <div class="form-group">
                    <label class="col-md-12 control-label" style="text-align: center;color:red;" for="nombre">Los campos con * son obligatorios</label>
                </div>
                <div class="form-group">

                    <div class="col-md-4">
                        <label class="col-md-12 control-label"
                               style="text-align: center;" for="nombre">Nombre<span style="color:red;">*</span></label>
                        <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
                        <span class="help-block">help</span>
                        <label id="requerido_nombreServer" style="color:red;">
                            <?php echo form_error('nombre'); ?>
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label class="col-md-12 control-label"
                               style="text-align: center;" for="apPaterno">Apellido Paterno
                            <span style="color:red;">*</span></label>
                        <input id="apPaterno" name="apPaterno"
                               type="text" placeholder="Apellido Paterno" class="form-control input-md">
                        <span class="help-block">help</span>
                         <label id="requerido_apPaternoServer" style="color:red; ">
                            <?php echo form_error('apPaterno'); ?>
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="apMaterno">Apellido Materno<span style="color:red;">*</span></label>
                        <input id="apMaterno" name="apMaterno"
                               type="text" placeholder="Apellido Paterno" class="form-control input-md">
                        <span class="help-block">help</span>
                        <label id="requerido_apMaternoServer" style="color:red; ">
                            <?php echo form_error('apMaterno'); ?>
                        </label>
                    </div>

                </div>

                <!--Formulario Direcciones-->
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;" for="tipoDireccion">
                            Tipo de dirección (Ejemplo: Casa,Oficina)<span style="color:red;">*</span></label>
                        <input id="tipoDireccion" name="tipoDireccion"
                               type="text" placeholder="Tipo dirección" class="form-control input-md">
                        <span class="help-block">help</span>
                        <label id="requerido_tipoDireccionServer" style="color:red; ">
                            <?php echo form_error('tipoDireccion'); ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="country">País<span style="color:red;">*</span></label>
                        <select id="country" name="country" class="form-control"></select>
                        <span class="help-block">help</span>
                        <label id="requerido_countryServer" style="color:red;">
                            <?php echo form_error('country'); ?>
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="state">Estado/Provincia<span style="color:red;">*</span></label>
                        <select name="state" id="state" class="form-control"></select>
                        <span class="help-block">help</span>
                        <label id="requerido_stateServer" style="color:red; ">
                            <?php echo form_error('state'); ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="ciudad">Ciudad, Delegación o Municipio<span style="color:red;">*</span></label>
                        <input id="ciudad" name="ciudad" type="text"
                               placeholder="Tipo dirección" class="form-control input-md">
                        <span class="help-block">help</span>
                        <label id="requerido_ciudadServer" style="color:red; ">
                            <?php echo form_error('ciudad'); ?>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="colonia">Colonia<span style="color:red;">*</span></label>
                        <input id="colonia" name="colonia" type="text" placeholder="Colonia" class="form-control input-md">
                        <span class="help-block">help</span>
                         <label id="requerido_coloniaServer" style="color:red; ">
                            <?php echo form_error('colonia'); ?>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="cp">C.P./Código Postal:<span style="color:red;">*</span></label>
                        <input id="cp" name="cp" type="text" placeholder="Tipo dirección" class="form-control input-md">
                        <span class="help-block">help</span>
                        <label id="requerido_cpServer" style="color:red; ">
                            <?php echo form_error('cp'); ?>
                        </label>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="calle1">Calle y No.<span style="color:red;">*</span></label>
                        <input id="calle1" name="calle1"
                               type="text" placeholder="Calle y No." class="form-control input-md">
                       <!-- <input id="calle2" name="calle2"
                               type="text" placeholder="Tipo dirección" class="form-control input-md">-->
                        <span class="help-block">help</span>
                        <label id="requerido_calle1Server" style="color:red;">
                            <?php echo form_error('calle1'); ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="telefono">Teléfono (10 dígitos)<span style="color:red;">*</span></label>
                        <input id="telefono" name="telefono"
                               type="text" placeholder="Tipo dirección" class="form-control input-md">
                        <span class="help-block">help</span>
                        <label id="requerido_telefonoServer" style="color:red; ">
                            <?php echo form_error('telefono'); ?>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="extTelefono">Ext. Teléfono</label>
                        <input id="extTelefono" name="extTelefono"
                               type="text" placeholder="Tipo dirección" class="form-control input-md">
                        <span class="help-block">help</span>
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-12 control-label" style="text-align: center;"
                               for="celular">Celular (10 dígitos)<span style="color:red;">*</span></label>
                        <input id="celular" name="celular" type="text"
                               placeholder="" class="form-control input-md">
                        <span class="help-block">help</span>
                         <label id="requerido_celularServer" style="color:red; ">
                            <?php echo form_error('celular'); ?>
                        </label>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-12 control-label" style="text-align: center;" for="autorizo">
                            En caso de no poder recibir el pedido personalmente, autorizó que lo reciba:</label>
                        <input id="autorizo" name="autorizo" type="text"
                               placeholder="placeholder" class="form-control input-md">
                        <span class="help-block">help</span>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-12 control-label"
                               style="text-align: center;" for="referencia">Referencia</label>
                        <textarea class="form-control" style="resize:vertical"
                                  id="referencia" name="referencia"></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="button1id">Double Button</label>
                  <div class="col-md-8">
                    <button id="button1id" name="button1id"  type="submit" class="btn btn-success">Guardar</button>
                    <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
                  </div>
                </div>
            </fieldset>
        </form>

    </div>

    </div>
    <!--Fin Formulario Direcciones-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <a href="<?php echo base_url(); ?>index.php/recibos"  class="btn btn-primary btn-sm">
                        Historial de compras
                    </a>
                </center>
            </div>
        </div>
        <!---------->
        <!---------->
        <div class="row">
            <div id="Proceso" class="col-md-12">
            </div>
        </div>
            <!---------->
            <!---------->
            <!---------->
<!--
            <div class="embed-container">
             <iframe id="contenidoFrame" name="contenidoFrame" onchange="ajustar_alto_iframe('contenidoFrame')"  src="<?php echo base_url(); ?>index.php/cargarProcesoCompra" class="col-md-12 col-sm-12 col-xs-12" height="900">
  <p>Your browser does not support iframes.</p>
</iframe>
                </div>-->

        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="over-title margin-bottom-15">Wizard <span class="text-bold">demo</span></h5>
                    <p>
                        Some textboxes in this example is required.
                    </p>
                    <!-- start: WIZARD FORM -->
                    <form action="#" role="form" class="smart-wizard" id="form">
                       <fieldset>
                        <div id="wizard" class="swMain">
				        <!-- start: WIZARD SEPS -->
				        <ul>
				            <li>
				                <a href="#step-1">
				                    <div class="stepNumber">
								    1
								    </div>
				                    <span class="stepDesc"><small> Resumen de pedido </small></span>
				                </a>
				            </li>
				            <li>
				                <a href="#step-2">
								    <div class="stepNumber">
				                    2
								    </div>
								    <span class="stepDesc"> <small> Seleccionar dirección de envio </small></span>
				                </a>
				            </li>
				            <li>
				                <a href="#step-3">
				                    <div class="stepNumber">
								    3
								    </div>
								    <span class="stepDesc"> <small> Seleccionar metodo de pago </small> </span>
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
                                         <?php if(count($productos1,1)>0){ ?>

                                        <?php } ?>
				                    </div>
				                </div>
				                </div>
                                <div class="col-md-12">
                                    <?php if(count($productos1,1)>0){ ?>
                                    <br/>
                                    <br/>
                                    <table id="allProductos" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th style="text-align: right;">Precio</th>
                                            <th style="text-align: right;">Total</th>
                                          <!--  <th style="text-align: right;">Eliminar</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    $pos=0;
                                        $total=0;

                                    foreach($productos1 as $producto)
                                    { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <a href="#" class="img-prod">
                                                <img src="<?php echo $producto['imagen']; ?>" alt="Dublin Blue Shirt" width="45" class="img-responsive">
                                                </a>

                                                <?php echo $producto['nombre']; ?>
                                            </td>
                                            <td><?php echo $producto['descripcion']; ?></td>
                                            <td><?php echo $producto['cantidad']; ?></td>
                                            <td style="text-align: right;">
                                                <?php echo decimales_ceros($producto['precio'],2); ?>
                                            </td>
                                            <td style="text-align: right;">
                                                <?php echo decimales_ceros($producto['total'],2); ?>
                                            </td>
                                       <!--     <td style="text-align: right;">
                                                <a href="#" class="btn btn-primary btn-xs"
                                                   onclick="EliminarProductoLista(<?php  echo $pos; ?>)">Eliminar</a>
                                            </td>-->
                                        </tr>
                                    <?php $total=$total+$producto['total']; $i=$i+1; $pos=$pos+1; }

                                        ?>
                                    </tbody>
                                </table>
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
                                                      <h5>$ <?php echo decimales_ceros($total,2); ?></h5>
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
                                                      <h5>$<?php echo decimales_ceros($total,2);?></h5>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="sep-top-sm text-right">
                                                <!--<a href="<?php echo base_url();  ?>index.php/metodoDePago"
                                                   class="btn btn-primary">Proceed to Checkout</a></div>-->
                                                 <a href="#" class="btn btn-primary btn-o next-step btn-wide pull-right">
																Contiuar<i class="fa fa-arrow-circle-right"></i>
				                            </a>
                                            </div>
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
                                                <button class="btn btn-primary btn-o back-step btn-wide btn-xs">
                                                    <i class="fa fa-circle-arrow-left"></i> Regresar
                                                </button>
                                                    <!-- <a href="#" class="btn btn-primary btn-o  back-step btn-wide   btn-xs">
                                                    <i class="fa fa-circle-arrow-left"></i> Regresar
                                                    </a>-->
                                                <button class="btn btn-primary btn-o next-step btn-wide pull-right btn-xs">
                                                    Next <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </center>
                                        </div>
				                    </div>
				                    <div class="padding-30 col-md-8">
								        <h3 class="StepTitle">
                                            Seleccionar dirección de envio. <span class="text-large block"></span>
                                        </h3>
								        <p>
								           Si no cuentas con una dirección de envio, puedes agregar una dando click
                                            en el boton agregar direcciones, que se encuantra en la parte superior de este formulario.
								        </p>
								        <p class="text-small">

								        </p>
								    </div>
				                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                    <div class="form-group">
                                                <label class="col-md-4 control-label"
                                                       style="text-align: right;"
                                                       for="direccion">Dirección</label>
                                                <div class="col-md-4">
                                                    <select id="direccion" name="direccion" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                     </div>
                                    </div>
                                </div>
				            </div>
				        </div>
				        <!-- end: WIZARD STEP 2 -->
                        <!-- start: WIZARD STEP 3 -->
				        <div id="step-3">
				            <div class="row">
				                <div class="col-md-12">
				                    <div class="col-md-8 padding-30">
								        <h2 class="StepTitle">Seleccionar forma de pago.</h2>
								        <p class="text-large">

								        </p>
								        <p class="text-small">

								        </p>
								    </div>
                                    <div class="col-md-4">
				                        <div class="form-group">
                                            <a href="#" class="btn btn-primary btn-o  back-step btn-wide pull-left btn-xs">
								            <!--<button class="btn btn-primary btn-o back-step btn-wide pull-left btn-xs">-->
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
                                <!-- -->
                                <!-- -->
                                    <div class="col-md-12">
                                        <div class="col-md-4" style="border-right: 1px solid #ccc; text-align: right;" >
                                            <img src="<?php echo base_url();?>assets/transacciones/cards1.png"  />
                                        </div>
                                        <div class="col-md-8" >
                                            <img src="<?php echo base_url();?>assets/transacciones/cards2.png"  />
                                        </div>
                                    </div>
                                    <!-- formulario final  -->
                                    <!-- formulario final  -->
                                    <div class="col-md-12">
                                     <!--   <form class="form-horizontal" method="POST" id="processCard">
            <fieldset>-->
                                        <legend><center>Transacción</center></legend>
                                        <input type="hidden" name="token_id" id="token_id">
                                        <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                                        <div class="row mt">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"
                                                   style="text-align: right;" for="textinput">Nombre del titular</label>
                                            <div class="col-md-4">
                                                <input id="holderName"
                                                    data-openpay-card="holder_name" autocomplete="off"
                                                    type="text" placeholder="Como aparece en la tarjeta"
                                                    class="form-control input-md inputText disableOnSubmit" size="50">
                                                <label class="help-block" id="erroCompletarNombre"
                                                      style="display:none; color:red;">
                                                    Completar el campo
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                        </br>
                                        <div class="row mt">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"
                                                   style="text-align: right;"
                                                   for="textinput">Número de tarjeta</label>
                                            <div class="col-md-4">
                                                <input id="cardNumber" data-openpay-card="card_number"
                                                    type="text" placeholder="Número de tarjeta" autocomplete="off"
                                                    class="form-control input-md inputText disableOnSubmit" size="50">
                                                <label class="help-block"
                                                      id="errorNumeroInvalido" style="display:none; color:red;">
                                                    El número de la tarjeta es invalido
                                                </label>
                                                <label class="help-block" id="errorNumeroRechazado"
                                                      style="display:none; color:red;">
                                                    El número de su tarjeta ha sido rechazado
                                                </label>
                                                <label class="help-block"
                                                      id="errorCompletarValorNumTarjeta" style="display:none; color:red;">
                                                    Completar el campo
                                                </label>
                                                <label class="help-block" id="errorNumericoCardNumber"
                                                      style="display:none; color:red;">
                                                    El campo solo puede contener datos numericos, por favor verifique su Número de tarjeta
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                        </br>
                                        <div class="row">
                                            <div class="form-group">
                                            <label class="col-md-4 control-label"
                                                   style="text-align: right;"
                                                   for="textinput">Año de expiración:</label>
                                            <div class="col-md-4">
                                                <input id="expirationYear" data-openpay-card="expiration_year"
                                                type="text" placeholder=""
                                                class="form-control input-md inputText disableOnSubmit" size="4">
                                                <label class="help-block" >
                                                    Se deben ingresar los dos últimos dígitos del año, por ejemplo del 2016 solo se ingresa 16.
                                                </label>
                                                <label class="help-block" id="erroYearExpiracion" style="display:none; color:red;">
                                                    Verificar año de expiración
                                                </label>
                                                <label class="help-block" id="errorCompletarYear" style="display:none; color:red;">
                                                    Completar el campo
                                                </label>
                                                <label class="help-block" id="erroNoEsNumero" style="display:none; color:red;">
                                                    Verificar el valor ya que no es numerico
                                                </label>
                                                <label class="help-block" id="erroCantidaDigitos"
                                                      style="display:none; color:red;">
                                                    La cantidad de digitos debe ser de 2
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                        </br>
                                        <div class="row">
                                            <div class="form-group">

                                            <label class="col-md-4 control-label"
                                                   style="text-align: right;"
                                                   for="textinput">Mes de expiración:</label>
                                            <div class="col-md-4">
                                                <select id="expirationMonth" data-openpay-card="expiration_month"
                                                        class="form-control inputSelect disableOnSubmit">
                                                    <option value="" selected="selected">Seleccionar mes</option>
                                                    <option value="01" >01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <label class="help-block" id="erroMesExpiracion" style="display:none; color:red;">
                                                    Verificar mes de expiración
                                                </label>
                                                <label class="help-block" id="errorCompletarMes" style="display:none; color:red;">
                                                    Completar el campo
                                                </label>
                                            </div>

                                        </div>
                                        </div>
                                        </br>
                                        <div class="row">
                                            <div class="form-group">
                                            <label class="col-md-4 control-label"  style="text-align: right;"
                                                   accesskey=""for="textinput">Código de seguridad</label>
                                            <div class="col-md-2">
                                                <input id="cvv2" data-openpay-card="cvv2"
                                                       type="text" placeholder="3 dígitos" autocomplete="off"
                                                       class="form-control input-md inputText disableOnSubmit" size="12">

                                                <label class="help-block" id="errorCodigoInvalido" style="display:none; color:red;">
                                                    El Código de seguridad es invalido
                                                </label>
                                                <label class="help-block" id="errorCompletarCVC" style="display:none; color:red;">
                                                    Completar el campo
                                                </label>
                                                <label class="help-block" id="errorNumericoCvc" style="display:none; color:red;">
                                                    El valor ingresado es incorrecto debe ingresar solo numeros (0-9)
                                                </label>
                                            </div>
                                            <div class="col-md-3" >
                                                    <img src="<?php echo base_url();?>assets/transacciones/cvv.png"  />
                                            </div>

                                        </div>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                                <div class="col-md-7" style="text-align: right;">
                                                    <img src="<?php echo base_url();?>assets/transacciones/security.png" />
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="help-block" style="font-size: x-small;font-style: oblique;" >
                                                   Tus pagos se realizan de forma segura con encriptación de 256 bits
                                                    </label>
                                                </div>


                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <center>
                                                    <button id="no" type="submit" style="display:none"
                                                        name="button1id" class="btn btn-success">Pagar</button>
                           <!-- <button id="button1id" name="button1id" class="btn btn-success">Pagar</button>
                              <input type="button" class="disableOnSubmit" id="makeRequestCard" value="Create" />-->
                                                    <a id="s"  onclick="enviar()" name="button1id" class="btn btn-primary btn-sm">Pagar</a>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <center>
                                                    <a id="regresarTienda" href="<?php echo base_url(); ?>index.php/metodoDePago"  name="regresarTienda" class="btn btn-primary btn-xs">
                                                        Regregar a la tienda
                                                    </a>
                                                    <a id="cancelarCompra"   name="cancelarCompra" class="btn btn-primary btn-xs">
                                                       Cancelar compra
                                                    </a>
                                                </center>
                                            </div>
                                        </div>

           <!-- </fieldset>
        </form>-->
                                    </div>
                                    <!-- -->
                                    <!-- -->
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
                    </fieldset>
                    </form>
                    <!-- end: WIZARD FORM -->
                </div>
            </div>
        </div>





















               <div class="row">
            <div class="col-md-12">
              <div class="text-center">

               <ul class="shop-info-link sep-top-2x sep-bottom-lg">
                  <li class="sep-bottom-sm"></li>

                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
 <a href="#" class="btn btn-primary btn-sm" onclick="ajustar_alto_iframe('contenidoFrame')">Boton</a>



<script src="<?php echo base_url(); ?>assets/stepForm/jquery-smart-wizard/jquery.smartWizard.js"></script>
<script src="<?php echo base_url(); ?>assets/stepForm/form-wizard.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countries.js"></script>

		<script>
             populateCountries("country", "state");
               jQuery(document).ready(function()
    {
        FormWizard.init();
    });
			jQuery(document).ready(function() {

                 $.ajax({
                   type: "POST", //envia la posicion por metodo post de ajax
                   data:
                   {

                   },
                    url:"<?= site_url('cargarProcesoCompra') ?>",
                   // url:base+"cargarComprobanteEs",
                    async: true,
                    success: function(response)
                    {
                    // $('#Proceso').html(response);
                     //FormWizard.init();
                    },
                    error: function (obj, error, objError){
                    alert("Error: " + objError);
                    }
                });



			});

		</script>

<script type="text/javascript">
//<![CDATA[
function ajustar_alto_iframe(iframe_name_id){
var el_Iframe = document.getElementById(iframe_name_id);
var iframeWindow = frames[iframe_name_id];
el_Iframe.style.height = "1px";
el_Iframe.style.height = iframeWindow.document.documentElement.scrollHeight +"px";
}

function autoajustar_iframe(nueva_url, iframe_name_id){
var el_iframe = document.getElementById(iframe_name_id);
var cargar_function = function(){ajustar_alto_iframe(iframe_name_id);}
if(el_iframe.readyState){ el_iframe.onreadystatechange =
function() {if (el_iframe.readyState=="complete") cargar_function();}
}else{
el_iframe.onload = cargar_function;
}
el_iframe.src = nueva_url;
}

function ajustar_desde_frame(alto, id_iframe){
document.getElementById(id_iframe).style.height = alto + 'px';
}

//]]>

    $('#mostrarFormularioDirecciones').click( function()
    {
        if( $('#formularioDirecciones').is(":visible") )
        {
            $('#formularioDirecciones').hide();
        }else
        {
            $('#formularioDirecciones').show();
           // $('#formularioDirecciones').hide();
            //$('#fotoPerfil').hide();
        }
    });
</script>

<script language="JavaScript">
 /* window.onbeforeunload = confirmExit;
  function confirmExit()
  {
    return "Ha intentado salir de esta pagina. Si ha realizado algun cambio en los campos sin hacer clic en el boton Guardar, los cambios se perderan. Seguro que desea salir de esta pagina? ";
  }*/

</script>
