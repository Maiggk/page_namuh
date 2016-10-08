<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
 
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
 
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<!--inicio seccion photoswipe-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/script-min.js"></script>
    

<!--fin seccion photoswipe-->

<script>

    $('#cierra_sesion').click(function() {
        $.ajax({   url:"<?php echo base_url(); ?>index.php/Login/cierra" }); 
        parent.location.href="<?php echo base_url(); ?>";
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
    
    
    $(document).ready(function(){
        
    });
</script>






