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
              <h3 style="color:#11147D"><i class="fa fa-angle-right" ></i><?php 
                  echo $tit;
                
                ?></h3>
          	<h5><i class="fa fa-angle-right"></i><?php 
                    
                    echo $sub;
                
                ?></h5>
          	
          	<div class="row mt">
          		<div class="col-md-12">
                    
                    
                    <!-- inputs para lefctura de codigos de barras  -->
                    <!-- inputs para lefctura de codigos de barras  -->
                    <form class="form-horizontal" >
                        <fieldset>
                            <!-- Form Name -->
                            <legend></legend>
                            <!-- Text input-->
            <?php
                         //  echo "asdas";
                        //    print_r($product);
                            ?>
                            <div class="form-group">
							     <label class="col-md-4 control-label" style="    text-align:right;" for="textinput">Categoría</label>
                                 <div class="col-md-5"> 
							         <select id="categoria" name="categoria" onchange="cambiarGrupo()" class="form-control ">
								        <option selected value="<?php 
                                                               
                                                                 if(count($product)>0)
                                                                    echo $product->id_categorias; 
                                                                    else
                                                                        echo '0';
                                                                ?>">
                                            <?php 
                                            
                                            if(count($product)==0)
                                            {
                                                echo 'Seleccionar';
                                            
                                            } else
                                            {
                                                echo $product->categoria;
                                            }
                                            
                                            ?>
                                         </option>
								                <?php foreach($categorias as $categoria){ ?>
								                    <option value="<?php echo $categoria->id_categorias; ?>">
									                       <?php echo $categoria->categoria; ?>
								                    </option>
								                <?php } ?>
							         </select>
                                    <span class="help-block" id="alertCategoria" style="display:none;color: red;">Seleccionar una Categoría </span>  
                                 </div>
						     </div>
                            <?php 
                            //print_r($grupo); 
                            ?>
                            <!-- Select Basic -->
                            <div class="form-group"  >
                                <label class="col-md-4 control-label" style="    text-align:right;" for="idEmpleado">Grupo</label>
                                    <div class="col-md-5 ">
                                        <select id="grupo" name="grupo" onchange="cambiarTipo()"  class="form-control">
                                            <option selected value="<?php 
                                                                    if(count($grupo)>0)
                                                                    echo $grupo->id_grupo;
                                                                    else
                                                                        echo '0';
                                                                    ?>">
                                              <?php 
                                                 if(count($grupo)==0)
                                                 {
                                                   echo 'Seleccionar';  
                                                 }else
                                                 {
                                                    echo $grupo->grupo; 
                                                 }
                                                /*
                                            if($product->id_grupo==0)
                                            {
                                                echo 'Seleccionar';
                                            
                                            } else
                                            {
                                                echo $product->grupo;
                                            }
                                            */
                                            ?>
                                            </option>
                                        </select>
                                <span class="help-block" id="alertGrupo" style="display:none;color: red;">Seleccionar un grupo</span>  
                                    </div>
   
                            </div>
                            <?php 
                            //echo 'as: '.count($grupo);
                            ?>
                            <!-- Select Basic -->
                            <div class="form-group"  >
                                <label class="col-md-4 control-label" style="    text-align:right;" for="idEmpleado">Tipo</label>
                                    <div class="col-md-5 ">
                                        <select id="tipo" name="tipo" class="form-control">
                                            <option selected value="<?php //echo $product->id_tipo;
                                                                    if(count($tipo)>0)
                                                                    echo $tipo->id_tipo;
                                                                    else
                                                                        echo '0';
                                                                    ?>">
                                            
                                                <?php 
                                                 if(count($tipo)==0)
                                                 {
                                                   echo 'Seleccionar';  
                                                 }else
                                                 {
                                                    echo $tipo->tipo; 
                                                 }
                                                /*
                                            if($product->id_tipo==0)
                                            {
                                                echo 'Seleccionar';
                                            
                                            } else
                                            {
                                                echo $product->tipo;
                                            }
                                            */
                                            ?>
                                                
                                            </option>
                                        </select>
                                <span class="help-block" id="alertTipo" style="display:none;color: red;">Seleccionar un grupo</span>  
                                    </div>
   
                            </div>
                            
                            <?php 
                          //  print_r($productos);
                            ?>
                            
                             <div class="form-group">
							     <label class="col-md-4 control-label" style="    text-align:right;" for="textinput">Producto</label>
                                 <div class="col-md-5"> 
							         <select id="producto" name="producto"  class="form-control ">
								        <option selected value="<?php 
                                                                
                                                                 if(count($product)>0)
                                                                    echo $product->id_producto;
                                                                    else
                                                                        echo '0';
                                                                ?>"><?php 
                                            
                                            if(count($product)==0)
                                            {
                                                echo 'Seleccionar';
                                            
                                            } else
                                            {
                                                echo $product->nombre;
                                            }
                                             
                                            ?>
                                        
                                         </option>
								                <?php foreach($productos as $producto){ ?>
								                    <option value="<?php echo $producto->id_producto; ?>">
									                       <?php echo $producto->nombre; ?>
								                    </option>
								                <?php } ?>
							         </select>
                                    <span class="help-block" id="alertProducto" style="display:none;color: red;">Seleccionar un producto</span>  
                                 </div>
						     </div>
                            <div class="form-group">
							     <label class="col-md-4 control-label" style="    text-align:right;" for="textinput">Agregar a lista de aparición</label>
                                 <div class="col-md-5">
							         <select id="Lista" name="Lista"  class="form-control ">
								        <option selected value="<?php

                                                                 if(count($lista)>0)
                                                                    echo $lista->numero_aparicion;
                                                                    else
                                                                        echo '0';
                                                                ?>"><?php

                                            if(count($lista)==0)
                                            {
                                                echo 'Seleccionar';

                                            } else
                                            {
                                                echo $lista->orden;
                                            }

                                            ?>

                                         </option>
								                <?php foreach($listasAp as $listaAp){ ?>
								                    <option value="<?php echo $listaAp->numero_aparicion; ?>">
									                       <?php echo $listaAp->orden; ?>
								                    </option>
								                <?php } ?>
							         </select>
                                      <span class="help-block" id="alertLista" style="display:none;color: red;">Seleccionar un orden de aparición</span>
                                 </div>
						     </div>
                            
                      
                            
                            <div class="form-group">
  <input id="idClass" style="display:none;" name="idClass" type="text"  value="<?php echo $idClass;?>" placeholder="placeholder" class="form-control input-md">
  <div class="col-md-12" style="text-align:center;">
    <a  id="guardar" name="guardar" onclick="verificarDatos()" class="btn btn-success">Agregar</a>
    <a  id="cancelar" name="cancelar" onclick="cancelar()" class="btn btn-danger">Cancelar</a>
    <button id="guardar" type="submit" style="display:none" name="guardar" class="btn btn-success">Agregar</button>
    <!--<button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
      <a id="cancelar" name="cancelar" onclick="cerrarFancy()" class="btn btn-danger">Cancelar</a>-->
  </div>
    
</div>
                            <!-- Text input-->
                        </fieldset>
                    </form>
                    <!-- inputs para lefctura de codigos de barras  -->
                    <!-- inputs para lefctura de codigos de barras  -->
                
                
                <div id="results"></div>
                </div>
                <!-- fsdfdsfsdfsdf -->
      
                <!-- fsdfdsfsdfsdf -->
    </section>
              </div>
    </section>
    
</section>

<script type="text/javascript">
    function cancelar()
    {
        parent.location.href="<?php echo base_url();?>index.php/Admin/clasificacion"; 
    }
    function cambiarTipo()
    {
        if($('#grupo').val()>0)
        {
            $.getJSON("<?= site_url('Admin/regresarTipos') ?>", 
                    {
                        grupo:$('#grupo').val()
                    },
				    function(data)
                    {					
						var Empleado = $('#tipo');
						$("option", Empleado).remove();
						var option = '';
                
                        Empleado.append('<option value="0" >Seleccionar</option>');
						$.each(data, function(index, op)//Recorrer el Json elemeto x elemeto
                        {                           
				Empleado.append('<option value="'+op.id_tipo+'" >'+op.tipo+'</option>');
							
                           
							
						});
                       //$('#Empleados').show();
					});
        }  
    }
    function cambiarGrupo()
    {
         if($('#categoria').val()>0)
        {
            $.getJSON("<?= site_url('Admin/regresarGrupos') ?>", 
                    {
                        categoria:$('#categoria').val()
                    },
				    function(data)
                    {					
						var Empleado = $('#grupo');
						$("option", Empleado).remove();
						var option = '';
                
                        Empleado.append('<option value="0" >Seleccionar</option>');
						$.each(data, function(index, op)//Recorrer el Json elemeto x elemeto
                        {                           
				Empleado.append('<option value="'+op.id_grupo+'" >'+op.grupo+'</option>');
							
                           
							
						});
                
                        var tipo = $('#tipo');
						$("option", tipo).remove();
						var option1 = '';
                
                        tipo.append('<option value="0" >Seleccionar</option>');
                       //$('#Empleados').show();
					});
        } 
    }
    

    function guardarTipo()
    {
      /*   if($("#tipo").val()>0 && $('#categoria').val()>0 && $('#grupo').val()>0&& $('#producto').val()>0)
        {*/
               $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				tipo: $("#tipo").val(),
				grupo: $("#grupo").val(),
				categoria: $("#categoria").val(),
				producto: $("#producto").val(),
				iDclass: $("#idClass").val(),
				Lista: $("#Lista").val()
				},
				url:"<?= site_url('Admin/updateClasificacion') ?>", 
				async: true,	 
				success: function(response)
				{
  
                   
                  parent.location.href="<?php echo base_url();?>index.php/Admin/clasificacion";
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
/*    }*/
}
function verificarDatos()
    {
        var indicador=0;
        //if($('#grupo').val()==0){indicador=1;$("#alertGrupo").show();}
        if($('#categoria').val()==0 ){indicador=1;$("#alertCategoria").show();}
       // if($("#tipo").val()==''){indicador=1;$("#alertTipo").show();}
        if($("#producto").val()==0){indicador=1;$("#alertProducto").show();}
           if($("#Lista").val()==0){indicador=1;$("#alertLista").show();}
        if(indicador==0)
        {
            //alert('asads');
            guardarTipo();
        }
    }
     $("#grupo").focus(function(){$("#alertGrupo").css("display", "none").fadeOut(2000);});
             $("#categoria").focus(function(){$("#alertCategoria").css("display", "none").fadeOut(2000);});
             $("#tipo").focus(function(){$("#alertTipo").css("display", "none").fadeOut(2000);});
             $("#producto").focus(function(){$("#alertProducto").css("display", "none").fadeOut(2000);});
    $("#Lista").focus(function(){$("#alertLista").css("display", "none").fadeOut(2000);});

        
 
 
</script>

  <script type="text/javascript">
  /*
      $(document).ready(function() {
	 // $("a#single_image").fancybox();
		
	

		/* Apply fancybox to multiple items
		
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
  });*/
  </script>
