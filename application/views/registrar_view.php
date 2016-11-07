      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space">namuh</h2>
              <p class="lead">Registro</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      <!-- Start Shop Cart-->

      <!-- End Shop Cart-->
      <div class="sep-top-2x">
        <div class="container">
          <div class="row">
                  
                <div class="col-md-12">
                    <div >
                        <form id="uneteForm" >
                         <div class="col-md-12">
                             <div class="col-md-4">
                             <div class="form-group sep-top-xs">
                            <label for="contactFormName" class="upper">Tu Nombre</label>
                            <input id="name" type="text" placeholder="Introduce tu Nombre" name="name" class="form-control input-lg required"/>
                              <label id="requerido_name" style="color:red; display:none;">Campo Nombre Requerido</label>
                            </div> 
                             </div>
                             <div class="col-md-4">
                                 <div class="form-group sep-top-xs">
                            <label for="contactFormName" class="upper">Apellido Paterno</label>
                            <input id="apPaterno" type="text" placeholder="Introduce tu apellido paterno" name="apPaterno" class="form-control input-lg required"/>
                              <label id="requerido_apPaterno" style="color:red; display:none;">Campo Apellido Paterno Requerido</label>
                          </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="form-group sep-top-xs">
                            <label for="contactFormName" class="upper">Apellido Materno</label>
                            <input id="apMaterno" type="text" placeholder="Introduce tu apellido materno" name="apMaterno" class="form-control input-lg required"/>
                              <label id="requerido_apMaterno" style="color:red; display:none;">Campo Apellido Materno Requerido</label>
                          </div>
                             </div>




    </div>
                       <div class="col-md-12">  
                           <div class="col-md-4">
                          <div class="form-group sep-top-xs">
                            <label for="contactFormPhone" class="upper">Tu Teléfono</label>
                            <input id="phone" type="text" placeholder="Introduce tu Teléfono" name="phone" class="form-control input-lg required"/>
                              <label id="requerido_phone" style="color:red; display:none;">Campo Teléfono requerido</label>
                          </div>
                           </div>
                           <div class="col-md-4">
                          <div class="form-group sep-top-xs">
                            <label for="contactFormEmail" class="upper">Tu Correo Electrónico</label>
                            <input id="email" type="email" placeholder="Introduce tu Correo Electrónico" name="email" class="form-control input-lg required email"/>
                              <label id="requerido_email" style="color:red; display:none;">Campo Correo Electrónico requerido</label>
                          </div> 
                           </div>  
                           <div class="col-md-4">
                          <div class="form-group sep-top-xs">
                            <label for="contactFormEmail" class="upper">Confirma Correo Electrónico</label>
                            <input id="emailrepeat" type="email" placeholder="Introduce nuevamente tu Correo Electrónico" name="emailrepeat" class="form-control input-lg required email"/>
                              <label id="requerido_emailrepeat" style="color:red; display:none;">El Campo Correo Electrónico no coincide</label>
                          </div> 
                           </div>
    </div>
                          <div class="col-md-12 col-md-offset-4" > 
                             <!-- <div class="col-md-6">  
                        <div class="form-group sep-top-xs">
                            <label for="contactFormPhone" class="upper">Tu nombre de usuario</label>
                            <input id="user" type="text" placeholder="Introduce tu nombre de usuario" name="phone" class="form-control input-lg required"/>
                              <label id="requerido_user" style="color:red; display:none;">Campo nombre de usuario requerido</label>
                          </div>
                              </div>-->
                                <div class="col-md-4">
                        <div class="form-group sep-top-xs">
                            <label for="contactFormEmail" class="upper">Tu Contraseña</label>
                            <input id="pass" type="password" placeholder="Introduce tu Contraseña" name="pass" class="form-control input-lg required email"/>
                              <label id="requerido_pass" style="color:red; display:none;">Campo Contraseña requerido</label>
                          </div>
                              </div>
    </div>
                            <br>
                            <div class="col-md-12" style="text-align:center">
                          <div class="form-group sep-top-xs">
                         <div id="enviando_registro"  style="display:none">
                 <center> <img src="<?php echo base_url();?>assets/images/botones_carga.gif" style="width:10%"></center>
                  </div>
                              <a id="Enviar_Registro"  onclick="verificarDatos()" class="btn btn-primary"><i class="fa fa-check" ></i>&nbsp; Enviar solicitud de registro</a>
                          </div>
    </div>
                          <!--input#subject.form-control.input-lg.required(type='text', placeholder='Subject of your message', name='subject')
                          -->
                        </form>
                     </div>
                </div>
              <br>
              <br>
            <div class="col-md-12">
                <h5>Aviso de privacidad</h5>
                <p class="" style="text-align : justify;">
                    De acuerdo a lo Previsto en la “Ley Federal de Protección de Datos Personales”, declara NAMUH  S.A. de C.V., ser una empresa legalmente constituida de conformidad con las leyes mexicanas, con domicilio en Camino Alcocer  KM 2.2 s/n, C.P. 37760 ciudad San Miguel de Allende, Guanajuato.; y como responsable del tratamiento de sus datos personales, hace de su conocimiento que la información de nuestros clientes es tratada de forma estrictamente confidencial al proporcionar sus datos personales.</p>
              </div>
              <br>
              <br>
              <br>
            
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
        <br>
    
        <br>
        <br>


    <script src="<?php echo base_url();?>assets/js/sweetalert/sweetalert.min.js"></script>

								
	<script type="text/javascript">
        
                $("#name").focus(function(){$("#requerido_name").css("display", "none").fadeOut(2000);});
                 //  $("#user").focus(function(){$("#requerido_user").css("display", "none").fadeOut(2000);});
               $("#apPaterno").focus(function(){$("#requerido_apPaterno").css("display", "none").fadeOut(2000);});
               $("#apMaterno").focus(function(){$("#requerido_apMaterno").css("display", "none").fadeOut(2000);});
               $("#pass").focus(function(){$("#requerido_pass").css("display", "none").fadeOut(2000);});
                $("#phone").focus(function(){$("#requerido_phone").css("display", "none").fadeOut(2000);});
                $("#email").focus(function(){$("#requerido_email").css("display", "none").fadeOut(2000);});
        
        function verificarDatos()
        {
        
            var bandera=0;
                  
            if($('#name').val()==''){bandera=1;$('#requerido_name').show();}
           // if($('#user').val()==''){bandera=1;$('#requerido_user').show();}
            if($('#apPaterno').val()==''){bandera=1;$('#requerido_apPaterno').show();}
            if($('#apMaterno').val()==''){bandera=1;$('#requerido_apMaterno').show();}
            if($('#phone').val()==''){bandera=1;$('#requerido_phone').show();}
            if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}$/.test($('#pass').val()))){bandera=1;$('#requerido_pass').show();
            swal("Verifica tu contraseña", "Debe contener \n 1 numero \n 1 letra mayúscula \n 1 letra minúscula \n  8 caracteres como mínimo");
            }else{
            //  bandera=0;
                $('#requerido_pass').hide(); 
            }

            if($('#email').val()==''){bandera=1;$('#requerido_email').show();}
            /* Validación de correo eletrónico */
            if($('#email').val()!=$('#emailrepeat').val()){
                bandera=1;
                $('#requerido_emailrepeat').show();
                $('#emailrepeat').focus();
            }else{
              //  bandera=0;
                $('#requerido_emailrepeat').hide();
            }
            
            if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#email').val())) ) {bandera=1;$('#requerido_email').show();}
           
            if(bandera==0)
            {
                
                $('#Enviar_Registro').hide();
                $('#enviando_registro').show();
                /////////////////////////////////////////////////////
                /////////////////////////////////////////////////////
                /////////////////////////////////////////////////////
               
               $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
                correo: $('#email').val()

				
				},
				url:"<?= site_url('Registro/verificarCorreo') ?>", 
				async: true,	 
				success: function(response)
				{
                   if(parseInt(response)==0)
                   {
                        guardarDatos();
                    }
                    else
                    {

                        ////////////////////////////////////////////
                            swal({   
                                    title: "Error!",   
                                    text: "El correo ingresado ya esta registrado por favor ingrese uno direfente",   
                                    type: "warning",   
                                    showCancelButton: false,   
                                    confirmButtonColor: "#656668",
                                    confirmButtonText: "Aceptar",   
                                    closeOnConfirm: true,   
                                }, 
                                  function(isConfirm)
                                    {   
                                        if (isConfirm) 
                                        {  
                                            
                                            $('#Enviar_Registro').show();
                                            $('#enviando_registro').hide();
                                          //$('#name').focus();
                                            // location.reload(); 
                                        } 
                                        else 
                                        {     
                                            //location.reload();
                                        }    
                                    }
                                );
                        ////////////////////////////////////////////
                    }
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                /////////////////////////////////////////////////////
                /////////////////////////////////////////////////////
            }
            
        }
        
        function guardarDatos()
        {
                /////////////////////////////////////////////////////
                /////////////////////////////////////////////////////
                /////////////////////////////////////////////////////

            
               $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
                nombre: $('#name').val(),
                user: $('#name').val()+' '+$('#apPaterno').val(),
                apPaterno: $('#apPaterno').val(),
                apMaterno: $('#apMaterno').val(),
                telefono: $('#phone').val(),
                correo: $('#email').val(),
                pass: $('#pass').val()
              

				
				},
				url:"<?= site_url('Registro/guardarDatos') ?>", 
				async: true,	 
				success: function(response)
				{
                  
                   if(parseInt(response)==1)
                   {
                        ////////////////////////////////////////////
                            swal({   
                                    title: "Registro exitoso!",   
                                    text: "Verificar su bandeja de correos para terminar el proceso de registro.",   
                                    type: "success",   
                                    showCancelButton: false,   
                                    confirmButtonColor: "#656668",
                                    confirmButtonText: "Aceptar",   
                                    closeOnConfirm: true,   
                                }, 
                                  function(isConfirm)
                                    {   
                                        if (isConfirm) 
                                        {    
                                            location.reload(); 
                                        } 
                                        else 
                                        {     
                                            location.reload();
                                        }    
                                    }
                                );
                        ////////////////////////////////////////////
                    }else
                    {
                        
                    }
                    
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                /////////////////////////////////////////////////////
                /////////////////////////////////////////////////////
        }
    
        
        
	</script>
