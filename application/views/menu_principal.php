
<body>
    <div id="load"></div><!--[if lt IE 9]>
    <p class="browsehappy">You are using an strong outdated browser. <br>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="page">
      <!-- Start Nav Section-->
      <nav id="main-navigation" role="navigation" class="navbar navbar-fixed-top navbar-standard" >
         

          
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
        <li>
             <?php if($this->session->userdata('nameUser')!=''){ ?>
                <a id="" href="<?php echo base_url().'index.php/Carrito'?>"  class="dropdown-toggle">
                    <i class="fa fa-shopping-cart fa-lg"></i>&nbsp;<span class="badge"><?php if(isset($elementos))echo $elementos;  ?></span>
                </a>
            <?php } ?>
                <!--<div aria-labelledby="dropdownMenuCart" class="dropdown-menu widget-box">
                  <div class="shopping_cart_dropdown">
                    <ul class="cart_list product_list_widget">
                      <li>
                            <a href="#" class="delete"><i class="fa fa-close"></i></a>
                            <a href="#"><img alt="" src="img/products/3.jpg"><span>New Peace Baja</span></a>
                            <h5 class="quantity">45.00</h5>
                      </li>
                      <li>
                            <a href="#" class="delete"><i class="fa fa-close"></i></a>
                            <a href="#"><img alt="" src="img/products/5.jpg"><span>Sunny Tank Selected</span></a>
                            <h5 class="quantity">25.00</h5>
                      </li>
                    </ul>
                    <div class="total">
                      <h6>Subtotal</h6><span>$70.00</span>
                    </div>
                    <div class="action-button">
                        <a href="shop-cart.html" class="btn btn-dark btn-bordered btn-xs upper">View Cart</a>
                        <a href="shop-checkout.html" class="btn btn-primary btn-xs upper">Checkout</a>
                    </div>
                  </div>
                </div>-->
              </li>

                
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
                <li><a href="<?php echo base_url(); ?>index.php/divulgacion/promocion" title="Promociones" data-ref="promociones">Promociones</a></li>
                <li><a href="<?php echo base_url(); ?>#pricing" title="Puntos de venta" data-ref="pricing">Puntos de venta</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/postales" title="Namuh Travel" data-ref="travel">Travel</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/divulgacion/arte" title="Namuh Travel" data-ref="travel">Arte</a></li>

              <li><a href="<?php echo base_url(); ?>#portfolio" title="Interiorismo" data-ref="portfolio">Interiorismo</a></li>
                
              <!--li><a href="#shop" title="Shop" data-ref="shop">Políticas</a></li-->
                
              
              <li><a href="http://insight360.mx/namuh1/" target="_blank" title="Recorrido Virtual">Tour Virtual</a></li>
              
              <li><a href="<?php echo base_url(); ?>#contacts" title="Contacto" data-ref="contacts">Contacto</a></li>
                   
            </ul>
          </div>
        </div>
      </nav>
      <!-- Start Home Section-->
