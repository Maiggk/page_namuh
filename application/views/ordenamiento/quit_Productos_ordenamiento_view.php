<?php  error_reporting(0);?>
<link href="<?php echo base_url(); ?>assets/css/sweetalertAdmin/sweetalert.css" rel="stylesheet">
<script text="text/javascript" src="<?php echo base_url().'assets/js/sweetalert/sweetalert.min.js'; ?>"></script>
<style type='text/css'>
body
{
font-family: Arial;
font-size: 14px;
}
a {
color: blue;
text-decoration: none;
font-size: 14px;
}
a:hover
{
text-decoration: underline;
}
</style>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>


<section id="container" >
    <section id="main-content">
        <div class="showback">
            <section class="wrapper site-min-height">
                <h3 style="color:#11147D"><i class="fa fa-angle-right" ></i><?php
                  echo $tit;?>
                </h3>
          	     <h5><i class="fa fa-angle-right"></i><?php
                    echo $sub;?>
                 </h5>
          	     <div class="row mt">
          		    <div class="col-md-12">
                    <!-- Formulario agregar  -->
                    <!-- Formulario agregar  -->
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
                    <!-- Formulario agregar  -->
                    <!-- Formulario agregar  -->

                        <div id="results"></div>
                    </div>
                </div>
            </section>
        </div>
    </section>

</section>

  <script type="text/javascript">
  function enviarDatos()
        {
            if($('#TextBuscar').val()!='')
            {
                   $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				TextBuscar: $("#TextBuscar").val()

				},
				url:"<?php echo base_url().'index.php/Ordenamiento/verificarBusquedaQuitOrdenamiento'; ?>",
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
                    url:"<?php echo base_url().'index.php/Ordenamiento/busquedaQuitOrdenamiento'; ?>",
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


</script>



