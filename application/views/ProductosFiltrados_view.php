<link href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" rel="stylesheet">
 <link href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css" rel="stylesheet">



<section id="container" >

<section id="container" >

      <section id="main-content">
          <div class="showback">
          <section class="wrapper site-min-height">

          <div class="row">
              <center><h1 class="trn">Productos seleccionados para aplicar el descuento</h1></center>
             <div class="table-responsive">

            <table class="table table-bordered table-hover" >
            <thead>
            <tr>


                <th ><center><font color="#909090">Código</center></font></th>
                <th ><center><font color="#909090">Producto</center></font></th>
                <th><center><font color="#909090">Descripción</center></font></th>
                <th><center><font color="#909090">Precio</center></font></th>

            </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
            foreach($ProductosFiltrados as $producto){

            ?>
            <tr id="row<?php echo($i) ?>">
                <!-- Se un ciclo para poder mostrar los valores de las columnas de acuerdo a la consulta hecha en imprimibles-->


                <td>
                    <center><?php echo $producto['codigo']; ?></center>
                </td>
                <td>
                    <center><?php echo $producto['nombre']; ?></center>
                </td>
                <td>
                    <center><?php echo $producto['descripcion']; ?></center>
                </td>
                <td>
                    <center><?php echo '$'.decimales_ceros($producto['precio'],2); ?></center>
                </td>

                <?php

                $i++;
                 }?>
            </tbody>

        </table>

    </div>







          </div>
            <div class="row"><br/><br/><br/></div>

                        <div class="row">
            <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" style="text-align: right;" for="textinput">Porcentaje (%)</label>
  <div class="col-md-4">
  <input id="porcentaje" name="textinput" type="text" placeholder="Ingresar porcentaje del descuento" class="form-control input-md">
  <span id="errorNumerico" style="display:none;color:red;" class="help-block">El campo debe ser numerico {20,10...}</span>
  <span id="errorVacio" style="display:none;color:red;" class="help-block">Debe completar el campo</span>
  </div>
</div>

    <!-- Button -->
<div class="form-group">

  <div class="col-md-12">
      <center>
    <a id="singlebutton" onclick="guardar()" name="singlebutton" class="btn btn-primary">Guardar</a>
      <a id="singlebutton1" onclick="regresar()" name="singlebutton" class="btn btn-primary">Regresar</a>
      </center>
  </div>
</div>

</fieldset>
</form>
            </div>


              </section>
          </div>
    </section>
    </section>
</section>

<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/sweetalert/sweetalert.min.js"></script>
<script>

             $('#porcentaje').click( function()
                                             {


                    $('#errorVacio').hide();
                    $('#errorNumerico').hide();
                                     });

    function guardar()
    {

       var bandera=0;
        if($('#porcentaje').val()==''){$('#errorVacio').show();bandera=1;}
    if(bandera==0)
    {
        if($.isNumeric($('#porcentaje').val()))
        {
          $.ajax({
				        type: "POST", //envia la posicion por metodo post de ajax
				        data:{
				        porcentaje: $("#porcentaje").val(),

				            },

				        url:"<?= site_url('Promociones/guardarCambiosProductos') ?>",
				        async: true,
				        success: function(response)
				        {


                  swal({
                                title: "Sus productos se han actualizado correctamente",
                                text: "",
                                type: "warning",
                                showCancelButton: false,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Aceptar",
                                cancelButtonText: "Cancelar",
                                closeOnConfirm: true,
                                closeOnCancel: false },
                                  function(isConfirm)
                                {


                                           parent.location.href="<?php echo base_url();?>index.php/Promociones/Promocion";

                                }
                            );


                        },
				            error: function (obj, error, objError){
				            alert("Error: " + objError);
				            }
				        });
        }
       else
        {
            $('#errorNumerico').show();

        }
    }
    }
    function regresar()
    {
         swal({
                                title: "Esta seguro de querer regresar si lo hace perdera la lista actual de productos",
                                text: "",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Aceptar",
                                cancelButtonText: "Cancelar",
                                closeOnConfirm: true,
                                closeOnCancel: true },
                                  function(isConfirm)
                                {

                                    if (isConfirm)
                                    {
                                      //  location.reload();
                                           parent.location.href="<?php echo base_url();?>index.php/Promociones/PromocionVaciarSesion";
                                    } else
                                    {
                                       // location.reload();
                                    }
                                }
                            );
    }
</script>
