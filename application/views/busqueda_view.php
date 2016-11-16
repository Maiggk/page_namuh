<link href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalertAdmin/sweetalert.css'; ?>">


<section id="container" >

<section id="container" >

      <section id="main-content">
          <div class="showback">
          <section class="wrapper site-min-height">
          <div class="row">

			     <form class="form-horizontal">
				    <fieldset>
				        <legend></legend>
				            <div class="form-group">
				                    <label class="col-md-4 control-label" style="    text-align: right;" for="textinput"><span class="trn">Buscar</span></label>
				                <div class="col-md-4">
				                    <input id="TextBuscar" name="TextBuscar" type="text" placeholder="Buscar productos" class="form-control input-md">
				                    <span class="help-block"></span>
                                </div>
					           <div class="col-md-4">
					               <button id="singlebutton" style="display:none;" name="singlebutton" class="btn btn-primary">Buscar</button>
					               <a id="enviar" name="enviar" onclick="enviarDatos()" class="btn btn-primary trn">Buscar</a>
				                </div>
				            </div>
				    </fieldset>
			     </form>
                <div id="results"></div>
          </div>

              </section>
          </div>
    </section>
    </section>
</section>


<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/sweetalert/sweetalert.min.js"></script>
  <script type="text/javascript">
  function enviarDatos()
        {
            if($('#TextBuscar').val()!='')
            {
               // alert($('#TextBuscar').val());
                   $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				TextBuscar: $("#TextBuscar").val()

				},
				url:"<?php echo base_url().'index.php/Promociones/verificarBusqueda'; ?>",
				async: true,
				success: function(response)
				{

                    if(response==0)
                    {

                          sweetAlert('Error', 'Sin coincidencias', 'error');


                    }
                    else
                    {
                         construirTabla();


                    }
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);

				}
				});
            }
            else
            {
    sweetAlert('Error', 'Necesitas ingresar un codigo', 'error');

            }
        }


      function construirTabla()
      {
           $.ajax({
                    type: "POST", //envia la posicion por metodo post de ajax
                    data:{
                        TextBuscar: $("#TextBuscar").val()
                    },
                    url:"<?php echo base_url().'index.php/Promociones/busqueda'; ?>",
                    async: true,
                    success: function(response)
                    {
                        $('#results').html(response);
                    },
                    error: function (obj, error, objError){
                        alert("Error: " + objError);
                    }
				});
      }
/*
    $("#TextBuscar").keypress(function( event )
        {
            if ( event.which == 13 ) {
                enviarDatos();
                }
        });*/


            //$(function(){
                //Para escribir solo letras
               // $('#TextBuscar').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚáéíóú');
            //});

        </script>

