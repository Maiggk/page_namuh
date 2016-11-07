      <!-- Start featured post-->
 <link href="<?php echo base_url(); ?>assets/subirFotos/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/subirFotos/css/croppic.css" rel="stylesheet">

      <main itemscope itemtype="" class="header-section">
        <div style="background-image: url('img/intro-home5.jpg');" class="parallax">
          <div class="section-shade sep-top-5x sep-bottom-sm">
            <div class="container">
              <div class="row">
                <div role="contentinfo" class="col-md-3 sidebar sep-bottom-xs">

                  <footer class="author-info"><a href="#" itemprop="author" class="post-author-link">
                      <img id='imgPerfil' src="
                                <?php if($userInfo->foto_perfil!=''){ ?>
                                <?php echo base_url().'assets/uploads/fotosPerfil/'.$userInfo->foto_perfil; ?>
                                <?php }else{?>
                           <?php echo base_url().'assets/uploads/fotosPerfil/usuario.png'; ?>
                                <?php } ?>"
                           alt="Henry Kolms" style="width:72px; height:72px;" class="img-circle img-responsive">
                      </a>
                    <div class="author-info-content light">
                      <h6 class="author-name"><?php echo $userInfo->username; ?></h6>
                      <time datetime="2014-06-17T14:28-08:00" itemprop="datePublished" class="small"><?php echo 'Hoy es '.date('d-M-Y');; ?></time>
                    </div>
                  </footer>
                </div>
                <div class="col-md-9 sep-bottom-xs section-title">
                  <header>
                    <h3 itemprop="headline" class="post-title light"><a href="blog-detail.html" rel="bookmark" title="link to this post" itemprop="url" class="light"></a>Información de mi<br> perfil</h3>
                    <time datetime="2009-10-22T14:28-08:00" itemprop="datePublished"></time>
                  </header>
                  <p class="lead light">Información de mi perfil</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
            <div class="row">
                
            </div>
            
            
            
            
         
            
            
            
          <div class="row">
              <!--col-md-push-1-->
            <div class="col-md-12 ">
              <footer role="contentinfo" class="post-info sep-top-md">
                <ul class="social-icon pull-right">
                  <!--<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>-->
                </ul>
            
                <ul class="social-icon">
                 <!-- <li><a href="#"><i class="fa fa-heart"></i><small>&nbsp;1500</small></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i><small>&nbsp;1500</small></a></li>
                  <li class="maxi"><a href="#"><i class="fa fa-comments"></i><small>&nbsp;1500 Comments</small></a></li>-->
                </ul>
              </footer>
                
        <div class="row mt">
             <center><a id="cambiarFoto" name="cambiarFoto" class="">Cambiar Foto de perfil</a></center>
			<div class="col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4" id='fotoPerfil' style="">
                <h4 class="centered"><center>Cambiar foto de perfil</center></h4>
				<div id="cropContainerEyecandy"></div>
			</div>
		</div>
                
              
                
                  <div  class="row" >
                      <center><a id="mostrarRecuperacionPass" name="mostrarRecuperacionPass" class="">Cambiar contraseña</a></center>
                <form class="form-horizontal" id="cambioPass" style="display:none;">
                    <fieldset>
                        <legend></legend>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="passwordinput">Contraseña actual</label>
                                <div class="col-md-4">
                                    <input id="oldPass" name="oldPass" type="password" placeholder="Contraseña actual" class="form-control input-md">
                                     <span class="help-block" id="requerido_oldPass_vacio" style="display:none;color: red;">Completar el campo</span>  <span class="help-block" id="requerido_oldPass_NoIguales" style="display:none;color: red;">Verificar su contraseña</span>  

                                </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="passwordinput">Nueva contraseña</label>
                                <div class="col-md-4">
                                    <input id="newPass" name="newPass" type="password" placeholder="Nueva contraseña" class="form-control input-md">
                                    <span class="help-block" id="requerido_newPass_vacio" style="display:none;color: red;">Completar el campo</span>  
                                     <span class="help-block" id="requerido_oldPass_vacio1">Longitud mínima de 8 caracteres y debe contener una letra mayúscula, una minúscula y números</span>  
                                     <span class="help-block" id="requerido_newPass_logMin" style="display:none;color: red;">Longitud mínima de 8 caracteres y debe contener una letra mayúscula, una minúscula y números</span>  
                                </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Repite nueva contraseña</label>  
                            <div class="col-md-4">
                                <input id="repitNewPass" name="repitNewPass" type="password" placeholder="Repite nueva contraseña" class="form-control input-md">
                                <span class="help-block" id="requerido_repitNewPass_vacio" style="display:none;color: red;">
                                    Completar el campo</span>   
                                 <span class="help-block" id="requerido_noCoincide_vacio" style="display:none;color: red;">El Campo contraseña no coincide</span>  
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="button1id"></label>
                            <div class="col-md-8">
                                <a id="guardar" name="guardar" onclick="validar_cambiarPassword()" class="btn btn-primary">Guardar</a>
                                <a id="cancelar" name="cancelar" class="btn  btn-primary">Cancelar</a>
                            </div>
                        </div>
                        
                    </fieldset>
                </form>
            </div>   
                
            
            <div>
                
                
                
                
                
        <center><a id="mostrarCombioInfo" name="mostrarCombioInfo" class="">Modificar información de perfil</a></center>
<form class="form-horizontal" name="formulario" id="formulario" style="display:none;"  method="POST" action="<?php echo base_url();?>index.php/Perfil/actualizarUsuario">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group"   >
  <label class="col-md-2 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" value="<?php echo $userInfo->nombre; ?>"  type="text" placeholder="Nombre" class="form-control input-md">
   <span class="help-block" id="requerido_nombre_vacio" style="display:none;color: red;">Completar el campo</span> 
  </div>
    
  <label class="col-md-2 control-label" for="textinput">Apellido paterno</label>  
  <div class="col-md-4">
  <input id="ap_paterno" name="ap_paterno" value="<?php echo $userInfo->ap_paterno; ?>" type="text" placeholder="Apellido paterno" class="form-control input-md">
   <span class="help-block" id="requerido_ap_paterno_vacio" style="display:none;color: red;">Completar el campo</span> 
  </div>
</div>
    
<div class="form-group">

    
  <label class="col-md-2 control-label" for="textinput">Apellido materno</label>  
  <div class="col-md-4">
  <input id="ap_materno" name="ap_materno" value="<?php echo $userInfo->ap_materno; ?>" type="text" placeholder="Apellido materno" class="form-control input-md">
  <span class="help-block" id="requerido_ap_materno_vacio" style="display:none;color: red;">Completar el campo</span> 
  </div>
    
  <label class="col-md-2 control-label" for="textinput">Nombre de usuario</label>  
  <div class="col-md-4">
  <input id="userName" name="userName" value="<?php echo $userInfo->username; ?>"  type="text" placeholder="Nombre de usuario" class="form-control input-md">
   <span class="help-block" id="requerido_userName_vacio" style="display:none;color: red;">Completar el campo</span> 
  </div>
</div>
    
    
<div class="form-group">
 
    
  <label class="col-md-2 control-label" for="textinput">Correo</label>  
  <div class="col-md-4">
  <input id="correo" name="correo" value="<?php echo $userInfo->correo; ?>"  type="e-mail" placeholder="Correo" class="form-control input-md">
  <span class="help-block" id="requerido_correo_vacio" style="display:none;color: red;">Completar el campo</span>
  <span class="help-block" id="requerido_correo_FormatoInvalid" style="display:none;color: red;">Formato incorrecto  </span>  
  <span class="help-block" id="requerido_correo_existe" style="display:none;color: red;">El correo ya existe</span>  
  </div>

  <label class="col-md-2 control-label" for="textinput">Teléfono</label>  
  <div class="col-md-4">
  <input id="telefono" name="telefono"  value="<?php echo $userInfo->telefono; ?>"  type="text" placeholder="Teléfono" class="form-control input-md">
  <span class="help-block" id="requerido_telefono_vacio" style="display:none;color: red;">Completar el campo</span> 
  </div>
    
</div>

    
<div class="form-group">
 
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Dirección</label>  
  <div class="col-md-4">
  <input id="direccion" name="direccion" value="<?php echo $userInfo->direccion; ?>"  type="text" placeholder="Dirección" class="form-control input-md">
  <span class="help-block" id="requerido_direccion_vacio" style="display:none;color: red;">Completar el campo</span>  
  </div>
</div>
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Foto de perfil</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>-->
    
    

<div class="form-group">
 
  <div class="col-md-12">
      <center> 
          <button id="cancelarInfoPersonal" style="display:none;" type="submit" name="cancelarInfoPersonal" class="btn btn-danger"></button>
          <a id="guardarInfoPersonal" onclick="validar_DatosUser()" name="guardarInfoPersonal" class="btn  btn-primary">Guadar</a>
         <a id="cancelarInfo" name="cancelarInfo" class="btn  btn-primary">Cancelar</a>
      </center>
      
  </div>
</div>



</fieldset>
</form>
            </div>
                
                
                
       
                
                
              <div itemprop="articleBody" class="post-text sep-top-sm">
              
              </div>
              
            </div>
          </div>
        </div>
      </main>
      <!-- End featured post-->
  	<script src="<?php echo base_url(); ?>assets/subirFotos/croppic.min.js"></script>
  	<!--<script src="<?php echo base_url(); ?>assets/subirFotos/croppic.min.js"></script>-->
     <script type="text/javascript">
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         $('#mostrarRecuperacionPass').click( function()
                                             {
                                                
                if( $('#cambioPass').is(":visible") ){
                    $('#cambioPass').hide();
                }else{
                    $('#cambioPass').show();
                    $('#formulario').hide();
                     $('#fotoPerfil').hide();
                }
                                             });
         
         $('#cambiarFoto').click( function()
                                             {
                 if( $('#fotoPerfil').is(":visible") ){
                    $('#fotoPerfil').hide();
                }else{
                    $('#fotoPerfil').show();
                    $('#cambioPass').hide();
                     $('#formulario').hide();
                }
                                             }); 

         $('#mostrarCombioInfo').click( function()
                                             {
               if( $('#formulario').is(":visible") ){
                    $('#formulario').hide();
                }else{
                    $('#formulario').show();
                    $('#fotoPerfil').hide();
                      $('#cambioPass').hide();
                }
                                             });   
         
         $('#cancelar').click( function()
                                             {
                                                $('#cambioPass').hide();
                                                $("#oldPass").val('');
                                                $("#newPass").val('');
                                                $("#repitNewPass").val('');
                                             }); 
         $('#cancelarInfo').click( function()
                                             {
                                                $('#formulario').hide();
                                                
                                             });
         
         $("#oldPass").focus(function()
                                 {
                   $("#requerido_oldPass_vacio").css("display", "none").fadeOut(2000);
                   $("#requerido_oldPass_NoIguales").css("display", "none").fadeOut(2000);
               });
         $("#newPass").focus(function()
                                 {
                   $("#requerido_newPass_vacio").css("display", "none").fadeOut(2000);
                   $("#requerido_newPass_logMin").css("display", "none").fadeOut(2000);
               });
         $("#repitNewPass").focus(function()
                                 {
                   $("#requerido_repitNewPass_vacio").css("display", "none").fadeOut(2000);
                   $("#requerido_noCoincide_vacio").css("display", "none").fadeOut(2000);
               });
         function validar_cambiarPassword()
         {
             var valid=0;
                //  pass1  passTemp
                //  pass1 passTemp
                //    pass1Error longuitudMinina passTempError passTempErrorNoCoincide
                if($('#oldPass').val()==''){  valid=1; $('#requerido_oldPass_vacio').show(); }
                var pass11=0;
                var passTem11=0;
                if($('#newPass').val()==''){pass11=1;   valid=1;   $('#requerido_newPass_vacio').show(); }
                else
                {
                     if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}$/.test($('#newPass').val())))
                     {valid=1; $('#requerido_newPass_logMin').show(); pass11=1; }
                }
                  if($('#repitNewPass').val()==''){passTem11=1;  valid=1; $('#requerido_repitNewPass_vacio').show(); }
                
                if(pass11==0 && passTem11==0)
                {
                    
                    
                    if($('#pass1').val()!=$('#passTemp').val())
                    {
                         valid=1;
                       $('#requerido_noCoincide_vacio').show(); 
                    }
                }
             
                if(valid==0)
                {
                    $.ajax({
				        type: "POST", //envia la posicion por metodo post de ajax
				        data:{
				        pass: $("#oldPass").val()
				        },
				        url:"<?= site_url('Perfil/buscarPassword') ?>",
				        async: true,	 
				        success: function(response)
				        {
   
                        
                            if(parseInt(response)==1)
                            {
                         
                                guardar_cambiarPassword();
                            }
                            if(parseInt(response)==0) //son direfentes
                            {
                               $('#requerido_oldPass_NoIguales').show();
                            } 
                        }
                        });
                }
         }
          function guardar_cambiarPassword()
         {
            $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
				data:{
				pass: $("#newPass").val()
				    },
				url:"<?= site_url('Perfil/actualizarPass') ?>",
				async: true,	 
				success: function(response)
				{
                
                       swal({   
                                title: "Su contraseña se ha actualizado",   
                                text: "Exitosamente",   
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
                                    } else 
                                    {     
                                        location.reload();
                                    } 
                                }
                            );   
                
                }
                });  
         }
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
               $("#nombre").focus(function(){$("#requerido_nombre_vacio").css("display", "none").fadeOut(2000);});
               $("#ap_paterno").focus(function(){$("#requerido_ap_paterno_vacio").css("display", "none").fadeOut(2000);});
               $("#ap_materno").focus(function(){$("#requerido_ap_materno_vacio").css("display", "none").fadeOut(2000);});
               $("#userName").focus(function(){$("#requerido_userName_vacio").css("display", "none").fadeOut(2000);});
               $("#correo").focus(function(){
                   $("#requerido_correo_vacio").css("display", "none").fadeOut(2000);
                   $("#requerido_correo_FormatoInvalid").css("display", "none").fadeOut(2000);
                   $("#requerido_correo_existe").css("display", "none").fadeOut(2000);
               });
               $("#telefono").focus(function(){$("#requerido_telefono_vacio").css("display", "none").fadeOut(2000);});
               $("#direccion").focus(function(){$("#requerido_direccion_vacio").css("display", "none").fadeOut(2000);});
         function validar_DatosUser()
         {
             var valid=0;
             if($('#nombre').val()==''){  valid=1; $('#requerido_nombre_vacio').show(); }
             if($('#ap_paterno').val()==''){  valid=1; $('#requerido_ap_paterno_vacio').show(); }
             if($('#ap_materno').val()==''){  valid=1; $('#requerido_ap_materno_vacio').show(); }
             if($('#userName').val()==''){  valid=1; $('#requerido_userName_vacio').show(); }
            
             if($('#telefono').val()==''){  valid=1; $('#requerido_telefono_vacio').show(); }
             if($('#direccion').val()==''){  valid=1; $('#requerido_direccion_vacio').show(); }
              if($('#correo').val()==''){  valid=1; $('#requerido_correo_vacio').show(); }else{
            if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#correo').val())) ) {
                valid=1;$('#requerido_correo_FormatoInvalid').show();
            }
              }
             
             if(valid==0)
             {
                $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
				data:{
				email: $("#correo").val()
				    },
				url:"<?= site_url('Registro/verificarDatosrecivery') ?>",
				async: true,	 
				success: function(response)
				{
                     ///response=1 exitoso
                    ///response=0 correo no existente

                    if(parseInt(response)==1)
                    {
                        guardar_DatosUser();
                    }
                    if(parseInt(response)==0)
                    {
                        $('#requerido_correo_existe').show();
            
                    } 
                }
                });  
             }
         }
         function guardar_DatosUser()
         {
            $('#cancelarInfoPersonal').click();
         }
         
         $(document).ready(function ()
	     {		
<?php
                              if($this->session->userdata('msj_exito')==1)
                              {
?>
								
								 swal({   
                                    title: "Registro exitoso!",   
                                    text: "",   
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
                                           // location.reload(); 
                                        } 
                                        else 
                                        {     
                                            //location.reload();
                                        }    
                                    }
                                );
								
<?php
                                  $this->session->unset_userdata('msj_exito');
                              }
?>
    });
         
     
         var croppicContainerEyecandyOptions = {
				uploadUrl:"<?= site_url('Perfil/gurdarInagenPerfil') ?>",
				cropUrl:'<?= site_url('Perfil/imagen') ?>',
            // loadPicture:'< ?php echo base_url(); ?>assets/uploads/fotosPerfil/< ?php echo $userInfo->foto_perfil; ?>',
				imgEyecandy:false,				
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ 
                    mensajeNuevaFotoDePerfil();
               // console.log('onAfterImgUpload') 
                },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ 
                    mensajeNuevaFotoDePerfil();
                   // console.log('onAfterImgCrop')
                },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		
		 var cropContainerEyecandy = new Croppic('cropContainerEyecandy', croppicContainerEyecandyOptions);
  
         function mensajeNuevaFotoDePerfil()
         {
              swal({   
                                title: "Su Foto de perfil se ha actualizado",   
                                text: "Exitosamente",   
                                type: "success",   
                                showCancelButton: false,   
                                confirmButtonColor: "#656668",
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: true,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    consultarNuevaFotodePerfil();
                                    if (isConfirm) 
                                    {    
                                      //  location.reload();
                                    } else 
                                    {     
                                        //location.reload();
                                    } 
                                }
                            );  
         }
         function consultarNuevaFotodePerfil()
         {
             $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
				data:{
				
				    },
				url:"<?= site_url('Perfil/consultarNuevaFotodePerfil') ?>",
				async: true,	 
				success: function(response)
				{
                
                    if(response!='')
                    {  
                       document.getElementById('imgPerfil').src=response;
                    }
                
                }
                });  
         }
     </script>
