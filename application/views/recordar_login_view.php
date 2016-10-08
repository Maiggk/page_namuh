<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> 		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" 	type="text/css" media="all">
<!-- Index-Page-CSS --> 	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" 		type="text/css" media="all">

<link href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" rel="stylesheet">
 <link href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css" rel="stylesheet">


 <div id="enviando"  style="display:none">
    <center> <span>Enviando...</span></center>
    <center> <img src="<?php echo base_url();?>assets/images/correo.gif" style="width:5%"></center>
</div>
<div id="verificando"  style="display:none">
    <center> <span>Verificando...</span></center>
    <center> <img src="<?php echo base_url();?>assets/images/correo.gif" style="width:5%"></center>
</div>

    <form class="form-horizontal" id="datosRecovery">
        <fieldset>

        <!-- Form Name -->
        <legend></legend>

        <!-- Text input-->
            <div class="container">
        <div class="form-group">
            <center>
                <label class="  control-label"  style="color: black;" for="textinput">Recuperacion de contraseña</label> <br>
            </center> 
            <div class="row">
                <div style="text-align:center" class="col-md-12">
                  <div class="col-md-8 col-sm-12">
                  <input id="correo" name="correo" type="text" placeholder="Introduce tu correo" class="form-control input-md">
                  <span class="help-block" id="incorrecto" style="display:none;color: red;">Completar el campo</span>  
                  <span class="help-block" id="incorrecto1" style="display:none;color: red;">E-mail incorrecto</span>  
                  <span class="help-block" id="incorrecto2" style="display:none;color: red;">No existe la cuenta de E-mail</span>  
                  </div>


                  <div class="col-md-4 col-sm-12">


                          <a id="cancelar" name="cancelar" onclick="cancelar()" class="btn btn-danger">Cancelar</a>
                          <a id="enviar" name="enviar" onclick="verificarCorreo()"  class="btn btn-success">Continuar</a>

                  </div>
                </div>
            </div>
        </div>
            </div>


        </fieldset>
    </form>



<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<!-- Popup-Box-JavaScript -->

<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/sweetalert/sweetalert.min.js"></script>

		<script type="text/javascript">

            function cancelar()
            {
                parent.$.fancybox.close();
            }
            
    $("#correo").focus(function(){
        $("#incorrecto").css("display", "none").fadeOut(2000);
        $("#incorrecto1").css("display", "none").fadeOut(2000);
        $("#incorrecto2").css("display", "none").fadeOut(2000);
    });
            function verificarCorreo()
            {
                var valid=0;
       
                if($("#correo").val()==''){valid=1; $('#incorrecto').show();}else
                {
                    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#correo').val())) ) 
                    {
                         valid=1;
                        $('#incorrecto1').show();
                    }
                }
                if(valid==0)
                {
                    $('#datosRecovery').hide();
                          $('#verificando').show();
                      $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				email: $("#correo").val()
				
				},
				//url:"< ?= site_url('busqueda/busqueda') ?>",
				url:"<?= site_url('Registro/verificarDatosrecivery') ?>",
				async: true,	 
				success: function(response)
				{
                    ///response=1 exitoso
                    ///response=0 correo no existente

                    if(parseInt(response)==1)
                    {
                    //mandar mensaje
                       //$('#incorrecto2').show(); 
                          enviar();
                    }
                    if(parseInt(response)==0)
                    {
                        $('#datosRecovery').show();
                          $('#verificando').hide();
                    //mandar mensaje
                       $('#incorrecto2').show(); 
                    }
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                }
            }
            function enviar()
            {
                
                      $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				email: $("#correo").val()
				
				},
				//url:"< ?= site_url('busqueda/busqueda') ?>",
				url:"<?= site_url('Registro/enviarCorreoRecovery') ?>",
				async: true,	 
				success: function(response)
				{
                           $('#verificando').hide();
                          $('#datosRecovery').hide();
                          $('#enviando').show();
                    ///response=0 exitoso
                    ///response=1 correo no existente

                    if(parseInt(response)==0)
                    {
                       //  sweetAlert('Se ha enviado un correo con instrucciones para restaurar su password', 'Nota: No olvides checar tu bandeja de correo no deseado', 'success');
                       ////////////////////////////////////////////////
                   
                           // swal("Deleted!", "Your imaginary file has been deleted.", "success");  
                             swal({   
                                title: "Se ha enviado un correo con instrucciones para restaurar su password",   
                                text: "Nota: No olvides checar tu bandeja de correo no deseado",   
                                type: "success",   
                                showCancelButton: false,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: false,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    if (isConfirm) 
                                    {    
                                      // location.reload(); 
                                        parent.$.fancybox.close();
                                        //  window.parent.location.href="< ?php echo base_url();?>";
                                          parent.$.fancybox.close();parent.$.fancybox.close();
                                    } else 
                                    {     
                                  
                                    } 
                                }
                            );
                       
                        ////////////////////////////////////////////////
                    }
                    if(parseInt(response)==1)
                    {
                       //sweetAlert('Error al enviar el correo', 'Vuelve a intentarlo mas tarde o contacta al administrador', 'error');
                        ////////////////////////////////////////////////
                   
                           // swal("Deleted!", "Your imaginary file has been deleted.", "success");  
                             swal({   
                                title: "Error al enviar el correo",   
                                text: "Vuelve a intentarlo mas tarde o contacta al administrador",   
                                type: "error",   
                                showCancelButton: true,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: false,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    if (isConfirm) 
                                    {    
                                      location.reload();  
                                    } else 
                                    {     
                                  
                                    } 
                                }
                            );
                       
                        ////////////////////////////////////////////////
                    }
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
            }
		</script>
		<!-- //Popup-Box-JavaScript -->

		<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
		<script type="text/javascript">

				
				$('.fancybox').fancybox({
					minWidth	: '100px',
					minHeight	: '100px',
					autoSize	: true,
					padding:	['1','1','1','1'],
					autoCenter	: true,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'elastic',
					// scrollOutside:false,
					// modal:true,
				//	type: 'iframe',
				});
				
				$('.login').fancybox({
					maxWidth	: '600px',
					maxHeight	: '410px',
					autoSize	: true,
					padding:	['1','1','1','1'],
					autoCenter	: true,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'elastic',
					scrollOutside:false,
					// modal:true,
					type: 'iframe',
					beforeLoad:function() {
						$('#navbar').removeClass('in');
					},
				});
				
			});
		</script>

