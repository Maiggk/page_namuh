<?php  error_reporting(0);?>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalertAdmin/sweetalert.css'; ?>">
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

                            <!-- Form Name -->
                            <legend></legend>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" style="text-align: right;" for="textinput">Titulo</label>
                              <div class="col-md-4">
                              <input id="titulo" name="titulo" type="text" placeholder="Ingresar titulo" value="<?php echo $infoOrdenamiento->orden; ?>" class="form-control input-md">
                              <span id="alertTitulo" style="color:red;display:none;" class="help-block">Completar el campo titulo</span>
                              </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" style="text-align: right;"  for="textarea">Descripción: </label>
                              <div class="col-md-4">
                                <textarea class="form-control" style="resize: vertical;" id="descripcion" name="descripcion"><?php echo $infoOrdenamiento->descripcion; ?></textarea>
                                  <span id="alertDescripcion" style="color:red;display:none;" class="help-block">Completar el campo descripción</span>
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" style="text-align: right;"  for="textinput">Orden de aparición</label>
                              <div class="col-md-4">
                              <input id="ordenAparicion" type="number" step="1" value="<?php echo $infoOrdenamiento->numero_aparicion; ?>"  name="ordenAparicion" class="form-control input-md">
                              <span id="alertOrdenAparicion" style="color:red;display:none;" class="help-block">Completar el campo orden de aparición</span>
                              <span id="alertOrdenAparicionError" style="color:red;display:none;" class="help-block">El valor debe ser mayor a 0</span>
                              </div>
                            </div>


                            <!-- Button (Double) -->
                            <div class="form-group">

                              <div class="col-md-12">
                                  <center>
                                    <a id="guardar" onclick="validarDatos()" name="guardar" class="btn btn-success">Guardar</a>
                                    <a id="cancelar" onclick="cancelarAdd()" name="cancelar" class="btn btn-danger">Cancelar</a>
                                  </center>
                              </div>
                            </div>

                            </fieldset>
                        </form>
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
    $("#titulo").focus(function(){$("#alertTitulo").css("display", "none").fadeOut(2000);});
    $("#descripcion").focus(function(){$("#alertDescripcion").css("display", "none").fadeOut(2000);});
    $("#ordenAparicion").focus(function(){
                                            $("#alertOrdenAparicion").css("display", "none").fadeOut(2000);
                                            $("#alertOrdenAparicionError").css("display", "none").fadeOut(2000);

                                         });

    function cancelarAdd()
    {
        parent.location.href="<?php echo base_url();?>index.php/OrdenProductos/quitarVariablesSesionHijo";
    }
    function validarDatos()
    {
         var indicador=0;
         var bandera=0;
         if($('#titulo').val()==''){indicador=1;$("#alertTitulo").show();}
         if($('#descripcion').val()==''){indicador=1;$("#alertDescripcion").show();}
         if($('#ordenAparicion').val()==''){indicador=1; bandera=1;$("#alertOrdenAparicion").show();}

        if(bandera==0)
        {
            if($.isNumeric( $('#ordenAparicion').val() ))
            {
                if($('#ordenAparicion').val()<=0)
                {
                    /*

                        */
                   indicador=1;  $("#alertOrdenAparicionError").show();
                }


            }else
            {
                indicador=1;
            }
        }

        if(indicador==0)
        {
              swal({
                    title: "¿Esta seguro de continuar?",
                    text: "",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#656668",
                    confirmButtonText: "Aceptar",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: true,
                    closeOnCancel: true },
                    function(isConfirm)
                    {
                        if (isConfirm)
                        {
                          verificarValorOrdenamiento()
                        } else
                        {

                        }
                    }
                    );
        }

    }
    function verificarValorOrdenamiento()
    {
        $.ajax({
           type: "POST", //envia la posicion por metodo post de ajax
           data:
           {
               ordenAparicion: $("#ordenAparicion").val()
           },
           url:"<?= site_url('OrdenProductos/verificarValorOrdenamientoEditHijo') ?>",
           async: true,
           success: function(response)
           {
                 if(response==0)
                {
                    AddOrdenamiento();
                }
               else
               {
                    swal({
                    title: "El numero de ordenamiento ya esta en uso ¿Desea continuar? ",
                    text: "",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#656668",
                    confirmButtonText: "Aceptar",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: true,
                    closeOnCancel: true },
                    function(isConfirm)
                    {
                        if (isConfirm)
                        {
                          AddOrdenamiento();
                        } else
                        {

                        }
                    }
                    );
               }
            },
            error: function (obj, error, objError){
				alert("Error: " + objError);
                }
            });
    }
    function AddOrdenamiento()
    {
       $.ajax({
           type: "POST", //envia la posicion por metodo post de ajax
           data:
           {
               titulo: $("#titulo").val(),
               descripcion: $("#descripcion").val(),
               ordenAparicion: $("#ordenAparicion").val()
           },
           url:"<?= site_url('OrdenProductos/UpdateOrdenamientoHijo') ?>",
           async: true,
           success: function(response)
           {
                  parent.location.href="<?php echo base_url();?>index.php/OrdenProductos/addSubOrdenProductos/<?php echo $id_padre; ?>";
            },
            error: function (obj, error, objError){
				alert("Error: " + objError);
                }
            });
    }

</script>


