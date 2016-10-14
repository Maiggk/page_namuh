    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/queryloader2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.ba-cond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.slitslider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/idangerous.swiper.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.fitvids.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/TweenMax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/ScrollToPlugin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.scrollmagic.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.placeholder.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.easing.1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.waitforimages.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.fillparent.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/jquery.bootstrap-touchspin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap-slider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap-rating-input.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/jquery.gmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/circle_diagram.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/main.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/alertifyjs/alertify.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert/sweetalert.min.js"></script>
    
<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76222276-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
    
    $('#cierra_sesion').click(function() {
        $.ajax({   url:"<?php echo base_url(); ?>index.php/Login/cierra" }); 
        window.parent.location.href="<?php echo base_url(); ?>";
    });
	
	$('#productos_reg').click(function(){
		// swal('Para ver productos favor de registrarse.');
		swal({title: '<span style="color:#FF0000">  </span>', 
				text: '<span style="color:#FF0000">Para acceder a esta sección registrate.</span>', 
				imageUrl: "<?php echo base_url(); ?>assets/img/logo-dark.png",
				imageSize:"250x100",
				html: true });
	});
    
    $('#inicia_sesion').click(function() {
     //    alert($('#user_name').val());
       // alert($('#pass_word').val());
        $.post("<?php echo base_url().'index.php/Login/inicio';?>",
        { 
        uzer:$('#user_name').val(),
        pazz:$('#pass_word').val(),
        },
        function(data) {
            if(data==0){
            swal({  
                title: "Error",
                text: "Verifica tus datos e intenta nuevamente",
                type: "error",
                timer: 3000,
                showConfirmButton: false });
                $('#user_name').val('');
                $('#pass_word').val('');
                $("#dropdownMenuLogin").click();
                $('#user_name').focus();
            }else{
            parent.location.href="<?php echo base_url(); ?>";
        }
            //console.log(data);
          //  alert(data);
        });
    });
</script>

<script>
		$(function () {
			$("#slider1").responsiveSlides({
				auto: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>

        <script>
            function validaLlenadoNombre(){
                document.getElementById('nombreReq').outerHTML='';
            }
            
            var enviado=0;
            $( document ).ready(function() {
               /* 	$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
                var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
                 */
                //translator=$(' body ').translate({lang:  "es", t: dict});
               
                $('#send').click(function() {
                /*   $('.requerido_nombre').show();
                     $("#name").css("border-color","red");
                      $('#name').focus();*/
                    if($('#name').val()!=''){
                            if($('#phone').val()!=''){
                                      if( (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#email').val())) ) { 
                                            if($('#comment').val()!=''){
                                                $('#send').hide();
                                                  $('#contactForm').hide();
                                                 $('#enviando').show();
                                                 $.post("<?php echo base_url().'index.php/Correo/send_mail';?>",
                                                    { 
                                                        Nombre:$('#name').val(),
                                                        Telefono:$('#phone').val(),
                                                        Dcorreo:$('#email').val(),
                                                        Mensaje:$('#comment').val()
                                                    },
                                                    function(data) {
                                                    
                                                       // alert(data);
                                                     if(data!='enviado'){
                                                         $('#enviando').hide();
                                                          $("#failureMessage").show();
                                                           setTimeout(function() {
                                                            $("#send").fadeIn(1500);
                                                            $("#contactForm").fadeIn(1500);
                                                            $("#failureMessage").fadeOut(1500);
                                                               
                                                            },3000);
                                                     }else{
                                                         $('#enviando').hide();
                                                         $('#successMessage').show();
                                                          setTimeout(function() {
                                                            $("#send").fadeIn(1500);
                                                            $("#contactForm").fadeIn(1500);
                                                            $("#successMessage").fadeOut(1500);
                                                                    $('#name').val('');
                                                                    $('#phone').val('');
                                                                    $('#email').val('');
                                                                    $('#comment').val('');
                                                              // $("#phone").css("color","#ffffff");
                                                            },3000);
                                                       
                                                     }
                                                        //deshabilitar boton
                                                        //limpieza campos
                                                        //cargando de mensaje enviado
                                                        //alertify // http://alertifyjs.com/
                                                    }
                                                );                                      
                                            }else{
                                                $('.requerido_comment').show();
                                                $("#comment").css("border-color","red");
                                                $('#comment').focus();  
                                            }
                                    }else{
                                        $('.requerido_email').show();
                                        $("#email").css("border-color","red");
                                        $('#email').focus();  
                                    }
                              }else{
                                $('.requerido_phone').show();
                                $("#phone").css("border-color","red");
                                $('#phone').focus();  
                              }
                       }else{
                        $('.requerido_name').show();
                        $("#name").css("border-color","red");
                        $('#name').focus();
                       }
                     // 

                 //  }
                });
              
                $("#name").change( function()
                   {
                    if($("#name").val()!="")
                        $('.requerido_name').hide(); 
                        $("#name").css("border-color","#909090");
                   });
                $("#phone").change( function()
                   {
                    if($("#phone").val()!="")
                        $('.requerido_phone').hide(); 
                        $("#phone").css("border-color","#909090");
                   });
                $("#email").change( function()
                   {
                    if($("#email").val()!="")
                        $('.requerido_email').hide(); 
                        $("#email").css("border-color","#909090");
                   });
                $("#comment").change( function()
                   {
                    if($("#comment").val()!="")
                        $('.requerido_comment').hide(); 
                        $("#comment").css("border-color","#909090");
                   });

                  $('#sendUnete').click(function() {
                /*   $('.requerido_nombre').show();
                     $("#name").css("border-color","red");
                      $('#name').focus();*/
                    if($('#name').val()!=''){
                            if($('#phone').val()!=''){
                                      if( (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#email').val())) ) { 
                                            if($('#comment').val()!=''){
                                                $('#send').hide();
                                                  $('#uneteForm').hide();
                                                 $('#enviando').show();
                                                 $.post("<?php echo base_url().'index.php/Unete/send_mail';?>",
                                                    { 
                                                        Nombre:$('#name').val(),
                                                        Telefono:$('#phone').val(),
                                                        Dcorreo:$('#email').val(),
                                                        Mensaje:$('#comment').val()
                                                    },
                                                    function(data) {
                                                    
                                                       // alert(data);
                                                     if(data!='enviado'){
                                                         $('#enviando').hide();
                                                          $("#failureMessage").show();
                                                           setTimeout(function() {
                                                            $("#send").fadeIn(1500);
                                                            $("#uneteForm").fadeIn(1500);
                                                            $("#failureMessage").fadeOut(1500);
                                                               
                                                            },3000);
                                                     }else{
                                                         $('#enviando').hide();
                                                         $('#successMessage').show();
                                                          setTimeout(function() {
                                                            $("#send").fadeIn(1500);
                                                            $("#uneteForm").fadeIn(1500);
                                                            $("#successMessage").fadeOut(1500);
                                                                    $('#name').val('');
                                                                    $('#phone').val('');
                                                                    $('#email').val('');
                                                                    $('#comment').val('');
                                                              // $("#phone").css("color","#ffffff");
                                                            },3000);
                                                       
                                                     }
                                                        //deshabilitar boton
                                                        //limpieza campos
                                                        //cargando de mensaje enviado
                                                        //alertify // http://alertifyjs.com/
                                                    }
                                                );                                      
                                            }else{
                                                $('.requerido_comment').show();
                                                $("#comment").css("border-color","red");
                                                $('#comment').focus();  
                                            }
                                    }else{
                                        $('.requerido_email').show();
                                        $("#email").css("border-color","red");
                                        $('#email').focus();  
                                    }
                              }else{
                                $('.requerido_phone').show();
                                $("#phone").css("border-color","red");
                                $('#phone').focus();  
                              }
                       }else{
                        $('.requerido_name').show();
                        $("#name").css("border-color","red");
                        $('#name').focus();
                       }
                     // 

                 //  }
                });
              
                $("#name").change( function()
                   {
                    if($("#name").val()!="")
                        $('.requerido_name').hide(); 
                        $("#name").css("border-color","#909090");
                   });
                $("#phone").change( function()
                   {
                    if($("#phone").val()!="")
                        $('.requerido_phone').hide(); 
                        $("#phone").css("border-color","#909090");
                   });
                $("#email").change( function()
                   {
                    if($("#email").val()!="")
                        $('.requerido_email').hide(); 
                        $("#email").css("border-color","#909090");
                   });
                $("#comment").change( function()
                   {
                    if($("#comment").val()!="")
                        $('.requerido_comment').hide(); 
                        $("#comment").css("border-color","#909090");
                   });

            });
            <?php 
            if($this->session->flashdata('mensaje')==1)
                            {
?>
                                 swal({   
                                title: "¡Bienvenido!",
                                text: "<?php echo $this->session->userdata('nameUser'); ?>",
                                type: "success",   
                                showCancelButton: false,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "Aceptar",   
                                cancelButtonText: "Cancelar",  
                                closeOnConfirm: true,   
                                closeOnCancel: true }, 
                                  function(isConfirm)
                                {   
                                    
                                    if (isConfirm) 
                                    {    
                                      //  location.reload();
                                    } else 
                                    {     
                                    //    location.reload();
                                    } 
                                }
                            ); 
            <?php
                         
                            }
            ?>
        </script>
