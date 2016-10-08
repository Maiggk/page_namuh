
<body>
    <div id="load"></div><!--[if lt IE 9]>
    <p class="browsehappy">You are using an strong outdated browser. <br>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="page">
      <!-- Start Nav Section-->
      <nav id="main-navigation" role="navigation" class="navbar navbar-fixed-top navbar-standard" >
         
         <!--Buscador Inteligente--> 
  
    <!--   <a href="javascript:void(0)" class="search_button"><i class="fa fa-search"></i></a>
        <form action="search.html" method="get" role="search" class="h_search_form">
          <div class="container">
            <div class="h_search_form_wrapper">
              <div class="input-group"><span class="input-group-btn">
                  <button type="submit" class="btn btn-sm"><i class="fa fa-search fa-lg"></i></button></span>
                
                <input type="text" placeholder="Búsqueda Inteligente" class="form-control">
              </div>
              <div class="h_search_close"><a href="#"><i class="fa fa-times"></i></a></div>
            </div>
          </div>
        </form>-->
          
          
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle"><i class="fa fa-align-justify fa-lg"></i></button>
              <a href="<?php echo base_url(); ?>" class="navbar-brand">
                  <img src="<?php echo base_url(); ?>assets/img/logo_Main.png" style="width:140px;padding:10px" class="logo-white">
                  <img src="<?php echo base_url(); ?>assets/img/logo-dark.png" alt="" class="logo-dark" style="padding:10px">
              </a>
          </div>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right service-nav" style="font-size:10px">
             
                <!--Login-->
      
      
                <li>
                    
                    <?php if($this->session->userdata('nameUser')==''){ ?>
                            <a id="dropdownMenuLogin" href="#" data-toggle="dropdown" class="upper dropdown-toggle">Iniciar Sesión / Registro</a>
                       <div aria-labelledby="dropdownMenuLogin" class="dropdown-menu widget-box">
                        <form>
                            <div class="form-group">
                                <label class="sr-only">Correo</label>
                                <input type="text" value="" placeholder="Correo" name="user_name" id="user_name" class="form-control input-lg" >
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Contraseña</label>
                                <input type="password" value="" placeholder="Contraseña" name="pass_word" id="pass_word" class="form-control input-lg" >
                            </div>
                            <div class="form-inline form-group" style="text-align:center">
                                <a href="<?php echo base_url(); ?>index.php/Registro" class="btn btn-primary btn-xs">Registrarse</a>
                                
                                <a id="inicia_sesion" name="inicia_sesion" type="button" class="btn btn-primary btn-xs">Iniciar Sesión</a>
                            </div><center><a href="<?php echo base_url(); ?>index.php/Registro/recoveryLogin"><small>¿Olvidaste tu contraseña?</small></a></center>
                        </form>
                   </div>
                    <?php }else{ ?>
                    <a id="dropdownMenuLogin" href="#" data-toggle="dropdown" class="upper dropdown-toggle">
                    <?php echo ''.$this->session->userdata('nameUser').' / Cerrar Sesión'; //admin_var ?>
                    </a>
                       <div aria-labelledby="dropdownMenuLogin" class="dropdown-menu widget-box">
                        <form>
<!--                            <div class="form-group"><label class="sr-only">Usuario</label></div>-->
                            <div class="form-group">
                                <center><a  class="btn btn-primary btn-xs"  href="<?php echo base_url(); ?>index.php/Perfil/editPerfil">Perfil</a></center>
                            </div>
                            <div class="form-inline form-group" style="text-align:center">
                             
                                <a id="cierra_sesion" name="cierra_sesion" type="button" class="btn btn-primary btn-xs">Cerrar Sesión</a>
                            </div>
                        </form>
                        </div>
                    <?php  } ?>
              </li>         
                
                <!--Objetos agregados-->
        

                
            </ul>
              
              
            <button type="button" class="navbar-toggle"><i class="fa fa-close fa-lg"></i></button>
            <ul id="one-page-menu" role="menu" class="nav navbar-nav navbar-left" style="font-size:10px">
                <?php if($this->session->userdata('admin_var')!=''){ ?>
                
              <li><a href="<?php echo base_url(); ?>index.php/Admin/productos" title="Home" data-ref="principal">Administración</a></li>
                <?php } ?>
                
<!--              <li><a href="<?php echo base_url(); ?>" title="Home" data-ref="principal">Home</a></li>-->
<!--                <li><a href="<?php echo base_url(); ?>index.php/nosotros" title="Nosotros">Nosotros</a></li>-->
                <?php if($this->session->userdata('us3r_cl1ent_v4r')!=''  | $this->session->userdata('admin_var')!=''){ ?>
					<li><a href="<?php echo base_url(); ?>index.php/galeria" title="Productos">Productos</a></li>
                <?php }else{ ?>
					<li><a  title="Productos" id="productos_reg" title="Productos">Productos</a></li>
				<?php } ?>
              <!--li><a href="#about" title="About us" data-ref="about">About us</a></li-->
              <li><a href="<?php echo base_url(); ?>#pricing" title="Puntos de venta" data-ref="pricing">Puntos de venta</a></li>
              <li><a href="<?php echo base_url(); ?>#portfolio" title="Interiorismo" data-ref="portfolio">Interiorismo</a></li>
                
              <!--li><a href="#shop" title="Shop" data-ref="shop">Políticas</a></li-->
                
              
              <li><a href="http://insight360.mx/namuh1/" target="_blank" title="Recorrido Virtual">Tour Virtual</a></li>
              
              <li><a href="<?php echo base_url(); ?>#contacts" title="Contacto" data-ref="contacts">Contacto</a></li>
                   
            </ul>
          </div>
        </div>
      </nav>
      <!-- Start Home Section-->
       