<body>
    <div id="load"></div><!--[if lt IE 9]>
    <p class="browsehappy">You are using an strong outdated browser. <br>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="page">
      <!-- Start Nav Section-->
       <nav id="main-navigation" role="navigation" class="navbar navbar-fixed-top navbar-standard">
         
         <!--Buscador Inteligente--> 
  <!--
          <a href="javascript:void(0)" class="search_button"><i class="fa fa-search"></i></a>
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
        </form>
-->
          
          
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
                            <div class="form-inline form-group" style="text-align:center">
                                <a id="cierra_sesion" name="cierra_sesion" type="button" class="btn btn-primary btn-xs">Cerrar Sesión</a>
                            </div>
                        </form>
                        </div>
                    <?php  } ?>
              </li>             
                
                <!--Objetos agregados-->
        <!--

              <li><a id="dropdownMenuCart" href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-shopping-cart fa-lg"></i>&nbsp;<span class="badge">2</span></a>
                <div aria-labelledby="dropdownMenuCart" class="dropdown-menu widget-box">
                  <div class="shopping_cart_dropdown">
                    <ul class="cart_list product_list_widget">
                      <li><a href="#" class="delete"><i class="fa fa-close"></i></a><a href="#"><img alt="" src="assets/img/products/3.jpg"><span>New Peace Baja</span></a>
                        <h5 class="quantity">45.00</h5>
                      </li>
                      <li><a href="#" class="delete"><i class="fa fa-close"></i></a><a href="#"><img alt="" src="assets/img/products/5.jpg"><span>Sunny Tank Selected</span></a>
                        <h5 class="quantity">25.00</h5>
                      </li>
                    </ul>
                    <div class="total">
                      <h6>Subtotal</h6><span>$70.00</span>
                    </div>
                    <div class="action-button"><a href="<?php echo base_url(); ?>index.php/carrito" class="btn btn-dark btn-bordered btn-xs upper">View Cart</a><a href="shop-checkout.html" class="btn btn-primary btn-xs upper">Checkout</a></div>
                  </div>
                </div>
              </li> 
                
                -->
   <?php 
            //  echo 'admin_var: '.$this->session->userdata('admin_var').'<br>'; 
            //  echo 'us3r_cl1ent_v4r: '.$this->session->userdata('us3r_cl1ent_v4r'); 
              ?>
                
            </ul>
              
              
            <button type="button" class="navbar-toggle"><i class="fa fa-close fa-lg"></i></button>
            <ul id="one-page-menu" role="menu" class="nav navbar-nav navbar-left" style="font-size:10px">
                <?php if($this->session->userdata('admin_var')!=''){ ?>
                
              <li><a href="<?php echo base_url(); ?>index.php/Admin/productos" title="Home" data-ref="principal">Administración</a></li>
                <?php } ?>
                
<!--              <li><a href="<?php echo base_url(); ?>" title="Home" data-ref="principal">Home</a></li>-->
                <li><a href="<?php echo base_url(); ?>index.php/nosotros" title="Nosotros">Nosotros</a></li>
                <?php if($this->session->userdata('us3r_cl1ent_v4r')!=''  | $this->session->userdata('admin_var')!=''){ ?>
					<li><a href="<?php echo base_url(); ?>index.php/galeria" title="Productos">Productos</a></li>
                <?php }else{ ?>
					<li><a  title="Productos" id="productos_reg" >Productos</a></li>
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
      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space">Postales</h2>
              <p class="lead">Álbums</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      
        <!--Inicio sección del cuerpo-->
             <div class="sep-top-2x sep-bottom-md">
                    <div class="container">
                      <div class="row">
                          <?php 
                          $j=1;
                          //for($i=1;$i<=6;$i++){ 
                          foreach ($albums as $album){?>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 sep-bottom-lg">
                            <a href="<?php echo base_url();?>index.php/postales/album/<?php echo $album->id_albums_postales; ?>" class="product-image outline-outward">
                                <img src="<?php echo base_url(); ?>assets/uploads/postales/album_caratulas/<?php echo $album->caratula_album; ?>" alt="" class="img-responsive">
                            </a>
                          <div class="product-title">
                              <p class="upper" style="text-align:center"><?php echo $album->nombre_album; ?></p>

                          </div>
                        </div>  
                            <?php if($j%2==0){ ?>
                                <div class="clearfix vivisible-lg" style="z-index:-1"></div>
                            <?php } ?>
                          <?php $j=$j+1;} ?>
                      </div>
                    </div>
            </div>
        <!--Fin sección del cuerpo-->
      
      <!-- Start Footer section-->
      <footer id="footer">
        <div class="inner sep-bottom-md">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12" style="text-align:center">
                <div class="widget sep-top-lg"><img src="<?php echo base_url(); ?>assets/img/logo_Main.png" alt="" class="logo"><small class="sep-top-xs sep-bottom-md">Cada pieza es una historia </small>
<!--                  <h6 class="upper widget-title">Mantente en contacto con nosostros</hs6>-->
                  <ul class="social-icon sep-top-xs">
                    <li><a href="https://es.pinterest.com/Namuhmex/" target="_blank" class="fa fa-pinterest fa-2x"></a></li>
                    <li><a href="https://www.facebook.com/Namuh-384417778289934/?fref=tsw" target="_blank" class="fa fa-facebook fa-2x"></a></li>
                    <li><a href="https://goo.gl/Cj84JC" target="_blank" class="fa fa-map-marker fa-2x"></a></li>
                    <li><a href="https://www.instagram.com/namuhmex/" target="_blank" class="fa fa-instagram fa-2x"></a></li>
                  
                     
                      
                  </ul>
                </div>
              </div>
  <div class="col-md-12 col-sm-12 col-xs-12  "> 
    
    <center>
        <small class=""><br><a href="<?php echo base_url(); ?>index.php/unete">Únete a nuestro equipo</a></small><br>
        <small class=""><br><a href="<?php echo base_url(); ?>index.php/politicas">Políticas</a></small>
      </center>
</div>
            </div>
          </div>
        </div>
        <div class="copyright sep-top-xs sep-bottom-xs">
          <div class="container">
            <div class="row" style="text-align:center">
           <div class="col-md-12"><small>Copyright 2016 © NAMUH. Todos los derechos reservados. Desarollado por <a target="_blank" href="http://cerbero.com.mx">Cerbero Soluciones Informáticas</a></small></div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer section-->
      <div id="back_to_top"><a href="#" class="fa fa-arrow-up fa-lg"></a></div>
    </div>
</body>
 