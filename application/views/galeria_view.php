<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>NAMUH | Productos</title>

      <!-- ====Favicons==== -->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
      <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">


      <meta name="description" content="Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- <link href="< ?php echo base_url(); ?>assets/css/menuNamuh.css" rel="stylesheet">-->
     <link href="<?php echo base_url(); ?>assets/css/menuNamuh/menu.css" rel="stylesheet">
<!--       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap.min.css">-->
<!--          <link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets/css/googlecss.css">-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/font-awesome.css">
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!--    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/main-responsive.css">
      
       
            <!--menu movil-->
 <link href="<?php echo base_url(); ?>assets/galeria/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/galeria/assets/css/style-responsive.css" rel="stylesheet">
     <style type='text/css'>
.subM
{
}
.subM1
{
}
</style> 
 
<!--<script src="<?php echo base_url(); ?>assets/js/photoswipe_master/jquery.min.js"></script>-->
      <style type="text/css">
html,
body { 
  height: 100%; 
  margin: 0; 
  padding: 0; 
  text-align: center;
}
  
body {
  display: table;
  width: 100%;
}
.clase-general{
  display: table-row;
}
 footer {
   background: #222222; height: 200px;
 }
 
 
          .font_color{
              color: #909090;
          }
          .font_color_slogan{
              color: #909090;
          }
          .font_color:hover{
              color: #fff;
          }
          .mantente_contacto{
              color: #ffffff;
                font-family: 'Montserrat', sans-serif;
              font-size: 0.8em;
                line-height: 1.1;
          }
          .color_icon {
  color:#909090;
}
          .color_icon:hover {
  color:#fff;
}
         
 </style>
  </head>
     
<body>
     
     <header class="header black-bg" >

            <div class="top-menu">
            <br/>
                <ul   class="nav pull-right top-menu" style="text-align:center;">

                </ul>
                
            <div class="">

                <div class="col-md-12">
                   
                    <a href="<?php echo base_url(); ?>" > <img src="<?php echo base_url();?>assets/img/logo_Main.png" width="15%"> </a>
                    <div class="row"> </div>
                </div>
            <div class="col-md-6">

            <a href="#" class="btn btn-default"   id="return1" role="button">Menu</a>
                
            </div>
                </div>
            <!--<ul class="nav pull-right top-menu">
                 
                </ul> 
            <!--
            <ul class="nav pull-right top-menu">
                     <a href="#" class="btn btn-default" onclick="ocultar()" style="display:none;" id="return2" role="button">Ocultar Menu</a>
                </ul>-->
            </div>
    </header>
     

        <div class="">
         
             
               
         <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
    <div class="row" id="menuMovil" style="display:none;" >
      <aside>
          <div id="sidebar"  class="nav-collapse ">
               
               
               
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" style=" margin-top: 106px" id="nav-accordion" >
                     
                  <li class="">
                      <a class="active" onclick="filtroNinguno()" href="#">
                          <span>MOSTRAR TODAS</span>
                      </a>
                  </li>
    <?php
    $i=0;
        foreach($categorias as $categoria)
        {
    ?> 
             
                     
                     <li class="sub-menu">
                      <a href="javascript:;" onclick="filtroCategorias1(<?php echo $categoria['ID_CATEGORIA'];?>)" >
                          
                          <span><?php echo $categoria['nombreCategoria']; ?></span>
                      </a>
                      <ul class="sub">
                           
    <?php 
            foreach($categoria['grupos'] as $grupo)
            {
            $j=0;
    ?>
                           <li class="sub-menu" style="    background: #404042;">
                                <a href="javascript:;" style="text-align: left;"
                                   onclick="filtroGrupos1(<?php echo $grupo['ID_GRUPO'];?>,<?php echo $categoria['ID_CATEGORIA'];?>)"  >
                                 
                                <span><?php echo $grupo['nombreGrupo']; ?></span>
                                </a>
                                <ul class="sub">
                   
                        
    <?php
                foreach($grupo['tipos'] as $tipo)
                {    
    ?>
                     
                            <li style=" background: #525252;"><a  style="text-align: left;" onclick="filtroTipo1(<?php echo $tipo->id_tipo;?>,<?php echo $grupo['ID_GRUPO'];?>,<?php echo $categoria['ID_CATEGORIA'];?>)" href="#"><?php print($tipo->tipo);?></a></li>
    <?php 
                }
    ?>
                        </ul>
                    </li>                           
    <?php
                    
            }                
        $i=$i+1;
    ?>
           <!-- </li>-->
            </ul>
        </li>
    <?php
        }
    ?>
    </ul>
          </div>
      </aside>
        </div>
      <!--sidebar end-->
      <br/>
      <br/>
      <br/>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->   
           
             
             
             
             
             
             
        <div class="mainWrap " style="">
            <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
        <nav>
             
            <ul class="menu" style="    z-index: 1;">
               <!-- <img src="< ?php echo base_url();?>assets/img/logo_Main.png" width="10%">-->
                <li class=""><a onclick="filtroNinguno()" href="#">MOSTRAR TODAS</a></li>
                    <?php $i=0; foreach($categorias as $categoria) { ?> 
                        <li> 
                             <a onclick="filtroCategorias1(<?php echo $categoria['ID_CATEGORIA'];?>)" >
                                        <?php echo $categoria['nombreCategoria']; ?>
                             </a>
                            <ul class="sub-menu" style="    z-index: 9999;">    
                            <?php foreach($categoria['grupos'] as $grupo) { $j=0; ?>
                                <li> 
                                    <a  style="background: #5f5d5d;    color: white;" onclick="filtroGrupos1(<?php echo $grupo['ID_GRUPO'];?>,<?php echo $categoria['ID_CATEGORIA'];?>)" href="#">
                                        <?php echo $grupo['nombreGrupo']; ?>
                                    </a>
                                    <ul> 
                                <?php foreach($grupo['tipos'] as $tipo) { ?>
                                                        <li><a  style="background: #e5e5e5;color: black;" onclick="filtroTipo1(<?php echo $tipo->id_tipo;?>,<?php echo $grupo['ID_GRUPO'];?>,<?php echo $categoria['ID_CATEGORIA'];?>)" href="#"><?php print($tipo->tipo);?></a></li>
                                <?php } ?>
                                    </ul>
                                </li>                           
                            <?php } $i=$i+1; ?>
                                <!-- </li>-->
                            </ul>
                        </li>
                    <?php } ?>
            </ul>
        </nav>
        </div>
        </div>
    </header>
     
    <div class="clase-general">
        <div id="resp"></div>
        <div id="buscar"  style="display:none">
            <center> <img src="<?php echo base_url();?>assets/images/botones_carga.gif" style="width:25%"></center>
        </div>  
    </div>
 
  
    <footer class="clase-general">
        <div class="col-md-12" style="text-align:center"><br>
                <img src="<?php echo base_url();?>assets/img/logo_Main.png" width="15%"><br>
                <label class="font_color_slogan">Cada Pieza es una Historia</label>
                <h6 class="mantente_contacto">MANTENTE EN CONTACTO CON NOSOTROS</h6>
                    <ul class="social-icon sep-top-xs">
                        <li ><a  href="https://es.pinterest.com/Namuhmex/" target="_blank" class="color_icon fa fa-pinterest fa-2x"></a></li>
                        <li><a href="https://www.facebook.com/Namuh-384417778289934/?fref=tsw" target="_blank" class=" color_icon fa fa-facebook fa-2x"></a></li>
                        <li><a href="https://goo.gl/Cj84JC" target="_blank" class="color_icon fa fa-map-marker fa-2x"></a></li>
                        <li><a href="https://www.instagram.com/namuhmex/" target="_blank" class="color_icon fa fa-instagram fa-2x"></a></li>
                    </ul>
            <div class="row" style="text-align:center">
                <div class="col-md-4 col-md-offset-4">
                    <div class="col-md-4">
                        <small class=""><br><a class="font_color" href="<?php echo base_url(); ?>index.php/nosotros">Nosotros</a></small>
                    </div>
                    <div class="col-md-4">
                        <small class=""><br><a  class="font_color" href="<?php echo base_url(); ?>index.php/politicas">Políticas</a></small>
                    </div>
                    <div class="col-md-4"><!-- href="<?php echo base_url(); ?>index.php/divulgacion/prensa"-->
                        <small class=""><br><a  class="font_color">Prensa</a></small>
                    </div>

                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"> 
                <small class="font_color">
                   </small>
                 <small style="color:#fff">Copyright 2016 © NAMUH. Todos los derechos reservados. Desarollado por <a class="font_color"  target="_blank" href="http://cerbero.com.mx">Cerbero Soluciones Informáticas</a></small>
                
                
                
            </div>
          <!--  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background:#000"> <br>
               <small>Copyright 2016 © <a target="_blank" href="http://cerbero.com.mx">Cerbero Soluciones Informáticas</a>. Todos los derechos reservados.</small>
                <br>
                 
            </div>
            </div>-->
        </div>
        
    </footer>    
    
</body>
     
  
     
     
     
 
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/jquery.min.js"></script>
     
   <script src="<?php echo base_url(); ?>assets/css/menuNamuh/menu.js" type="text/javascript"></script> 
 <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap.js"></script>
<!--    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/script-min.js"></script>-->
 
 
        <!--menu movil-->
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/galeria/assets/js/jquery.dcjqaccordion.2.7.js"></script>
   <script src="<?php echo base_url(); ?>assets/galeria/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/galeria/assets/js/common-scripts.js"></script>
     
<script type="text/javascript">
 
    $('#return1').click(function(event){
    //event.preventDefault();
    //$('.inputDisabled').removeAttr("disabled")
        if($('#return1').html()=='Menu')
        {
            $('#return1').html('Ocultar Menu');
            $('#menuMovil').show(); 
        }else
            {
                 $('#return1').html('Menu');
                $('#menuMovil').hide(); 
            }
});
   function ver()
    {
      //$('#menuMovil').show(); 
       //$('#return1').hide(); 
       //$('#return2').show(); 
       //$('#nav-accordion').show();
          
        if ($('#return1').html().is(':hidden'))
        {
           alert('sda');
            //$('#return1').val('ocultar menu');
            $('#menuMovil').show(); 
        }
        else
        {
           // $('#return1').val('Menu');
            $('#menuMovil').hide(); 
        }
         
    }
    function ocultar()
    {
         $('#menuMovil').hide(); 
       $('#return1').show(); 
       $('#return2').hide(); 
    }
 
    function filtroCategorias(idCategoria)
    {
            $('#buscar').show();
               $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:{
                categoria: idCategoria
                 
                },
                url:"<?= site_url('Galeria/filtroCategorias') ?>", 
                async: true,     
                success: function(response)
                {
   
                    $('#buscar').hide();
                    $('#resp').html(response);
                 // parent.location.href="<?php echo base_url();?>index.php/Admin/tipo";
             },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                }
                });
     
    }  
    function filtroCategorias1(idCategoria)
    {
            $('#buscar').show();
               $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:{
                categoria: idCategoria
                 
                },
                url:"<?= site_url('Galeria/vfiltroCategorias') ?>", 
                async: true,     
                success: function(response)
                {
                    if(parseInt(response)>0)
                    {
                        filtroCategorias(idCategoria);
                    }
                    else
                    {
                         $('#buscar').hide();
                       // $('#resp').html(response);
                        //swal("Sin coincidencias!", "No se encontraron coincidencias", "warning");
        ////////////////////////////////////////////
            swal({   
                                title: "Sin coincidencias!",   
                                text: "No se encontraron coincidencias",   
                                type: "warning",   
                                showCancelButton: false,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                  
                                closeOnConfirm: true,   
                               }, 
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
        ////////////////////////////////////////////
                    }   
             },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                }
                });
     
    }  
    function filtroGrupos(idGrupo,idCategoria)
    {
 $('#buscar').show();
               $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:{
                grupo: idGrupo,
                categoria: idCategoria
                 
                },
                url:"<?= site_url('Galeria/filtroGrupos') ?>", 
                async: true,     
                success: function(response)
                {
                    $('#buscar').hide();
                   $('#resp').html(response);
                  //parent.location.href="<?php echo base_url();?>index.php/Admin/tipo";
             },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                }
                });
     
    }  
    function filtroGrupos1(idGrupo,idCategoria)
    {
 $('#buscar').show();
               $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:{
                grupo: idGrupo,
                categoria: idCategoria
                 
                },
                url:"<?= site_url('Galeria/vfiltroGrupos') ?>", 
                async: true,     
                success: function(response)
                {
                    if(parseInt(response)>0)
                    {
                        filtroGrupos(idGrupo,idCategoria);
                    }
                    else
                    {
                        $('#buscar').hide();
                       // $('#resp').html(response);
                        //swal("Sin coincidencias!", "No se encontraron coincidencias", "warning");
          ////////////////////////////////////////////
            swal({   
                                title: "Sin coincidencias!",   
                                text: "No se encontraron coincidencias",   
                                type: "warning",   
                                showCancelButton: false,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                 
                                closeOnConfirm: true,   
                               },  
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
        ////////////////////////////////////////////
                    }
             },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                }
                });
     
    }  
    function filtroNinguno()
    {
 $('#buscar').show();
               $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:{
 
                 
                },
                url:"<?= site_url('Galeria/filtroNinguno') ?>", 
                async: true,     
                success: function(response)
                {
   $('#buscar').hide();
                   $('#resp').html(response);
                  //parent.location.href="<?php echo base_url();?>index.php/Admin/tipo";
             },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                }
                });
     
    }
    function filtroTipo(id_tipo,id_grupo,id_categoria)
    {
         
 $('#buscar').show();
               $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:{
                tipo: id_tipo,
                grupo: id_grupo,
                categoria: id_categoria
                 
                },
                url:"<?= site_url('Galeria/filtroTipo') ?>", 
                async: true,     
                success: function(response)
                {
   $('#buscar').hide();
                   $('#resp').html(response);
                  //parent.location.href="<?php echo base_url();?>index.php/Admin/tipo";
             },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                }
                });
     
    }  
    function filtroTipo1(id_tipo,id_grupo,id_categoria)
    {
 $('#buscar').show();
               $.ajax({
                type: "POST", //envia la posicion por metodo post de ajax
                data:{
                tipo: id_tipo,
                grupo: id_grupo,
                categoria: id_categoria
                 
                },
                url:"<?= site_url('Galeria/vfiltroTipo') ?>", 
                async: true,     
                success: function(response)
                {
                   if(parseInt(response)>0)
                   {
                        filtroTipo(id_tipo,id_grupo,id_categoria);
                    }
                    else
                    {
                       $('#buscar').hide();
                       // $('#resp').html(response);
                       // swal("Sin coincidencias!", "No se encontraron coincidencias", "warning");
          ////////////////////////////////////////////
            swal({   
                                title: "Sin coincidencias!",   
                                text: "No se encontraron coincidencias",   
                                type: "warning",   
                                showCancelButton: false,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                 
                                closeOnConfirm: true,   
                               }, 
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
        ////////////////////////////////////////////
                    }
    
                  //parent.location.href="<?php echo base_url();?>index.php/Admin/tipo";
             },
                error: function (obj, error, objError){
                alert("Error: " + objError);
                }
                });
     
    }
     
     
 
     
 
         
  
  
</script>