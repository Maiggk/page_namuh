<link href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" rel="stylesheet">
 <link href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css" rel="stylesheet">

      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
                <img width="23%" src="<?php echo base_url(); ?>assets/img/logo_Main.png">
              <p class="lead">Recuperar contraseña</p>
            </div>
          </div>
        </div>
      </section>
      
    <div class="sep-top-2x">
        <div class="container">
          <div class="row">
                    <div class="col-md-5 col-lg-5 col-xs-12">
                   <!--     <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                       
                        <p style="text-align : justify;">
                         Gracias al selecto grupo de profesionales que integra la familia Namuh, hemos sido reconocidos como una de las mejores casas de decoración en México; distinción que nos enorgullece por el sólido compromiso de nuestros colaboradores para brindar a nuestros clientes lo mejor de nosotros en tiempo, calidad, precio y servicio. 
                        </p>-->
                        
                        
    <form class="form-horizontal" id="datosRecovery1">
        <fieldset>

        <!-- Form Name -->
        <legend>
          <label class="  control-label"  style="    text-align: justify;
    color: #909090;" for="textinput"> Paso 1: Ingresa tu correo para solicitar un código para recuperar tu contraseña.</label>
            </legend>

        <!-- Text input
            <div class="container">-->
        <div class="form-group">
            <center>
                <label class="  control-label"  style="" for="textinput">Recuperacion de contraseña</label> <br>
         
            <div class="row">
                <div style="text-align:center" class="col-md-12">
                  <div class="">
                  <input id="correo1" name="correo1" type="text" placeholder="Introduce tu correo" class="form-control input-md">
                  <span class="help-block" id="incorrecto" style="display:none;color: red;">Completar el campo</span>  
                  <span class="help-block" id="incorrecto1" style="display:none;color: red;">E-mail incorrecto</span>  
                  <span class="help-block" id="incorrecto2" style="display:none;color: red;">No existe la cuenta de E-mail</span>  
                  </div>


                  
                </div>
            </div>
                   </center> 
            
            
        </div>
        <div class="form-group"><center>
           <!-- <div class="row"> -->
                <div class="">

                       
                          <!--<a id="cancelar" name="cancelar" onclick="cancelar1()" class="btn btn-danger">Cancelar</a>-->
                          <a id="enviar" name="enviar" onclick="verificarCorreo1()"   class="btn btn-primary ">Continuar</a>
                   

                  </div> 
            <!--</div>-->
            </center>
        </div>
            <!--</div>-->


        </fieldset>
    </form>
                        
                        
                        
                        
                        
                        
                    </div>
              <div class="col-md-1 col-lg-1"><br><br><br><br></div>
              <div class="col-md-6 col-xs-12 col-lg-6">
              <div class="">
                       
                  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>
      <label class="  control-label"  style="    text-align: justify;
    color: #909090;" for="textinput"> Paso 2: Ingresa tu correo para solicitar un código para recuperar tu contraseña.</label>
    
    </legend>

<!-- Text input-->
<div class="form-group">
    <center><label class="col-md-4 col-sm-4  upper"  for="textinput">Correo:</label> </center> 
  <div class="col-md-8 col-sm-8">
  <input id="usuario" name="usuario" type="text" placeholder="Correo" class="form-control input-md">
  <span class="help-block" id="errorCorreo" style="display:none;color: red;">Completar el campo</span>  
  <span class="help-block" id="llenarCorreoformato" style="display:none;color: red;">Formato incorrecto  </span>  
  <span class="help-block" id="noExiste" style="display:none;color: red;">El e-mail no existe</span>  

  </div>
</div>
<!-- Text input-->
<div class="form-group">
    <center><label class="col-md-4 col-sm-4  upper"  for="textinput">Nueva contraseña:</label> </center> 
  <div class="col-md-8 col-sm-8">
  <input id="pass1" name="pass1" type="password" placeholder="Password" class="form-control input-md">
  <span class="help-block" id="pass1Error" style="display:none;color: red;">Completar el campo</span>  
  <span class="help-block" id="longuitudMinina" style="display:none;color: red;">Longitud mínima de 8 caracteres y debe contener una letra mayúscula, una minúscula y números</span>  

  </div>
</div>
 
<!-- Text input-->
<div class="form-group sep-top-xs">
    <center><label class="col-md-4 col-sm-4  upper"   for="textinput">Confirmar nueva contraseña:</label> </center> 
  <div class="col-md-8 col-sm-8">
  <input id="passTemp" name="passTemp" type="password" placeholder="Password" class="form-control input-md">
  <span class="help-block" id="passTempError" style="display:none;color: red;">Completar el campo</span>  
  <span class="help-block" id="passTempErrorNoCoincide" style="display:none;color: red;">El Campo contraseña no coincide</span>  

  </div>
</div>
        <!-- Text input-->
<div class="form-group sep-top-xs">
    <center><label class="col-md-4 col-sm-4  upper"   for="textinput">Codigo:</label> </center> 
  <div class="col-md-8 col-sm-8">
  <input id="codigo" name="codigo" type="text" placeholder="Código" class="form-control input-md">
  <span class="help-block" id="codigoError" style="display:none;color: red;">Completar el campo</span>  

  </div>
</div>
    <!-- Button (Double) -->
<div class="form-group">
  
  <div class="col-md-12">
<center>

        <!--  <a id="cancelar" name="cancelar" onclick="cancelar()" class="btn btn-danger">Cancelar</a>-->
          <a id="enviar1" name="enviar1" onclick="verificarCorreoPaso2()"    class="btn btn-primary" >Continuar</a>
      </center>
  </div>
</div>
    

    
</fieldset>
</form>
                  
                  
                  
                  
                  <br>
                  <br>
                  <br>
              </div>
            </div>
           
            
          </div>
<!--     <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                 <img alt="" src="<?php echo base_url();?>assets/img/nosotros/nosotros.jpg" class="sep-top-sm img-responsive">
               <ul class="shop-info-link sep-top-2x sep-bottom-lg">
                  <li class="sep-bottom-sm"></li>
                 
                </ul>
              </div>
            </div>
          </div>-->
        </div>
      </div>
      








<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/sweetalert/sweetalert.min.js"></script>

		<script type="text/javascript">

            function cancelar()
            {
                parent.$.fancybox.close();
            }
            
             $("#usuario").focus(function()
                                 {
                    
                 $("#errorCorreo").css("display", "none").fadeOut(2000);
                 $("#llenarCorreoformato").css("display", "none").fadeOut(2000);
                 $("#noExiste").css("display", "none").fadeOut(2000);
                                });
             $("#pass1").focus(function(){
                // pass1Error longuitudMinina passTempError passTempErrorNoCoincide
                 $("#pass1Error").css("display", "none").fadeOut(2000);
                 $("#longuitudMinina").css("display", "none").fadeOut(2000);
                 $("#pass1Error").css("display", "none").fadeOut(2000);
             
             });
             $("#passTemp").focus(function(){
                 $("#passTempError").css("display", "none").fadeOut(2000);
                 $("#passTempErrorNoCoincide").css("display", "none").fadeOut(2000);
             });
             $("#codigo").focus(function(){$("#codigoError").css("display", "none").fadeOut(2000);});
            function verificarCorreo()
            {
                var valid=0;
       
                if($("#codigo").val()==''){valid=1; $('#codigoError').show();}

                
                if(valid==0)
                {
                      $.ajax({
				        type: "POST", //envia la posicion por metodo post de ajax
				        data:{
				        user: $("#usuario").val(),				
				        pass: $("#pass1").val(),				
				        passtemp: $("#passTemp").val(),				
				        codigo: $("#codigo").val()				
				            },
				            
				        url:"<?= site_url('Registro/verificarCamposRecivery') ?>",
				        async: true,	 
				        success: function(response)
				        {
                             // 0 exitoso
        // 1 los pass no son iguales
        // 2 no se encontro el usuario
        // 3 no se encontro el usuario y los passwords no son iguales
                           if(parseInt(response)==0)
                            {
                                enviar();
                            }
                             if(parseInt(response)==1)
                            {
                                // sweetAlert('Se ha enviado un correo con instrucciones para restaurar su password', 'Nota: No olvides checar tu bandeja de correo no deseado', 'success');
                           sweetAlert('Error', 'Verificar los campos anteriores', 'error');
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
				user: $("#usuario").val(),				
				        pass: $("#pass1").val(),				
				        passtemp: $("#passTemp").val(),				
				        codigo: $("#codigo").val()
				
				},
				//url:"< ?= site_url('busqueda/busqueda') ?>",
				url:"<?= site_url('Registro/actualizarPassRecovery') ?>",
				async: true,	 
				success: function(response)
				{
                    
                               swal({   
                                title: "Sus contraseña se ha actualizado exitosamente",   
                                text: "Ahora puede iniciar sesion con su nueva contraseña",   
                                type: "success",   
                                showCancelButton: false,   
                                confirmButtonColor: "#656668",
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: true,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                     parent.location.href="<?php echo base_url();?>";
                                }
                            );
                       
                
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
				
		
		</script>




<!-------->
		<script type="text/javascript">
/*
            function cancelar()
            {
                parent.$.fancybox.close();
            }
*/
            
            $("#correo1").focus(function(){
        $("#incorrecto").css("display", "none").fadeOut(2000);
        $("#incorrecto1").css("display", "none").fadeOut(2000);
        $("#incorrecto2").css("display", "none").fadeOut(2000);
    });
            /////////////////////////////////////////////////////////////////
            ////7validar correo del paso 2 //////////////////////////////////////// 
            function verificarCorreoPaso2()
            {
                var valid=0;
         
                if($("#usuario").val()==''){valid=1; $('#errorCorreo').show();}else
                {
                    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#usuario').val())) ) 
                    {
                         valid=1;
                        $('#llenarCorreoformato').show();
                    }
                }
                
              //  pass1  passTemp
              //  pass1 passTemp
            //    pass1Error longuitudMinina passTempError passTempErrorNoCoincide
                var pass11=0;
                var passTem11=0;
                if($('#pass1').val()==''){pass11=1;   valid=1;   $('#pass1Error').show(); }
                else
                {
                     if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}$/.test($('#pass1').val()))){valid=1; $('#longuitudMinina').show();}
                }
                if($('#passTemp').val()==''){passTem11=1;  valid=1; $('#passTempError').show(); }
                
                if(pass11==0 && passTem11==0)
                {
                    
                    
                    if($('#pass1').val()!=$('#passTemp').val())
                    {
                         valid=1;
                       $('#passTempErrorNoCoincide').show(); 
                    }
                }
                
                
                if(valid==0)
                {
                   
                      $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				email: $("#usuario").val()
				
				},
				
				url:"<?= site_url('Registro/verificarDatosrecivery') ?>",
				async: true,	 
				success: function(response)
				{
                    if(parseInt(response)==1)
                    {
                         // enviar1();
                          verificarCorreo();
                    }
                    if(parseInt(response)==0)
                    {
                       $('#noExiste').show(); 
                    }
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                }
            }
            
            
            /////////////////////////////////////////////////////////////////
            ////7validar correo del paso 2 ////////////////////////////////////////
            
            function verificarCorreo1()
            {
                var valid=0;
       
                if($("#correo1").val()==''){valid=1; $('#incorrecto').show();}else
                {
                    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#correo1').val())) ) 
                    {
                         valid=1;
                        $('#incorrecto1').show();
                    }
                }
                if(valid==0)
                {
                    $('#datosRecovery1').hide();
                          $('#verificando').show();
                      $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				email: $("#correo1").val()
				
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
                          enviar1();
                    }
                    if(parseInt(response)==0)
                    {
                        $('#datosRecovery1').show();
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
            function enviar1()
            {
                
                      $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				email: $("#correo1").val()
				
				},
				//url:"< ?= site_url('busqueda/busqueda') ?>",
				url:"<?= site_url('Registro/enviarCorreoRecovery') ?>",
				async: true,	 
				success: function(response)
				{
                           $('#verificando').hide();
                          $('#datosRecovery1').hide();
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
                                confirmButtonColor: "#656668",
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: false,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    if (isConfirm) 
                                    {    
                                       location.reload(); 
                                       // parent.$.fancybox.close();
                                        //  window.parent.location.href="< ?php echo base_url();?>";
                                         // parent.$.fancybox.close();parent.$.fancybox.close();
                                    } else 
                                    {     
                                   location.reload();
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
                                confirmButtonColor: "#656668",
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

