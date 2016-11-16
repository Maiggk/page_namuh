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

<section id="container" >
    
      <section id="main-content">
          <div class="showback">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i></h3>
          	<div class="row mt">
          		<div class="col-md-12">
                    
                    
                    <!-- inputs para lefctura de codigos de barras  -->
                    <!-- inputs para lefctura de codigos de barras  -->
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Form Name -->
                            <legend></legend>
                            <!-- Text input-->
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="    text-align: right;" for="textinput">Ingresar código de barras manualmente</label>  
                                    <div class="col-md-1" style="    text-align: center;"> 
                                        <label class="switch">
                                            <input id="opcion" type="checkbox" checked value="1">
                                            <div class="slider round"></div>
                                        </label>
                                </div>
                                <label class="col-md-4 control-label"  style="    text-align:left;" for="textinput">Ingresar código de barras automáticamente</label>   <div class="col-md-3"> 
                                  <a class="btn btn-info fancybox fancybox.iframe" id="consultarPrecio" style="text-align: right;" href="<?php echo base_url();?>index.php/venta/Venta/ConsultaProducto">Consultar Precio</a>
                                </div>
                            </div>
                                <div class="form-group">
                                  
                                    <div class="col-md-4  col-md-offset-3">
                                        <input id="lectorCB"  name="lectorCB"  type="text" placeholder="" class="form-control input-md">
                                    </div>
                                     <div class="col-md-4 col-md-offset-3">
                                        <input id="CodigoBManual" name="CodigoBManual" style="display:none;" type="text" placeholder="" class="form-control input-md">
                                        <span class="help-block"></span>  
                                    </div>
                                    <div class="col-md-4">
                                        <a id="buscar" name="buscar" style="display:none;" onclick="buscarCodigoB()" class="btn btn-primary"><i class="fa fa-search" ></i> Cargar</a>
                                        
                                      
                                    </div>
                                </div>
                            <!-- Text input-->
                        </fieldset>
                    </form>
                    <!-- inputs para lefctura de codigos de barras  -->
                    <!-- inputs para lefctura de codigos de barras  -->
                </div>
                
                <div id="results"></div>
                </div>
                <!-- fsdfdsfsdfsdf -->
      
                <!-- fsdfdsfsdfsdf -->
    </section>
              </div>
    </section>
    
</section>

<script type="text/javascript">
    $("#lectorCB").focus();
    
    //if($('#opcion').prop( "checked", false ))
      //  alert('das');
   
 $("#opcion").click(function(){
     
     if($('#opcion').val()==0)
     {
         $('#opcion').prop( "checked", true );
         $('#opcion').val(1);
           $('#CodigoBManual').hide(); 
           $('#CodigoBManual').val(''); 
         $('#buscar').hide(); 
         $("#lectorCB").show();
          $("#lectorCB").focus();
     }else
     {
         $('#opcion').prop( "checked", false );
         $('#opcion').val(0); 
      
         
           $('#buscar').show(); 
           $('#CodigoBManual').show(); 
         $("#lectorCB").hide();
         $("#lectorCB").val('');
         $("#CodigoBManual").focus();
     }     
 });
     $("#CodigoBManual").keypress(function(e) {
       if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.
         // $('#frm').submit();
           buscarCodigoBarrasManual();
       }
    });
     function buscarCodigoB()
    {
        if($("#CodigoBManual").val()!='')
        {
            buscarCodigoBarrasManual();
        }
    }
    function buscarCodigoBarrasManual()
    {
          $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				lectorCB: $("#CodigoBManual").val()
				
				},
				url:"<?= site_url('venta/Venta/cargarListaVenta') ?>", 
				async: true,	 
				success: function(response)
				{
                  
                    
                 $('#results').html(response);
                    $("#lectorCB").val('');
                    $("#CodigoBManual").focus();
                   
                  // parent.location.href="< ?php echo base_url();?>index.php/catalogos/catalogos/usuarios";
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
    }
    $("#lectorCB").change(function(event){

          // alert('asa'); 
        //////traer informacion de la tabla 
        //////traer informacion de la tabla 
         if($("#lectorCB").val()!='')
        {
               $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				lectorCB: $("#lectorCB").val()
				
				},
				url:"<?= site_url('venta/Venta/cargarListaVenta') ?>", 
				async: true,	 
				success: function(response)
				{
                  
                    
                 $('#results').html(response);
                    $("#lectorCB").val('');
                    $("#lectorCB").focus();
                   
                  // parent.location.href="< ?php echo base_url();?>index.php/catalogos/catalogos/usuarios";
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
    }
       // alert( $("#lectorCB").val());
  
        //////traer informacion de la tabla 
        //////traer informacion de la tabla 
    });

    
    function enviarAllProductos()
    {
         event.preventDefault();
                swal({   
                    title: "¿Está seguro que desea continuar?",   
                    text: "Esta acción guardara el registros permanentemente.",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#656668",
                    confirmButtonText: "Aceptar",   
                    cancelButtonText: "Cancelar",  
                    closeOnConfirm: false,   
                    closeOnCancel: true }, 
                     function(isConfirm)
                     {   
                        if (isConfirm) 
                        {     
                           // swal("Deleted!", "Your imaginary file has been deleted.", "success");  
             
                                        /////////////////////////////////////////////////////////////////////////////
                                    $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				
				
				},
				url:"<?= site_url('catalogos/catalogos/addAllProducts') ?>",
				async: false,	 
				success: function(response)
				{
                                         event.preventDefault();
                         swal({   
                                title: "Guardado exitoso",   
                                text: "Sus datos se han guardado de manera exitosa",   
                                type: "success",   
                                showCancelButton: true,   
                                confirmButtonColor: "#656668",
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: false,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    if (isConfirm) 
                                    {    
                                          parent.location.reload(true);
                                    } else 
                                    {     
                                  
                                    } 
                                }
                            );                   
              
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                                        /////////////////////////////////////////////////////////////////////////////
                                        
                           
                        } else 
                        {     
                           
                        } 
                    }
                    );
         event.preventDefault();
    }
    function proveedores()
    {
        
        var bandera=0;
        
        if($("#idProveedor").val()!=0)
        {
             $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				idProveedor: $("#idProveedor").val()
				
				},
				url:"<?= site_url('catalogos/catalogos/tablaProveedores') ?>",
				async: true,	 
				success: function(response)
				{
                 $('#results').html(response);
                  // parent.location.href="< ?php echo base_url();?>index.php/catalogos/catalogos/usuarios";
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
        }
    }
    function regresar()
    {
        parent.location.href="<?php echo base_url();?>index.php/catalogos/catalogos/usuarios";
    }
    
    function editarP(id)
    {
        $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				idElemento: id
				
				},
				url:"<?= site_url('catalogos/catalogos/editarProducto') ?>",
				async: true,	 
				success: function(response)
				{
               //  $('#results').html(response);
                  // parent.location.href="< ?php echo base_url();?>index.php/catalogos/catalogos/usuarios";
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
    }
    function eliminarP(id)
    {
         event.preventDefault();
            swal({   
                    title: "¿Está seguro que desea eliminar?",   
                    text: "Esta acción borrara el registro.",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#656668",
                    confirmButtonText: "Aceptar",   
                    cancelButtonText: "Cancelar",  
                    closeOnConfirm: false,   
                    closeOnCancel: true }, 
                     function(isConfirm)
                     {   
                        if (isConfirm) 
                        {     
                           // swal("Deleted!", "Your imaginary file has been deleted.", "success");  
                             swal({   
                                title: "¿Está seguro que desea eliminar?",   
                                text: "La siguiente acción eliminara permanentemente el elemento seleccionado.",   
                                type: "warning",   
                                showCancelButton: true,   
                                confirmButtonColor: "#656668",
                                 cancelButtonText: "Cancelar",   
                               confirmButtonText: "Aceptar",  
                                closeOnConfirm: false,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    if (isConfirm) 
                                    {     
                                        /////////////////////////////////////////////////////////////////////////////
                                        $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				idElemento: id
				
				},
				url:"<?= site_url('catalogos/catalogos/deleteProducto') ?>",
				async: false,	 
				success: function(response)
				{
                parent.location.reload(true);
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                                        /////////////////////////////////////////////////////////////////////////////
                                        
                                    } else 
                                    {     
                                  
                                    } 
                                }
                            );
                        } else 
                        {     
                           
                        } 
                    }
                    );
    }
</script>

  <script type="text/javascript">
  $(document).ready(function() {
	 // $("a#single_image").fancybox();
		
	

		/* Apply fancybox to multiple items */
		
	  $('.fancybox').fancybox({
			width		: '95%',
			height		: '70%',
			autoSize	: false,
			autoCenter	: true,
			closeClick	: false,
			openEffect	: 'elastic',
			closeEffect	: 'elastic',
			scrollOutside:false,
			type: 'iframe',
      });

	  //$(".fancybox").fancybox();
  });
  </script>
