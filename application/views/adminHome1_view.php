<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Colegio Nacional Cipriano Gomez Lara</title>
	
	<!-- Data Tables content -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dataTables/datatables.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/lineicons/style.css">    
     <link href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/admin/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();?>assets/admin/assets/js/chart-master/Chart.js"></script>
   <link href="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation" style="color: #FFF;"></div>
              </div>
         
          <!--<div class="nav notify-row" id="top_menu"><a class="navbar-brand" href="index.html"> </a></div>-->
         
            <div class="" id="top_menu">
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url();?>"><span class="trn">Regresar</span></a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
           <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
				  
				   <li class="mt">
                      <a class="active" href="<?php echo base_url().'index.php/admin'; ?>">
                          <i class="fa fa-book"></i>
                          admin <span class="trn"></span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a  href="<?php echo base_url().'index.php/admin/productos'; ?>">
                          <i class="fa fa-bookmark-o"></i>
                          <span>Productos</span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a  href="<?php echo base_url().'index.php/admin/categoria'; ?>">
                          <i class="fa fa-share-alt-square"></i>
                          <span class="trn">Categoría</span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a  href="<?php echo base_url().'index.php/admin/grupo'; ?>">
                          <i class="fa fa-facebook-square"></i>
                          <span class="trn">Grupo</span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a  href="<?php echo base_url().'index.php/Admin/tipo'; ?>">
                          <i class="fa fa-lock"></i>
                          <span class="trn">Tipo</span>
                      </a>
                  </li>
				  
				   
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                  
                  
                  <center><h1>admin <span class="trn">10a Epoca</span></h1></center>
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
  
                  
			<form class="form-horizontal">
				<fieldset>

				<!-- Form Name -->
				<legend></legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label trn" style="text-align: right;" for="textinput">Buscar</label>
				  <div class="col-md-4">
				  <input id="TextBuscar" name="TextBuscar" type="text" placeholder="Tema a buscar" class="form-control input-md">
				  <span class="help-block"></span>  
				  </div>
					<div class="col-md-4">
					<button id="singlebutton" style="display:none;" name="singlebutton" class="btn btn-primary"><span class="trn">Buscar</span></button>
					<a id="enviar" name="enviar" onclick="enviarDatos()" class="btn btn-primary trn">Buscar</a>
				  </div>
				</div>

				<!-- Button -->


				</fieldset>
			</form>
                      <div id="results"></div>
                  
				  
         <!-- Tabla de contenido -->
		 <?php 
							if($this->session->userdata('idUserD')=='1'){
								echo '<a  class="btn btn-default fancybox fancybox.iframe" id="add_blog"  href="admin/nueva_entrada_blog" ><i class="fa fa-desktop"></i> +Agregar</a>';
							}else{
								echo '';
							}
						?>
	<div id="tablaPrincipal">
	<br/>
		  <div class="table-responsive">
			<table class="table" id="blog_table">
					<thead>
					  <tr class="info">
						  <th>Titulo</th>
						  <th>Fecha</th>
						  <th>Recurso</th>
						  <th>Detalles</th>
					  </tr>
					</thead>
					<tbody>
					  <?php foreach($results as $data){ ?>
						
						<tr class="success">
						<td><?php echo $data->titulo; ?></td>
						<td><?php echo $data->fecha; ?></td>
						<?php if ($data->url!='') { ?>
							<td><a class="btn btn-default " href="<?php echo $data->url; ?>" target="_blank">Link</a></td>
						<?php }
							else{
								echo '<td></td>';
							}
						?>
						<td><a class="btn btn-success fancybox fancybox.iframe" href="<?php echo base_url().'index.php/admin/show_entry?id='.$data->id_blog; ?>"  >Ver</a></td>
						</tr>
					<?php }  ?>
					</tbody>
			</table>
			<!--/row -->
		</div>
    </div>
              

              
              
	  </section>
  </section>

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/admin/assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/jquery-1.8.3.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/diccionariojson.js" ></script>
	<script src="<?php echo base_url();?>assets/js/jquery.translate.js"/>
    <script src="<?php echo base_url();?>assets/admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/jquery.sparkline.js"></script>

<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url();?>assets/admin/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url();?>assets/admin/assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url();?>assets/admin/assets/js/zabuto_calendar.js"></script>
	<script src="<?php echo base_url();?>assets/sweetalert-master/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/assets/js/validCampoFranz.js"></script>
            
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/dataTables/datatables.js"></script>
	<script type="application/javascript">
	
		$(document).ready( function () {
			
				var translator = $('body').translate({lang: "es", t: dict});
				
				if(localStorage.getItem('len')!=''){
					translator.lang(localStorage.getItem('len'));
				}
			
			
				$('#blog_table').DataTable();
				
				
				  $('.fancybox').fancybox({
					width: '90%',
					minWidth		: '100px',
					minHeight	: '100px',
					autoSize	: true,
					padding:	5,
					autoCenter	: true,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'elastic',
					// scrollOutside:false,
					// modal:true,
					type: 'iframe',
				}); 
				
				$('#add_blog').fancybox({
					width: '90%',
					minWidth		: '100px',
					minHeight	: '100px',
					autoSize	: false,
					padding:	5,
					autoCenter	: true,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'elastic',
					// scrollOutside:false,
					closeClick: 'false',
					closeBtn: 'true',
					type: 'iframe',
					afterClose: function() {
						 location.reload();
					}
				});
		} );
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
       
				jQuery(document).ready(function($) {
					$(".scroll, .navbar li a, .footer li a").click(function(event){
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
        
        function enviarDatos()
        {
            if($('#TextBuscar').val()!='')
            {
                   $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				TextBuscar: $("#TextBuscar").val()
				
				},
				//url:"< ?= site_url('busqueda/busqueda') ?>",
				url:"<?= site_url('busqueda/verificarBusqueda') ?>",
				async: true,	 
				success: function(response)
				{
                       if(parseInt(response)==0)
                       {
                        //mandar mensaje
                       swal("Sin coincidencias para mostrar", "", "error");
                       $('#results').hide(); 
                        }else
                          {
                          enviarDatos1();
                          }
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
            }
            else
            {
                
            }
        }
        function enviarDatos1()
        {
            if($('#TextBuscar').val()!='')
            {
                   $.ajax({
				type: "POST", //envia la posicion por metodo post de ajax
				data:{
				TextBuscar: $("#TextBuscar").val()
				
				},
				url:"<?= site_url('busqueda/busqueda') ?>",
				async: true,	 
				success: function(response)
				{
                       $('#results').show();
                   $('#results').html(response);    
                   $('#tablaPrincipal').hide();    
             },
				error: function (obj, error, objError){
				alert("Error: " + objError);
				}
				});
            }
            else
            {
                
            }
        }

        
    $("#TextBuscar" ).keypress(function( event )
        {
            if ( event.which == 13 ) {
                //alert('dasdasd');
                //event.preventDefault();
                enviarDatos();
                }
        });
        
    </script>

       <script type="text/javascript">
            $(function(){
                //Para escribir solo letras
                $('#TextBuscar').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚáéíóú');


                //Para escribir solo numeros    
               // $('#miCampo2').validCampoFranz('0123456789');    
            });
       
        </script>

  </body>
</html>
