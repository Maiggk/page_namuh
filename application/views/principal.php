<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fotorama.css"/>        
      <section id="principal" class="demo-1" style="text-align:center">
       		<div class="slider">
			<ul class="rslides" id="slider1">
                
                <?php foreach($slides as $slide){ ?>
                <li>
					<img src="<?php echo base_url(); ?>assets/uploads/slides/<?php echo $slide->foto; ?>" alt="Wanderer">
					<div class="caption col-xs-12">
						<h4 style="color:#fff;font-style: italic;"><?php echo $slide->descripcion; ?></h4>
					</div>
				</li>
                <?php } ?>
			</ul>
		</div>
      </section>
      <!-- End Home Section-->
  
        <br>
        <br>
        <br>
      <section id="portfolio" class="sep-top-3x">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-title">
                <h2 class="bordered-left upper wow flipInX">PROYECTOS INTEGRALES </h2>
                <p class="lead wow flipInX">
                    ¿Algún proyecto en mente? En Namuh contamos con un equipo especializado para asesorarte y diseñar tu espacio. Ofrecemos productos exclusivos para tus proyectos. ¿Deseas más información? 
                     <a href="#contacts" title="Contacts" data-ref="contacts">CONTÁCTANOS</a>.</p><br/>
              </div>
            </div>
			<div class="fotorama" data-nav="thumbs" data-thumbmargin="10" data-thumbborderwidth="6" data-autoplay="true" data-stopautoplayontouch="false" data-thumbwidth="120px" data-thumbheight="120px" data-width="100%"  data-ratio="16/9" >
				<?php 
				if(isset($slidesInteriorismo)!=""){
					$i=1;
					foreach($slidesInteriorismo as $slideInteriorismo){?>
						<a href="<?php echo base_url(); ?>index.php/registro<?php echo $i; ?>">
						  <img src="<?php echo base_url().'assets/uploads/slides_interiorismo/'.$slideInteriorismo->foto; ?>" alt="<?php echo $slideInteriorismo->foto; ?>" />
						</a>
				<?php $i=$i+1; } }  ?>
			</div>
		  </div>
		</div>		
        </section>
        

      <!-- Start Parallax section-->
      <section id="pricing" style="background-image: url(assets/img/intro-home6.jpg);" class="parallax">
        <div class="section-shade sep-top-5x sep-bottom-4x">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <div data-wow-delay="1s" class="section-title sep-bottom-lg wow bounceInUp">
                  <div class="icon-box icon-md">
                    
                  </div>
                  <div class="light">
                
                    <h2>PUNTOS DE VENTA</h2>
                    <p class="lead">
                        MATRIZ<br>

                        Camino a Alcocer km 2.2<br>
                        San Miguel de Allende, Gto Méx<br>
                        T(415)1548080 - CP 37760<br>
                        <br>
                        SHOWROOM CUNA QUINCE<br>

                        Cuna de Allende 15. Centro<br>
                        San Miguel de Allende, Gto Méx<br>
                        T(415)1547300 - CP 37700<br>
                        <br>
                        CASA PALACIO, ANTARA Y SANTA FE<br><br>
                        
                        HORARIOS <br><br>
                        <label>MATRIZ</label><br>
                        LUNES A VIERNES 9 AM A 6 PM, SÁBADO 10 AM A 6 PM, DOMINGO 11 AM A 4 PM<BR><BR>
                        
                        <label>CUNA</label><br>
                        LUNES A DOMINGO 11 AM A 7 PM, CERRADO LOS MARTES<BR><BR>
                        <label>ANTARA</label><br>
                        MARTES A DOMINGO 11 AM A 7 PM<BR><BR>
                        <label>SANTA FE</label><br>
                        LUNES A DOMINGO 11 AM A 7 PM, CERRADO LOS MARTES<BR>
                      
                      </p>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </section>
      <!-- End Parallax section-->

      <!-- Start Contact section-->
      <section id="contacts" class="sep-top-3x sep-bottom-3x">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="section-title text-center">
               
                <h2 class="upper">Contáctanos</h2>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 sep-top-lg">
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".5s" class="icon-content img-circle wow flipInX"><i class="fa fa-map-marker"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Dirección</h6>
                  <p>Camino a Alcocer km 2.2, San Miguel de Allende, Gto. México.</p>
                    
                        
                    
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".7s" class="icon-content img-circle wow flipInX"><i class="fa fa-phone"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Teléfono</h6>
                  <p>01 415 154 8080</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay=".9s" class="icon-content img-circle wow flipInX"><i class="fa fa-envelope"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Email</h6>
                  <p>info@namuhmex.com / newslettler@namuhmex.com</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class="icon-box icon-xs sep-bottom-xs icon-gradient">
                <div data-wow-delay="1.1s" class="icon-content img-circle wow flipInX"><i class="fa fa-clock-o"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper info-title">Horarios de Atención</h6>
                  <p>
                    LUNES A VIERNES 09:00 - 18:00<br>
                    SÁBADO 10:00 - 18:00<br>
                    DOMINGO 11:00 - 16:00
                    </p>
                </div>
              </div>
              <!--End icon box-->
            </div>
            <div class="col-md-6 sep-top-lg">
              <div class="contact-form">
                 
                <div id="successMessage" style="display:none" class="alert alert-success text-center">
                  <p><i class="fa fa-check-circle fa-2x"></i></p>
                  <p>Gracias por enviar tu mensaje! Nosotros te daremos respuesta lo antes posible.</p>
<!--                  <p>Thanks for sending your message! We'll get back to you shortly.</p>-->
                </div>
                <div id="failureMessage" style="display:none" class="alert alert-danger text-center">
                  <p><i class="fa fa-times-circle fa-2x"></i></p>
<!--                  <p>There was a problem sending your message. Please, try again.</p>-->
                  <p>Ocurrio un problema enviando tu mensaje porfavor inenta nuevamente.</p>
                </div>
                <div id="incompleteMessage" style="display:none" class="alert alert-warning text-center">
                  <p><i class="fa fa-exclamation-triangle fa-2x"></i></p>
                  <!--p>Please complete all the fields in the form before sending.</p-->
                  <p>Favor de completar todos los campos en el formulario antes de ser enviados.</p>
                </div>
                  
                  
                    <div id="enviando"  style="display:none">
                 <center> <img src="<?php echo base_url();?>assets/images/correo.gif" style="width:30%"></center>
                  </div>
                  
                <form id="contactForm"  method="post" class="validate">
                  <div class="form-group sep-top-xs">
                    <label for="contactFormName" class="upper">Tu Nombre</label>
                    <input id="name" type="text" placeholder="Introduce tu Nombre" name="name" class="form-control input-lg required"/>
                      <label class="requerido_name" style="color:red;">Campo Nombre Requerido</label>
                  </div>
                  <div class="form-group sep-top-xs">
                    <label for="contactFormPhone" class="upper">Tu Teléfono</label>
                    <input id="phone" type="text" placeholder="Introduce tu Teléfono" name="phone" class="form-control input-lg required"/>
                      <label class="requerido_phone" style="color:red">Campo Teléfono requerido</label>
                  </div>
                  <div class="form-group sep-top-xs">
                    <label for="contactFormEmail" class="upper">Tu Correo Electrónico</label>
                    <input id="email" type="email" placeholder="Introduce tu Correo Electrónico" name="email" class="form-control input-lg required email"/>
                      <label class="requerido_email" style="color:red;">Campo Correo Electrónico requerido</label>
                  </div>
                  <div class="form-group sep-top-xs">
                    <label for="contactFormComment" class="upper">Tus Comentarios</label>
                    <textarea id="comment" placeholder="Introduce tus comentarios" rows="9" name="comment" class="form-control input-lg required"></textarea>
                      <label class="requerido_comment" style="color:red;">Campo Mensaje requerido</label>
                  </div>
                  <div class="form-group sep-top-xs">
                  <!--  <a id="send" data-wow-delay=".5s" class="btn btn-primary btn-lg wow bounceInRight" href="#contacts"><i class="fa fa-paper-plane"></i> Enviar Mensaje</a>-->
                      <a id="send"  class="btn btn-primary btn-lg" href="#contacts"><i class="fa fa-paper-plane"></i> Enviar Mensaje</a>
                  </div>
                  <!--input#subject.form-control.input-lg.required(type='text', placeholder='Subject of your message', name='subject')
                  -->
                </form>
                <div class="hidden"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact section-->
<script src="<?php echo base_url(); ?>assets/js/fotorama.js"></script>