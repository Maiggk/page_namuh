<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Namuh</title>
	
	<!-- Data Tables content -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dataTables/datatables.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/scjn/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/scjn/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/scjn/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/scjn/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/scjn/assets/lineicons/style.css">    
     <link href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/scjn/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/scjn/assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();?>assets/scjn/assets/js/chart-master/Chart.js"></script>
   <link href="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      
      
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
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
                      <a href="<?php echo base_url().'index.php/scjn'; ?>">
                          <i class="fa fa-book"></i>
                          SCJN <span class="trn">10a Epoca</span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a  href="<?php echo base_url().'index.php/scjn/dof'; ?>">
                          <i class="fa fa-bookmark-o"></i>
                          <span>DOF</span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a href="<?php echo base_url().'index.php/scjn/difusion_libros'; ?>">
                          <i class="fa fa-share-alt-square"></i>
                          <span class="trn">Difusión Bibliografica</span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a class="active"  href="<?php echo base_url().'index.php/scjn/facebook'; ?>">
                          <i class="fa fa-facebook-square"></i>
                          <span class="trn">Sociales</span>
                      </a>
                  </li>
				  
				  <li class="mt">
                      <a  href="<?php echo base_url().'index.php/scjn/contenido_exclusivo'; ?>">
                          <i class="fa fa-lock"></i>
                          <span class="trn">Contenido Exclusivo</span>
                      </a>
                  </li>
				  
				    <li class="mt">
                      <a  href="<?php echo base_url().'index.php/scjn/publicaciones_pdf'; ?>">
                          <i class="fa fa-file-pdf-o"></i>
                          <span class="trn">Publicaciones PDF</span>
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
              <br>
              <div id="" class="col-md-6 col-md-offset-3">
             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCNPDPCiprianoGomezLara%2F&tabs=timeline&width=500&height=900&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="900" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              </div>
              
	  </section>
  </section>

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/scjn/assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/scjn/assets/js/jquery-1.8.3.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/diccionariojson.js" ></script>
	<script src="<?php echo base_url();?>assets/js/jquery.translate.js"/>
    <script src="<?php echo base_url();?>assets/scjn/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/scjn/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/scjn/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/scjn/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/scjn/assets/js/jquery.sparkline.js"></script>

<script src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url();?>assets/scjn/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/scjn/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/scjn/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url();?>assets/scjn/assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url();?>assets/scjn/assets/js/zabuto_calendar.js"></script>
	<script src="<?php echo base_url();?>assets/sweetalert-master/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url();?>assets/scjn/assets/js/validCampoFranz.js"></script>
            
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/dataTables/datatables.js"></script>
	<script type="text/javascript">
       
	</script>
	
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
           $(document).ready(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_ES/sdk.js', function(){
    FB.init({
    appId      : '{your-app-id}',
    status     : true,
    xfbml      : true,
    version    : 'v2.4' // or v2.0, v2.1, v2.2, v2.3
  });   
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });
});
        </script>   
  <script type="text/javascript">
			
      $('.fancybox').fancybox({
					minWidth	: '100px',
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
		</script>

  </body>
</html>
