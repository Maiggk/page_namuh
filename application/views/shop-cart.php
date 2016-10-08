<body>
    <div id="load"></div><!--[if lt IE 9]>
    <p class="browsehappy">You are using an strong outdated browser. <br>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="page">
      <!-- Start Nav Section-->
       <nav id="main-navigation" role="navigation" class="navbar navbar-fixed-top navbar-standard">
         
         <!--Buscador Inteligente--> 
  
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
          
          
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle"><i class="fa fa-align-justify fa-lg"></i></button><a href="#" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/img/logo_Main.png" style="width:140px;padding:10px" class="logo-white"><img src="<?php echo base_url(); ?>assets/img/logo-dark.png" alt="" class="logo-dark" style="padding:10px"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right service-nav">
             
                <!--Login-->
    
                <li><a id="dropdownMenuLogin" href="#" data-toggle="dropdown" class="upper dropdown-toggle">Login</a>
                <div aria-labelledby="dropdownMenuLogin" class="dropdown-menu widget-box">
                  <form>
                    <div class="form-group">
                      <label class="sr-only">Username or Email</label>
                      <input type="text" value="" placeholder="Username or Email" name="" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                      <label class="sr-only">Password</label>
                      <input type="password" value="" placeholder="Password" name="" class="form-control input-lg">
                    </div>
                    <div class="form-inline form-group">
                      <button type="button" class="btn btn-primary btn-xs">Login</button>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><small> Remember me</small>
                        </label>
                      </div>
                    </div><a href="#"><small>Lost your Password?</small></a>
                  </form>
                </div>
              </li>
                
                
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
                
                
        
                
            </ul>
            <button type="button" class="navbar-toggle"><i class="fa fa-close fa-lg"></i></button>
            <ul id="one-page-menu" role="menu" class="nav navbar-nav navbar-left">
              <li><a href="<?php echo base_url(); ?>" title="Home" data-ref="">Home</a>
              </li>
              <!--li><a href="#about" title="About us" data-ref="about">About us</a></li-->
              <li><a href="<?php echo base_url(); ?>#portfolio" title="Portfolio" data-ref="">Interiorismo</a></li>
                
              <!--li><a href="#shop" title="Shop" data-ref="shop">Políticas</a></li-->
                
              <li><a href="<?php echo base_url(); ?>#pricing" title="Pricing" data-ref="">Puntos de venta</a>
              </li>
              <li><a href="<?php echo base_url(); ?>#contacts" title="Contacts" data-ref="">Contacto</a>
                      <li><a href="<?php echo base_url(); ?>index.php/Registro" title="Home" data-ref="Registro">Registro</a></li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space">Shop cart</h2>
              <p class="lead">View your product</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      <!-- Start Shop Cart-->
      <section class="sep-top-2x">
        <div class="container">
          <form method="post">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered table-condensed table-striped shop-table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col" class="dark upper">Product </th>
                      <th scope="col" class="dark upper">Price</th>
                      <th scope="col" class="dark upper">Quantity</th>
                      <th scope="col" class="dark upper">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a title="" href="#" class="remove-button"><span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-times fa-stack-1x fa-inverse"></i></span></a><a href="#" class="img-prod"><img src="<?php echo base_url();?>assets/img/products/5.jpg" alt="Dublin Blue Shirt" width="45" class="img-responsive"></a>
                        <h6 class="name-prod">Dublin Blue Shirt</h6>
                      </td>
                      <td>
                        <h5 class="upper">$12,00</h5>
                      </td>
                      <td>
                        <input type="text" value="2" name="" class="qty">
                      </td>
                      <td>
                        <h5 class="upper">$24,00</h5>
                      </td>
                    </tr>
                    <tr>
                      <td><a title="" href="#" class="remove-button"><span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-times fa-stack-1x fa-inverse"></i></span></a><a href="#" class="img-prod"><img src="<?php echo base_url();?>assets/img/products/4.jpg" alt="Only You" width="45" class="img-responsive"></a>
                        <h6 class="name-prod">Only You</h6>
                      </td>
                      <td>
                        <h5 class="upper">$12,00</h5>
                      </td>
                      <td>
                        <input type="text" value="2" name="" class="qty">
                      </td>
                      <td>
                        <h5 class="upper">$24,00</h5>
                      </td>
                    </tr>
                    <tr>
                      <td><a title="" href="#" class="remove-button"><span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-times fa-stack-1x fa-inverse"></i></span></a><a href="#" class="img-prod"><img src="<?php echo base_url();?>assets/img/products/3.jpg" alt="Heaven White Shirt" width="45" class="img-responsive"></a>
                        <h6 class="name-prod">Heaven White Shirt</h6>
                      </td>
                      <td>
                        <h5 class="upper">$12,00</h5>
                      </td>
                      <td>
                        <input type="text" value="2" name="" class="qty">
                      </td>
                      <td>
                        <h5 class="upper">$24,00</h5>
                      </td>
                    </tr>
                    <tr>
                      <td><a title="" href="#" class="remove-button"><span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-times fa-stack-1x fa-inverse"></i></span></a><a href="#" class="img-prod"><img src="<?php echo base_url();?>assets/img/products/6.jpg" alt="Robert jacket" width="45" class="img-responsive"></a>
                        <h6 class="name-prod">Robert jacket</h6>
                      </td>
                      <td>
                        <h5 class="upper">$12,00</h5>
                      </td>
                      <td>
                        <input type="text" value="2" name="" class="qty">
                      </td>
                      <td>
                        <h5 class="upper">$24,00</h5>
                      </td>
                    </tr>
                    <tr>
                      <td><a title="" href="#" class="remove-button"><span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-times fa-stack-1x fa-inverse"></i></span></a><a href="#" class="img-prod"><img src="<?php echo base_url();?>assets/img/products/2.jpg" alt="Osaka Men's Shirt" width="45" class="img-responsive"></a>
                        <h6 class="name-prod">Osaka Men's Shirt</h6>
                      </td>
                      <td>
                        <h5 class="upper">$12,00</h5>
                      </td>
                      <td>
                        <input type="text" value="2" name="" class="qty">
                      </td>
                      <td>
                        <h5 class="upper">$24,00</h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 sep-top-md">
                <div class="coupon-code form-group pull-left">
                  <input type="text" placeholder="Coupon code" value="" name="" class="form-control input-lg">
                </div>
                <button type="button" class="btn btn-dark btn-bordered">Apply Coupon</button>
              </div>
              <div class="col-md-6 sep-top-md text-right">
                <button type="button" class="btn btn-primary">Update Cart</button>
              </div>
            </div>
          </form>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="sep-top-lg">
                <form method="post">
                  <h5 class="upper">Calculate Shipping</h5>
                  <div class="form-group sep-top-sm">
                    <select name="" class="form-control input-lg">
                      <option value="">Select a country…</option>
                      <option value="IL">Israel</option>
                      <option selected="selected" value="IT">Italy</option>
                      <option value="CI">Ivory Coast</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                    </select>
                    <select name="" class="form-control input-lg">
                      <option value="">Select an option…</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                    </select>
                    <input type="text" name="" placeholder="Postcode / Zip" value="" class="form-control input-lg">
                  </div>
                  <div class="sep-top-sm text-right">
                    <button type="button" class="btn btn-dark btn-bordered">Calculate Shipping</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cart_totals sep-top-lg">
                <h5 class="upper">Cart Totals</h5>
                <div class="sep-top-sm">
                  <table class="table table-bordered table-condensed table-responsive">
                    <tbody>
                      <tr>
                        <td class="upper">Cart Subtotal</td>
                        <td class="upper">
                          <h5>$120,00</h5>
                        </td>
                      </tr>
                      <tr>
                        <td class="upper">Shipping and Handling</td>
                        <td>Free Shipping</td>
                      </tr>
                      <tr class="evidence">
                        <td class="upper">
                          <h5>Order Total</h5>
                        </td>
                        <td class="upper">
                          <h5>$120,00</h5>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="sep-top-sm text-right"><a href="" class="btn btn-primary">Proceed to Checkout</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Shop Cart-->
      <div class="sep-top-2x">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="text-center">
                <p class="lead">Nowadays, everybody wants an online shop. With The Company, this won’t be a problem. We made sure that WooCommerce is fully integrated in the design of The Company.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="text-center"><img alt="" src="<?php echo base_url();?>assets/img/card.png" class="sep-top-sm img-responsive">
                <ul class="shop-info-link sep-top-2x sep-bottom-lg">
                  <li class="sep-bottom-sm"><a href="http://themeforest.net/item/ottavio-multipurpose-html5-bootstrap-template/9562624?ref=kleis" target="_blank">Shipping &amp; Returns</a></li>
                  <li class="sep-bottom-sm"><a href="http://themeforest.net/item/ottavio-multipurpose-html5-bootstrap-template/9562624?ref=kleis" target="_blank">Delivery Information</a></li>
                  <li class="sep-bottom-sm"><a href="http://themeforest.net/item/ottavio-multipurpose-html5-bootstrap-template/9562624?ref=kleis" target="_blank">Privacy Policy</a></li>
                  <li class="sep-bottom-sm"><a href="http://themeforest.net/item/ottavio-multipurpose-html5-bootstrap-template/9562624?ref=kleis" target="_blank">Terms &amp; Conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start call to action section-->
      <section class="call-to-action bg-primary sep-top-md sep-bottom-md">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h5 class="action-title upper light">HAVE AN IDEA? WE’RE HERE TO HELP YOU MANAGE YOUR WORK</h5>
            </div>
            <div class="col-md-3 text-right"><a href="contact-us.html" class="btn btn-light btn-bordered btn-lg">Contact us</a></div>
          </div>
        </div>
      </section>
      <!-- End call to action section-->
      <!-- Start Footer section-->
      <footer id="footer">
        <div class="inner sep-bottom-md">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12" style="text-align:center">
                <div class="widget sep-top-lg"><img src="<?php echo base_url(); ?>assets/img/logo_Main.png" alt="" class="logo"><small class="sep-top-xs sep-bottom-md">Cada pieza es una historia </small>
                  <h6 class="upper widget-title">Mantente en contacto con nosostros</h6>
                  <ul class="social-icon sep-top-xs">
                    <li><a href="https://es.pinterest.com/Namuhmex/" target="_blank" class="fa fa-pinterest fa-3x"></a></li>
                    <li><a href="https://www.facebook.com/Namuh-384417778289934/?fref=tsw" target="_blank" class="fa fa-facebook fa-3x"></a></li>
                    <li><a href="https://plus.google.com/u/0/103684349523071611108/about" target="_blank" class="fa fa-google-plus fa-3x"></a></li>
                    <li><a href="https://www.instagram.com/namuhmex/" target="_blank" class="fa fa-instagram fa-3x"></a></li>
                    
                  </ul>
                </div>
              </div>
             

            </div>
          </div>
        </div>
        <div class="copyright sep-top-xs sep-bottom-xs">
          <div class="container">
            <div class="row" style="text-align:center">
              <div class="col-md-12"><small>Copyright 2016 © <a target="_blank" href="http://cerbero.com.mx">Cerbero Soluciones Informáticas</a>. Todos los derechos reservados.</small></div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer section-->
      <div id="back_to_top"><a href="#" class="fa fa-arrow-up fa-lg"></a></div>
    </div>

  </body>
