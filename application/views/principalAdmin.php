<?php
//print_r($css_files);
foreach($css_files as $file):
   //var_dump($css_files);
    // $Var_css_https=str_replace('http://', 'https://', $file) ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file):
 //$Var_js_https=str_replace('http://', 'https://', $file)
?>

<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
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


<!---->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalert/sweetalert.css'; ?>">
<script text="text/javascript" src="<?php echo base_url().'assets/js/sweetalert/sweetalert.min.js'; ?>"></script>
<section id="container" >

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3 style="color:#11147D"><i class="fa fa-angle-right" ></i><?php if(isset($titulo)){ echo $titulo;}
                else
                {
                    if(isset($titulo)){ echo 'das';}
                }
                ?></h3>
          	<h5><i class="fa fa-angle-right"></i><?php if(isset($titulo)){ echo $subtitulo;}
                else{
                    
                    if(isset($titulo)){ echo $subtitulo;}
                } 
                ?></h5>
          	<div class="row mt">
          		<div class="col-lg-12">
<!--          		<p>Place your content here.<?php echo ''.$valorPrueba; ?></p>-->
                    <?php echo $output; ?>
          		</div>
          	</div>
            <input value="" style="display:none;" id="valor1" name="valor1">
			<input value="" style="display:none;" id="valor" name="valor">
            <input value="" style="display:none;" id="opc" name="opc">
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
        
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
<script type="text/javascript">
 /*   function ValidarElimiar(id)
    {
        $('#opc').val(1);
        $('#valor').val(id);
        $('#valor1').val(id);
confirmaciones();
        //$('#aviso_guardar').show();
    
    } 
    function ValidarElimiarProveedor(id)
    {
         $('#opc').val(2);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmaciones();
        //$('#aviso_guardar').show();
      
    }
     function ValidarElimiarInventario(id)
    {
         $('#opc').val(3);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmaciones();
        //$('#aviso_guardar').show();
        
    }
     function ValidarElimiarKits(id)
    {
         $('#opc').val(4);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmaciones();
        //$('#aviso_guardar').show();
        
    }*/
     function ValidarEliminarClasificacion(id)
    {
         $('#opc').val(1);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmaciones();
        //$('#aviso_guardar').show();
       
    }
     function ValidarElimiarCursos(id)
    {
         $('#opc').val(6);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmaciones();
        //$('#aviso_guardar').show();
      
    }
     function ValidarElimiarUsuarios(id)
    {
         $('#opc').val(7);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmaciones();
        //$('#aviso_guardar').show();
       
    }
   
    function cierraVentana_eliminar_confirm()
    {
    
    
        $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
                    id:$('#valor').val(),
				opcion: $("#opc").val()
				},
				url:"<?= site_url('Admin/eliminarRow') ?>",
				async: true,	 
				success: function(response)
				{
             swal("Deleted!", "El registro ha sido eliminado correctamente", "success");  
                     parent.location.reload(true);
            
                },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                
    }
    
    function confirmaciones()
    {
        
                swal({   
                    title: "¿Está seguro que desea eliminar?",   
                    text: "Esta acción borrara el registro.",   
                    type: "warning",   
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
                           // swal("Deleted!", "Your imaginary file has been deleted.", "success");  
                             swal({   
                                title: "¿Está seguro que desea eliminar?",   
                                text: "La siguiente acción eliminara permanentemente el elemento seleccionado.",   
                                type: "warning",   
                                showCancelButton: true,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: false,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    if (isConfirm) 
                                    {     cierraVentana_eliminar_confirm();
                                        
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
    
    
    /////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
     function ValidarEliminarPermanentementeGaleria(id)
    {
         $('#opc').val(1);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmacionesPermanente();
        //$('#aviso_guardar').show();

    }
    function ValidarEliminarPermanentementeGaleriaProductos(id)
    {
         $('#opc').val(3);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmacionesPermanente();
        //$('#aviso_guardar').show();
       
    }
      function ValidarEliminarPermanentementeArtista(id)
    {
         $('#opc').val(2);
        $('#valor').val(id);
        $('#valor1').val(id);
        confirmacionesPermanente();
        //$('#aviso_guardar').show();
       
    }
     function confirmacionesPermanente()
    {
        
                swal({   
                    title: "¿Está seguro que desea eliminar?",   
                    text: "Esta acción borrara el registro.",   
                    type: "warning",   
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
                           // swal("Deleted!", "Your imaginary file has been deleted.", "success");  
                             swal({   
                                title: "¿Está seguro que desea eliminar?",   
                                text: "La siguiente acción eliminara permanentemente el elemento seleccionado.",   
                                type: "warning",   
                                showCancelButton: true,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: false,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    if (isConfirm) 
                                    {     cierraVentana_eliminar_permanetemente_confirm();
                                        
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
    
      function cierraVentana_eliminar_permanetemente_confirm()
    {
    
    
        $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
                    id:$('#valor').val(),
				opcion: $("#opc").val()
				},
				url:"<?= site_url('Admin/eliminarPermanentemente') ?>",
				async: true,	 
				success: function(response)
				{
             swal("Deleted!", "El registro ha sido eliminado correctamente", "success");  
                     parent.location.reload(true);
            
                },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
                
    }
    
</script>


